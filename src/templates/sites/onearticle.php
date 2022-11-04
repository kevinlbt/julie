
<div class="Titre_principal">
        <h1> <?= $result[0]['attributes']['titre']; ?> </h1>
</div>

<div class="bloc_page">

    <section class="section_2">
        <img src="/test-website/my-project/public<?= $result[0]['attributes']['images']['data'][0]['attributes']['url']; ?>" alt="" class="foret"/>
        <article class="art_2">
            <h2 class="Titre_1">  <?= $result[0]['attributes']['titre']; ?> </h2>
            <div class="content-bis"> <?= $result[0]['attributes']['contenue']; ?> </div>
        </article>
        <div class="img_foot"></div>
    </section>

    <div class="content-bis"> <?= $result[0]['attributes']['contenue_2']; ?> </div>

</div>


<h2 class="titre_article">Article qui pourrait vous plaire</h2>

<div class="bloc_page_2">

<?php for($i = 0; $i <= 2; $i++) : ?> 
        
        <div class="article-b">
            <div class="icones_1">
                <i class="fa-brands fa-pagelines"></i>
                <i class="fa-brands fa-pagelines"></i>
            </div>
            <h3 class="title_lonely"> <?= $result[1][$i]['attributes']['titre']; ?> </h3>
            <div class="content"> <?= $result[1][$i]['attributes']['contenue']; ?> </div>
            <div class="redim">
                <img src="/test-website/my-project/public<?= $result[1][$i]['attributes']['images']['data'][0]['attributes']['url']; ?>" alt="" class="img">
            </div>
            <a href="/test-website/onearticle/<?= $result[1][$i]['id']; ?>" class="bouton">En savoir plus</a>
        </div>
    
    <?php endfor ?>
</div>

