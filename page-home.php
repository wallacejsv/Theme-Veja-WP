<?php 

/** Template Name: Home Posts */
get_header(); 

?>
<main class="wrap">
    <div class="container">
        <h2>Últimas notícias</h2>
        <div class="root-cards">
        </div>
        <div class="bt-load">
            <p id="loading">Carregando...</p>
            <button id="more-posts">Carregar mais</button>
        </div>
    </div>
</main>
<?php get_footer(); ?>