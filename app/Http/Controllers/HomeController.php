<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            [
                "id" => 1,
                "name" => "Dossiers RH MINFI",
                "category" => "Logiciel métier",
                "description" => "Conception et développement d'un programme de gestion des dossiers du personnel pour le Ministère des Finances. Centralisation et sécurisation de l'information pour <strong class=\"text-zinc-800 dark:text-zinc-200\">plusieurs centaines d'agents</strong>.",
                "image" => "img/projects/rh_minfi.png",
                "git_link" => "https://github.com/Edithson/dossiers-rh-minfi.git",
                "test_link" => "", // Laisser vide si démo privée
                "tags" => ["Architecture métier", "PostgreSQL", "Laravel"],
                "bg_gradient" => "linear-gradient(135deg, #1c1917 0%, #292524 100%)",
                "is_featured" => false
            ],
            [
                "id" => 2,
                "name" => "Petit Sage & ÉduTech",
                "category" => "Web App",
                "description" => "Applications éducatives gamifiées intégrant quiz interactifs et mécaniques ludiques pour la transmission de valeurs sociales auprès des <strong class=\"text-zinc-800 dark:text-zinc-200\">jeunes apprenants</strong>.",
                "image" => "img/projects/petit_sage.png",
                "git_link" => "https://github.com/Edithson/ludo-phylosophie.git",
                "test_link" => "https://petitsage.tech/accueil",
                "tags" => ["ReactJS", "Gamification", "UX Éducative"],
                "bg_gradient" => "linear-gradient(135deg, #1a1a2e 0%, #16213e 100%)",
                "is_featured" => false
            ],
            [
                "id" => 3,
                "name" => "ZeroLib",
                "category" => "Plateforme",
                "description" => "Implémentation d'un site dédié à l'archivage et au <strong>téléchargement libre d'anciens livres et cours du Site du Zéro</strong>, permettant de préserver et de rendre accessible ce patrimoine pédagogique.",
                "image" => "img/projects/zerolib.png",
                "git_link" => "https://github.com/Edithson/zero_lib_legacy_26.git",
                "test_link" => "https://zerolib.org", 
                "tags" => ["Intégration Web", "Archivage Numérique", "Linux"],
                "bg_gradient" => "linear-gradient(135deg, #0f172a 0%, #1e293b 100%)",
                "is_featured" => true // Conserve la mise en page grand format (pleine largeur)
            ]
        ];

        $infos = [
            "email" => "moafogaus@gmail.com",
            "logo" => "img/icon.png",
            "image" => "img/img_1.png",
            "adr_git" => "https://github.com/Edithson",
            "adr_linkedin" => "https://www.linkedin.com/in/gaus-fonhouo-961344236",
            "adr_whatsapp" => "https://wa.me/237658995265",
            "adr_youtube" => "https://www.youtube.com/@gausmoafo8139",
            "availablity" => "Disponible",
        ];

        return view('portfolio', compact('projects', 'infos'));
    }
}