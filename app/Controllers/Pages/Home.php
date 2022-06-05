<?php

namespace App\Controllers\Pages;

use App\Utils\View;
class Home extends Page {

   public static function getHome() {

        $content = View::render('pages/home', [
            'name' => 'Página inicial',
            'description' => 'Aqui ficará o conteúdo central do site'
        ]);

        return parent::getPage('Página Home', $content);
    }
}