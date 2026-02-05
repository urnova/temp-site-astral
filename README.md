# Astral Technologie - Page Coming Soon

## 📁 Fichiers inclus

1. **index.html** - Page principale du site
2. **save_email.php** - Script PHP pour sauvegarder les emails
3. **logo.svg** - Votre logo Astral Technologie
4. **emails_liste.txt** - Fichier créé automatiquement pour stocker les inscriptions

## 🚀 Installation

### Étape 1 : Télécharger les fichiers
Placez tous les fichiers dans le même dossier sur votre serveur web.

### Étape 2 : Configuration du serveur
Assurez-vous que :
- PHP est installé (version 7.0 ou supérieure)
- Le serveur web (Apache, Nginx, etc.) est configuré
- Les permissions d'écriture sont accordées au dossier pour créer `emails_liste.txt`

### Étape 3 : Permissions
Sur Linux/Mac, donnez les bonnes permissions :
```bash
chmod 755 index.html save_email.php
chmod 644 logo.svg
chmod 666 emails_liste.txt  # ou créez-le avec les bonnes permissions
```

## 📧 Format du fichier emails_liste.txt

Les emails seront enregistrés au format :
```
Date | Prénom Nom | Email | Adresse IP
06/02/2026 14:30:45 | Jean Dupont | jean.dupont@example.com | 192.168.1.1
```

## ⚙️ Personnalisation

### Modifier la date de lancement
Dans `index.html`, ligne ~486 :
```javascript
const launchDate = new Date('2026-12-31T00:00:00').getTime();
```
Changez la date selon vos besoins.

### Modifier l'email de contact
Dans `index.html`, vers la fin du fichier :
```html
<a href="mailto:contact@astral-tech.com" class="footer-link">contact@astral-tech.com</a>
```

### Modifier les services
Dans `index.html`, section services :
```html
<div class="service-tag">🔧 Réparation informatique</div>
<div class="service-tag">💻 Développement web</div>
<div class="service-tag">🔒 Sécurité informatique</div>
```

## 🎨 Fonctionnalités

✅ Design ultra-moderne style science-fiction
✅ Animations fluides et élégantes
✅ Particules rouges animées
✅ Compte à rebours en temps réel
✅ Formulaire d'inscription avec validation
✅ Sauvegarde automatique des emails
✅ 100% Responsive (mobile, tablette, desktop)
✅ Logo personnalisé intégré
✅ Effets de hover sur les éléments

## 🔧 Résolution de problèmes

### Le formulaire ne fonctionne pas
- Vérifiez que PHP est bien installé
- Vérifiez les permissions du dossier
- Consultez les logs d'erreur PHP

### Les emails ne sont pas sauvegardés
- Vérifiez les permissions d'écriture
- Créez manuellement le fichier `emails_liste.txt` avec les bonnes permissions
- Vérifiez les logs d'erreur

### Le logo ne s'affiche pas
- Vérifiez que `logo.svg` est bien dans le même dossier
- Vérifiez le chemin dans le code HTML

## 📱 Compatibilité

- ✅ Chrome, Firefox, Safari, Edge (dernières versions)
- ✅ iOS Safari, Android Chrome
- ✅ Tous les écrans (320px à 4K+)

## 🎯 Prochaines étapes

Une fois que votre site complet sera prêt :
1. Ouvrez `emails_liste.txt` pour récupérer tous les emails
2. Importez-les dans votre système de newsletter
3. Envoyez une notification de lancement à vos futurs clients !

## 💡 Conseils

- Testez le formulaire avant la mise en ligne
- Faites des backups réguliers du fichier `emails_liste.txt`
- Surveillez régulièrement les nouvelles inscriptions
- Pensez à ajouter une politique de confidentialité (RGPD)

---

**Astral Technologie © 2026**
