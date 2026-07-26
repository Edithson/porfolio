# 🚀 Portfolio Professionnel & Admin Dashboard — Fonhouo Gaüs

<p align="center">
  <img src="porfolio/public/img/projects/rh_minfi.png" alt="Portfolio Banner" width="100%" style="border-radius: 10px; max-height: 300px; object-fit: cover;" />
</p>

<p align="center">
  <b>Portfolio d'Analyste Programmeur & Spécialiste Laravel / React</b><br>
  <i>Développement d'applications sur-mesure, architectures full-stack robustes et interfaces modernes.</i>
</p>

<p align="center">
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13"></a>
  <a href="https://react.dev"><img src="https://img.shields.io/badge/React-19.x-61DAFB?style=for-the-badge&logo=react&logoColor=black" alt="React 19"></a>
  <a href="https://inertiajs.com"><img src="https://img.shields.io/badge/Inertia.js-v3-9553E9?style=for-the-badge&logo=inertia&logoColor=white" alt="Inertia v3"></a>
  <a href="https://typescriptlang.org"><img src="https://img.shields.io/badge/TypeScript-5.x-3178C6?style=for-the-badge&logo=typescript&logoColor=white" alt="TypeScript"></a>
  <a href="https://tailwindcss.com"><img src="https://img.shields.io/badge/Tailwind_CSS-v4-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS v4"></a>
  <a href="https://pestphp.com"><img src="https://img.shields.io/badge/Pest_PHP-v4-Pest?style=for-the-badge&color=8B5CF6" alt="Pest PHP"></a>
</p>

---

## 📌 À propos du Développeur

* **Nom** : **Fonhouo Gaüs** (Edithson / Gaus Moafo)
* **Rôle** : Analyste Programmeur / Concepteur Full-Stack
* **Localisation** : Bafoussam & Yaoundé, Cameroun (Disponible à distance — Monde entier)
* **Philosophie** : *"La programmation est un grand jeu d'imagination et de logique."*  
  Créer sur-mesure ce que l'on aurait pu simplement acheter, en alliant rigueur technique, vision d'architecture et authenticité.
* **Contacts & Réseaux** :
  * 📧 **Email** : [moafogaus@gmail.com](mailto:moafogaus@gmail.com)
  * 🐙 **GitHub** : [@Edithson](https://github.com/Edithson)
  * 💼 **LinkedIn** : [Gaus Fonhouo](https://www.linkedin.com/in/gaus-fonhouo-961344236)
  * 💬 **WhatsApp** : [+237 658 995 265](https://wa.me/237658995265)
  * 📺 **YouTube** : [@gausmoafo8139](https://www.youtube.com/@gausmoafo8139)

---

## 💻 Analyse Exhaustive du Projet

Ce repository abrite l'application web du portfolio de **Fonhouo Gaüs**. Le projet est construit sur une architecture hybride **Laravel 13 + Blade / Inertia v3 + React 19**, combinant performance d'affichage public et puissance d'un back-office dynamique.

### 🏛️ Architecture Technique

```
┌────────────────────────────────────────────────────────────────────────┐
│                        PORTFOLIO APPLICATION                           │
├──────────────────────────────────────┬─────────────────────────────────┤
│         Vitrine Publique             │      Back-Office Administrateur │
│    (Laravel Blade + Tailwind v4)     │  (Inertia.js v3 + React 19 + TS)│
├──────────────────────────────────────┴─────────────────────────────────┤
│                            BACKEND LARAVEL                             │
│       • Laravel 13 (PHP 8.3+)          • Laravel Fortify (Auth & 2FA)  │
│       • Eloquent ORM & Migrations       • Mailables & Queue Listeners   │
│       • Wayfinder Route TS Generator   • Pest PHP Test Suite           │
└────────────────────────────────────────────────────────────────────────┘
```

1. **Vitrine Publique (Front-Office)** :
   * Développée avec **Laravel Blade** et **TailwindCSS v4**, offrant un rendu ultra-rapide côté serveur (CWW / SEO optimisé).
   * Design épuré, typographie élégante, mode sombre/clair dynamique, micro-animations en CSS/Vanilla JS (vibration ring, spinners, smooth scroll).
   * Sections dynamiques : Hero, À propos, Philosophie, Vision technique, Projets phares, Formulaire de contact réactif.

2. **Espace d'Administration (Back-Office)** :
   * Développé avec **Inertia.js v3**, **React 19** et **TypeScript**.
   * Intègre la suite **Shadcn UI** et les composants **Radix UI**.
   * Dashboard interactif pour consulter, filtrer (recherche/statut), marquer comme lus et gérer les messages reçus via le formulaire de contact.
   * Securisé via **Laravel Fortify** (Authentification, support 2FA).

3. **Backend & Services** :
   * **Base de données** : Migrations pour gestion des tables `users`, `contacts`, `homes`, `cache`, `jobs`.
   * **Gestion des mails** : `ContactNotification` Mailable expédié lors de l'envoi de formulaires.
   * **Qualité & Tooling** : Laravel Pint pour la mise en forme du code PHP, ESLint & Prettier pour TypeScript/React, Pest PHP pour les tests automatisés.

---

## 🛠️ Réalisations Présentées dans le Portfolio

| Projet | Catégorie | Description & Technologies | Liens |
| :--- | :--- | :--- | :--- |
| **Dossiers RH MINFI** | Logiciel Métier | Conception et développement d'un programme de gestion du personnel pour le Ministère des Finances. Centralisation et sécurisation de l'information pour **plusieurs centaines d'agents**. <br> *Tags: Architecture métier, PostgreSQL, Laravel* | [Code GitHub](https://github.com/Edithson/dossiers-rh-minfi.git) |
| **Petit Sage & ÉduTech** | Web App | Applications éducatives gamifiées intégrant quiz interactifs et mécaniques ludiques pour la transmission de valeurs sociales auprès des jeunes apprenants. <br> *Tags: ReactJS, Gamification, UX Éducative* | [Code GitHub](https://github.com/Edithson/ludo-phylosophie.git) • [Démo](https://petitsage.tech/accueil) |
| **ZeroLib** | Plateforme | Archivage numérique et téléchargement libre d'anciens livres et cours du Site du Zéro, permettant de préserver ce patrimoine pédagogique. <br> *Tags: Intégration Web, Archivage Numérique, Linux* | [Code GitHub](https://github.com/Edithson/zero_lib_legacy_26.git) • [Démo](https://zerolib.72.62.16.16.nip.io/) |

---

## 🗂️ Structure des Dossiers

```
Portfolio/
├── porfolio/                 # Application Laravel principale
│   ├── app/
│   │   ├── Http/Controllers/ # HomeController, ContactController
│   │   ├── Mail/             # ContactNotification
│   │   └── Models/           # Contact, User
│   ├── database/
│   │   ├── factories/        # Factories de test
│   │   ├── migrations/       # Schema de la BD (contacts, users...)
│   │   └── seeders/          # DatabaseSeeder
│   ├── resources/
│   │   ├── js/               # Application React / Inertia (Dashboard Admin)
│   │   │   ├── components/   # Composants UI React (Radix / Shadcn)
│   │   │   ├── pages/        # Pages Inertia (contacts/index, dashboard)
│   │   │   └── types/        # Definitions TypeScript
│   │   └── views/            # Vues Blade du Portfolio public
│   │       ├── portfolio.blade.php
│   │       └── sections/     # Sections (hero, about, projets, contact...)
│   ├── routes/
│   │   ├── web.php           # Routes publiques et d'admin
│   │   └── settings.php      # Routes de configuration du compte
│   ├── tests/                # Suite de tests Pest / PHPUnit
│   ├── composer.json
│   ├── package.json
│   └── vite.config.ts
└── template/                 # Assets & Maquettes HTML de référence
    ├── index8.html
    └── img_1.png
```

---

## ⚙️ Installation & Lancement Local

### Prérequis

* **PHP** >= 8.3 (Extensions OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON requises)
* **Composer** >= 2.x
* **Node.js** >= 20.x & **NPM**

### Étapes d'installation

1. **Cloner le dépôt et se placer dans le dossier du projet** :
   ```bash
   git clone https://github.com/Edithson/Portfolio.git
   cd Portfolio/porfolio
   ```

2. **Installer les dépendances PHP et Node.js** :
   ```bash
   composer install
   npm install
   ```

3. **Configurer l'environnement** :
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurer la base de données & Exécuter les migrations** :
   Mettre à jour les variables `DB_*` dans le fichier `.env` (ou utiliser SQLite), puis lancer :
   ```bash
   php artisan migrate --seed
   ```

5. **Lancer le serveur de développement** :
   ```bash
   composer run dev
   # Ou en lançant simultanément artisan serve et vite :
   # npx concurrently "php artisan serve" "npm run dev"
   ```

6. Accessibilité :
   * **Portfolio Public** : [http://127.0.0.1:8000](http://127.0.0.1:8000)
   * **Espace Admin Dashboard** : [http://127.0.0.1:8000/dashboard](http://127.0.0.1:8000/dashboard)

---

## 🧪 Tests & Qualité de Code

```bash
# Exécuter la suite de tests Pest PHP
php artisan test

# Formater le code PHP avec Laravel Pint
vendor/bin/pint

# Vérifier le typage TypeScript
npm run types:check

# Linter le code React / TS
npm run lint:check
```

---

## 📜 Licence

Ce projet est sous licence **MIT**. Vous êtes libre de vous en inspirer pour vos propres besoins.
