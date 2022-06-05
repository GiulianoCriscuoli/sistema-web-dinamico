<?php 

namespace App\Utils;

class View {

    private static function contentView($view) {

        $file =  __DIR__.'/../../resources/views/'.$view.'.html'; 

        $file = file_exists($file) ? file_get_contents($file) : 'Página não encontrada';

        return $file;

    } 

    public static function render(string $view, array $data = []) {

        $contentView = self::contentView($view);

        $keys = array_keys($data);

        $keys = array_map(function($item){

            return '{{ '.$item.' }}';

        }, $keys);

        // executa a mesma função de cima, porém com foreach

        // foreach($keys as $item) {

        //     $arrItem[] = '{{ ' .$item. ' }}';
        //     $conversion = str_replace($arrItem, array_values($data), $contentView);
        // }
        
        return str_replace($keys, array_values($data), $contentView);
    }
}