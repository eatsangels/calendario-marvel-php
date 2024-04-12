<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesión de cURL; ch = cURL handle

$ch = curl_init(API_URL);


// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la petición 
    y guardar el resultado en una variable.
*/


$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);



?>

<head>
    <meta charset="utf-8"/>

    <title>La proxima Pelicula de Marvel</title>
    <meta name="description" content="La proxima Pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>

</head>


<main>

    <section>
        <img src="<?= $data ['poster_url']; ?>" alt="Poster de <?= $data ['title']; ?>" width="200"
            style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3><?= $data ['title']; ?> se estrena en <?= $data ['days_until']; ?> dias </h3>
        <p> Fecha de estreno <?= $data ['release_date']; ?></p>
        <p>La siguiente es: <?= $data ['following_production'] ["title"]; ?> </p>
    </hgroup>
    
</main>

<style>
    :root {
        color-scheme: light dark;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body {
        display: grid;
        place-content: center;
    }
section {
    display: flex;
    justify-content: center;
    text-align: center;
}

hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;

}
img {
    margin: 0 auto;
    display: block;

}
</style>