# Site Web EREMS

installation et configuration du site web pour un usage local.

## Installation

  - Utilisation du server [WAMPSERVER](http://www.wampserver.com/) pour les applications web dynamiques sous le server Apache2, prend en compte PHP7.2 et d'une base de données MYSQL. Ainsi que PHPMyAdmin pour l'administration de celles-ci.

  - Puis pour travailler avec Symfony, [Composer](https://getcomposer.org/), le gestionnaire de dépendance pour PHP

Pour vérifier la bonne installation:

de PHP

```bash
php -v
```

et de Composer

```bash
composer -V
```

## Installation d'un server Apache
une fois dans le dossier de ton projet symfony

```bash
composer require server --dev
```

## Lancer le serveur
```bash
php bin/console server:run
```

# Configurer la base de données

Pour Symfony 5, il s'agit de mdifier une ligne dans le fichier ".env"

```bash
DATABASE_URL=mysql://user:password@127.0.0.1:3306/db_name?serverVersion=5.7
```
