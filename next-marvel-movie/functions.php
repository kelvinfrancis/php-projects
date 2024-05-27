<?php

declare(strict_types=1); // habilita los tipos estrictos y no haga conversiones automáticas, debe indicarse a nivel de archivo, arriba.

function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array // return an array
{
    $result = file_get_contents($url); // Only for  do GET to an API
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0  => "Hoy es el estreno! 🎬",
        $days === 1  => "Mañana es el gran estreno! 🥳",
        $days < 7    => "Esta semana se estrena",
        $days < 30   => "Este mes se estrena...🗓️",
        default      => "$days días para el estreno 🗓️"
    };
}
