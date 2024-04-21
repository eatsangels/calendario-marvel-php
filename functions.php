<?php

//para no omitir el tipo de dato.
declare(strict_types=1);


function render_template (string $template, array $data= []) 
{
    extract($data);
    require "templates/$template.php";
}
function get_data(string $url): array 
{
    $result  = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_massage(int $days): string 
{
    return match (true) {
        $days === 0   => "¡Hoy se estrena! 🥳",
        $days === 1   => "¡Mañana es el estreno! 🚀",
        $days < 7     => "¡Esta semana se estrena! 🙂",
        $days < 30    => "¡Este mes se estrena! 📽️",
        default       => "$days dìas hasta el estreno 🗓️"
        
    };
}


?>

