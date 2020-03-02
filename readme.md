# HEY NEW ME - Diätkochboxen
Ist die Website eines Start-up-Unternehmens, dass Diätkochboxen anbietet, um so unseren Kunden das Abnehmen zu erleichtern.
Die Website hat ein integriertes CMS-System, mit dessen Hilfe der Blog und die Mitarbeiter 
verwaltet werden können. Die Erweiterung des Shops und des Ernährungsberater-Tools folgt in Kürze.


Praktische Projektarbeit: Web Application
- Web-Developer: Susanne Eder
- Modulnummer: WBD5204 0919
- Campus: SAE Institute München
- Studiengang: Webdesign & Development Diploma
- Abgabedatum: 02. März 2020
- Version: 1.0.0


Technik:
- Backend: Laravel, MySQL, JSON Web Token (JWT)
- Frontend: Vue.js, Axios, Bootstrap
- Methodology: RESTful API
- Features: Basic CRUD Application - create, read, update & delete Events (API Resources)


Versionen:
- PHP: 7.1.3
- MYSQL Server-Version: 5.7.25
- Laravel: 5.8
- Vue.js: 2.5.17
- BOOTSTRAP: 4.1.0


# Benutzer:
- Admin Rolle 2: => Hauptbenutzer: hat alle Rechte
- User Rolle 1: => kann eigene Posts schreiben, bearbeiten, löschen und sieht nur seine eigenen Posts


# Video:
https://www.loom.com/share/6d3835559b4e427caa350f882b0fe06a


# Datenbank Modell:
Einfache Many-to-Many Beziehungen
- User - many - Posts & umgekehrt


Einrichten:
1. Möglichkeit 

Datenbank manuell einrichten:

- PHP Server starten
- im Browser phpMyAdmin starten
- neues Verzeichnis "laravel_vue" erstellen
- Datenbank einbinden: Import /Stammverzeichnis laravel_vue.sql im Ordner "Datenbank"


2. Möglichkeit 
über Migrations, Factories, Seeder


# Installation
Serverumgebung schaffen: XAMPP, MAMP, WAMP, Vagrant, Laravel Valet etc.
Repository klonen bzw. ins Stammverzeichnis des PHP Webservers speichern

```
Einstellungen für die lokale Serverumgebung in der .env-Datei anpassen

In der Kommandozeile starten:
composer install
npm install
npm run watch

php artisan migrate
php artisan jwt:secret

php artisan serve 
```

Um die Datenbank zu füllen, folgende Befehle ausführen:

```
php artisan migrate:fresh --seed
```

# Weitere technische Features:
- Token auth (tymon/jwt-auth)
- Vue.js Frontend mit Vue Router
- Vue-moment installiert


Kontakt: eder-susanne@gmx.de

