<?php

$config['module']['mods'] = array(
    "buildDownload" => true,
    "buildStructure" => array(
        "module" => array(
            "optiondepends" => true,
            "subdir" => "{v#name}",
            "builddir" => "modules",
            "changelog" => "CHANGELOG.txt"
        ),
        "template" => array(
            "optiondepends" => true,
            "subdir" => "{v#name}",
            "builddir" => "tt",
            "changelog" => "CHANGELOG.txt"
        ),
        "core" => array(
            "changelog" => "CHANGELOG.txt"
        ),
        "tools" => array(
            "subdir" => "{v#name}",
            "changelog" => "CHANGELOG.txt"
        ),
        "distrib" => array(
            "depends" => true,
            "changelog" => ""
        )
    )
);

/*
$config['Template'] = array(
    "exp" => array(
        // использовать шаблон main из стиля default для главной страницы сайта
        array(
            "pattern" => "/",
            "regexp" => false,
            "owner" => "en_abricos",
            "name" => "home"
        ),
        // использовать шаблон news из стиля default для новостей
        array(
            "pattern" => "/^\/blog\//i",
            "regexp" => true,
            "owner" => "en_abricos",
            "name" => "blog"
        )
    )
);
/**/

?>