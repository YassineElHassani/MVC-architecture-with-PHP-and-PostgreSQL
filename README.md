# Projet MVC PHP Moderne

Ce projet constitue une base d'architecture MVC modulaire et sécurisée pour le développement d'applications web en PHP. Il met l'accent sur la séparation des responsabilités, la réutilisabilité du code et l'application des meilleures pratiques (conformément aux standards PSR-1 et PSR-12).

## Fonctionnalités

- **Gestion avancée des routes** : Routeur personnalisé pour un routage propre.
- **Connexion sécurisée à PostgreSQL** : Utilisation de PDO pour une gestion robuste de la base de données.
- **Séparation Front/Back Office** : Dossiers distincts pour le public (Front Office) et l'administration (Back Office).
- **Authentification et sécurité** : Gestion des sessions, tokens, et protection contre CSRF, XSS et SQL Injection.
- **Gestion des rôles et ACL** : Contrôle des accès via des rôles définis.
- **Moteur de templates Twig** : Séparation de l'affichage et de la logique.
- **Injection de dépendances** : Gestion et réutilisation efficace des services.
- **Logs et gestion des erreurs** : Suivi et débogage simplifiés.
- **Design Patterns** : Utilisation du Repository Pattern, Service Container, etc.
- **Validation et Sécurisation** : Classes `Validator`, `Security` et `Session` pour un traitement sécurisé des données.

## Structure du Projet

```
/projet-mvc-php
│
├── public/                # Accessible via le navigateur
│   ├── index.php          # Point d'entrée de l'application
│   ├── .htaccess         # Réécriture d'URL et sécurité
│   └── assets/            # Fichiers CSS, JS, images
│
├── app/                   # Code de l'application
│   ├── controllers/       # Logique métier (Front et Back)
│   ├── models/            # Gestion de la base de données
│   ├── views/             # Templates Twig pour l'affichage
│   └── core/              # Classes principales (Router, Controller, Model, etc.)
│       ├── Router.php
│       ├── Controller.php
│       ├── Model.php
│       ├── View.php
│       ├── Database.php
│       ├── Auth.php
│       ├── Validator.php
│       ├── Security.php
│       └── Session.php
│
├── config/                # Configuration de l'application
│   ├── config.php         # Configuration de la base de données
│   └── routes.php         # Définition des routes
│
├── logs/                  # Journaux d'erreurs et d’accès
├── vendor/                # Dépendances (via Composer)
├── .env                   # Variables d’environnement
├── composer.json          # Gestionnaire de dépendances PHP
└── .gitignore             # Fichiers à ignorer par Git
```

## Installation et Configuration

1. **Cloner le Repository :**

   ```bash
   git clone https://github.com/votre-utilisateur/projet-mvc-php.git
   cd projet-mvc-php
   ```

2. **Installer les Dépendances :**

   ```bash
   composer install
   ```

3. **Configurer l’Environnement :**

   - Mettre à jour le fichier `.env` avec vos variables d'environnement.
   - Configurer la connexion à la base de données dans `app/config/config.php`.

4. **Configurer le Serveur Web :**

   Assurez-vous que le serveur redirige toutes les requêtes vers `public/index.php` (via le fichier `.htaccess`).

## Utilisation

- **Point d'entrée :** `public/index.php`
- **Définition des routes :** Dans `app/config/routes.php`
- **Développement :** Créez vos contrôleurs, modèles et vues en suivant la structure proposée.

## Planification et Livrables

- **Planification :** Suivi sur JIRA.
- **Livrables :**
  - Repository GitHub avec un README complet.
  - Présentation de 10 minutes pour expliquer le code et répondre aux questions.

## Critères de Performance

- Optimisation des requêtes SQL pour minimiser le temps d'exécution.
- Nommage explicite des classes et méthodes (conformité PSR).
- Encapsulation appropriée (propriétés privées/protégées, getters/setters).
- Utilisation judicieuse de l'héritage, interfaces et traits.
- Documentation claire et concise du code.
