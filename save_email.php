<?php
// save_email.php - Script pour sauvegarder les emails des visiteurs

// Configuration
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Fichier de sauvegarde
$filename = 'emails_liste.txt';

// Récupération des données
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!$data || !isset($data['prenom']) || !isset($data['nom']) || !isset($data['email'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Données manquantes']);
    exit;
}

// Validation de l'email
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Email invalide']);
    exit;
}

// Nettoyage des données
$prenom = htmlspecialchars(trim($data['prenom']));
$nom = htmlspecialchars(trim($data['nom']));
$email = htmlspecialchars(trim($data['email']));
$date = isset($data['date']) ? $data['date'] : date('d/m/Y H:i:s');

// Vérifier si l'email existe déjà
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    if (strpos($content, $email) !== false) {
        http_response_code(409);
        echo json_encode(['error' => 'Email déjà enregistré']);
        exit;
    }
}

// Format de la ligne à sauvegarder
$line = sprintf(
    "%s | %s %s | %s | %s\n",
    $date,
    $prenom,
    $nom,
    $email,
    $_SERVER['REMOTE_ADDR'] ?? 'IP inconnue'
);

// Sauvegarde dans le fichier
try {
    $result = file_put_contents($filename, $line, FILE_APPEND | LOCK_EX);
    
    if ($result === false) {
        http_response_code(500);
        echo json_encode(['error' => 'Erreur lors de la sauvegarde']);
        exit;
    }
    
    // Succès
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Email enregistré avec succès'
    ]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erreur serveur']);
}
?>
