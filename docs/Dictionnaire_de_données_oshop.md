# Dictionnaire de données

## Utilisateurs (`app_user`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre utilisateur|
|email|VARCHAR(64)|NOT NULL, UNIQUE|L'email de l'utilisateur|
|password|VARCHAR(64)|NOT NULL|Le mot de passe de l'utilisateur|
|pseudo|VARCHAR(64)|NOT NULL|Le pseudo de l'utilisateur|
|avatar|VARCHAR(64)|NULL|La photo d'avatar de l'utilisateur|
|role|ENUM('admin', 'reader', 'dev', 'uploader')|NOT NULL, DEFAULT 'reader'|Le rôle de l'utilisateur|
|status|TINYINT(3)|NOT NULL, DEFAULT 0|Le statut de l'utilisateur (1=actif, 2=désactivé/bloqué)|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du compte utilisateur|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de l'utilisateur|

## Historique de l'Utilisateurs (`user_history`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du log de l'utilisateur|
|email|VARCHAR(64)|NOT NULL, UNIQUE|L'email de l'utilisateur|
|password|VARCHAR(64)|NOT NULL|Le mot de passe de l'utilisateur|
|pseudo|VARCHAR(64)|NOT NULL|Le pseudo de l'utilisateur|
|avatar|VARCHAR(64)|NULL|La photo d'avatar de l'utilisateur|
|role|ENUM('admin', 'reader', 'dev', 'uploader')|NOT NULL, DEFAULT 'reader'|Le rôle de l'utilisateur|
|status|TINYINT(3)|NOT NULL, DEFAULT 0|Le statut de l'utilisateur (1=actif, 2=désactivé/bloqué)|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du compte utilisateur|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de l'utilisateur|


## Catégories (`category`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la catégorie|
|subtitle|VARCHAR(64)|NULL|Le sous-titre/slogan de la catégorie|
|picture|VARCHAR(128)|NULL|L'URL de l'image de la catégorie (utilisée en home, par exemple)|
|home_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la catégorie sur la home (0=pas affichée en home)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la catégorie|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la catégorie|

## Marque (`brand`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la marque|
|name|VARCHAR(64)|NOT NULL|Le nom de la marque|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la marque dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la marque|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la marque|

## Type de produit (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(64)|NOT NULL|Le nom du type|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage du type dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création du type|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du type|
