<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = [
            [
                "id" => 1,
                "name" => "Dossiers RH MINFI",
                "description" => "Conception et développement d'un programme de gestion des dossiers du personnel pour le Ministère des Finances. Centralisation et sécurisation de l'information pour plusieurs centaines d'agents.",
                "image" => "img/projects/rh-minfi.png",
                "test_link" => "",
                "git_link" => "",
                "tags" => ["Architecture métier", "PostgreSQL", "Laravel"],
                "categort" => "Logiciel métier",
            ]
        ];

        $infos = [
            "email" => "moafogaus@gmail.com",
            "logo" => "img/logo.png",
            "adr_git" => "https://github.com/Edithson",
        ];
        return view('portfolio', compact('projects','infos'));
    }
}
