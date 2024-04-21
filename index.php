<?php

require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';


$next_movie = NextMovie::fecth_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();


?>

<?php render_template ('head', ["title" => $next_movie_data["title"]]); ?>
<?php render_template ('main',  array_merge(
$next_movie_data, 
["until_massage" => $next_movie->get_until_massage()]
)); ?>

<?php render_template ('styles'); ?>




<<<<<<< HEAD
=======
    <hgroup>
        <h3><?= $data ['title']; ?> se estrena en <?= $data ['days_until']; ?> dias </h3>
        <p> Fecha de estreno <?= $data ['release_date']; ?></p>
        <p>La siguiente es: <?= $data ['following_production'] ["title"]; ?> </p>
    </hgroup>
    <footer>
        <p>Powered by <a href="github.com/edwardtrindad">Edward Trindad</a></p>
    </footer>
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
>>>>>>> dc80f519cdf4a2d3666a9ffe10d107097e8de2bd
