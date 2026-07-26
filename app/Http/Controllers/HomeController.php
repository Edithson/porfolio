<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'name' => __('portfolio.projects.rh_minfi.name'),
                'category' => __('portfolio.projects.rh_minfi.category'),
                'description' => __('portfolio.projects.rh_minfi.description'),
                'image' => 'img/projects/rh_minfi.png',
                'git_link' => 'https://github.com/Edithson/dossiers-rh-minfi.git',
                'test_link' => '', // Laisser vide si démo privée
                'tags' => __('portfolio.projects.rh_minfi.tags'),
                'bg_gradient' => 'linear-gradient(135deg, #1c1917 0%, #292524 100%)',
                'is_featured' => false,
            ],
            [
                'id' => 2,
                'name' => __('portfolio.projects.petit_sage.name'),
                'category' => __('portfolio.projects.petit_sage.category'),
                'description' => __('portfolio.projects.petit_sage.description'),
                'image' => 'img/projects/petit_sage.png',
                'git_link' => 'https://github.com/Edithson/ludo-phylosophie.git',
                'test_link' => 'https://petitsage.tech/accueil',
                'tags' => __('portfolio.projects.petit_sage.tags'),
                'bg_gradient' => 'linear-gradient(135deg, #1a1a2e 0%, #16213e 100%)',
                'is_featured' => false,
            ],
            [
                'id' => 3,
                'name' => __('portfolio.projects.zerolib.name'),
                'category' => __('portfolio.projects.zerolib.category'),
                'description' => __('portfolio.projects.zerolib.description'),
                'image' => 'img/projects/zerolib.png',
                'git_link' => 'https://github.com/Edithson/zero_lib_legacy_26.git',
                'test_link' => 'https://zerolib.72.62.16.16.nip.io/',
                'tags' => __('portfolio.projects.zerolib.tags'),
                'bg_gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)',
                'is_featured' => true, // Conserve la mise en page grand format (pleine largeur)
            ],
        ];

        $infos = [
            'email' => 'moafogaus@gmail.com',
            'logo' => 'img/icon.png',
            'image' => 'img/img_1.png',
            'adr_git' => 'https://github.com/Edithson',
            'adr_linkedin' => 'https://www.linkedin.com/in/gaus-fonhouo-961344236',
            'adr_whatsapp' => 'https://wa.me/237658995265',
            'adr_youtube' => 'https://www.youtube.com/@gausmoafo8139',
            'availablity' => 'Disponible',
        ];

        return view('portfolio', compact('projects', 'infos'));
    }
}
