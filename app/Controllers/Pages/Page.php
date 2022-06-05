<?php

namespace App\Controllers\Pages;

use App\Utils\View;

class Page {

    private static function header() {
        
        return View::render('pages/header');
    } 

    private static function footer() {
        
        return View::render('pages/header');
    }

   public static function getPage(string $title, $content) {

        echo  View::render('pages/page', [
            'header' => Self::header(),
            'title' => $title,
            'content' => $content,
            'footer' => Self::footer()
        ]);
    }
}