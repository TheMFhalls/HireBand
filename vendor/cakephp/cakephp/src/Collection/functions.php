<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Collection\Collection;
use Cake\ORM\TableRegistry;

if (!function_exists('collection')) {
    /**
     * Returns a new Cake\Collection\Collection object wrapping the passed argument.
     *
     * @param \Traversable|array $items The items from which the collection will be built.
     * @return \Cake\Collection\Collection
     */
    function collection($items)
    {
        return new Collection($items);
    }

}

function convertYoutube($string) {
    return preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "//www.youtube.com/embed/$2\"",
        $string
    );
}

function user_logged(){
    @session_start();
    return isset($_SESSION["usuario"]);
}

function user_is_estabelecimento(){
    @session_start();
    return isset($_SESSION['usuario']['estabelecimento']);
}

function user_is_banda(){
    @session_start();
    return isset($_SESSION['usuario']['banda']);
}

function block_estilos(){
    $local_host = LOCAL_HOST;
    $block_estilos = TableRegistry::get('estilos')
        ->find()
        ->select([
            'id',
            'nome'
        ]);

    echo "<h3>Encontre uma banda pela categoria:</h3>";
    echo "<ul>";
    foreach($block_estilos as $estilo){
        echo "<li>";
        echo "<a href='$local_host/bandas/search/$estilo->id'>$estilo->nome</a>";
        echo "</li>";
    }
    echo "</ul>";
}