<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

// var_dump($url);

    include 'telas/head.php';
    include 'telas/menu.php';
    include 'acoes.php';

    match ($url[0]) {
        '/' => home(),
        '/login' => login(),
        '/cadastro' => cadastro(),
        '/listar' => listar(),
        '/excluir' => excluir(),
        '/editar' => editar(),
        default => erro404()
    };

    // if ($url === '/') {
    //    include 'telas/home.php';
    // } elseif ($url === '/cadastro') {
    //    include 'telas/cadastro.php';
    // } elseif ($url === '/login') {
    //     include 'telas/login.php';
    // } elseif ($url === '/listar') {
    //     include 'telas/listar.php';
    // } else {
    //     include 'telas/404.php';
    // }

    include 'telas/footer.php';