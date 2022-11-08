
<div class="Titre_principal">
        <h1> <?= $result[0]->getTitle(); ?> </h1>
</div>

<div class="bloc_page">

    <section class="section_2">
        <img src="/test-website/<?= $result[0]->getImagePath(); ?>" alt="" class="foret"/>
        <article class="art_2">
            <h2 class="Titre_1"> <?= $result[0]->getTitle(); ?> </h2>
            <p class="content-bis"> <?= nl2br($result[0]->getContent()); ?> </p>
        </article>
        <div class="img_foot"></div>
    </section>

    <p class="content-bis"> <?= nl2br($result[0]->getContentBis()); ?> </p>

</div>


<h2 class="titre_article">Article qui pourrait vous plaire</h2>

<div class="bloc_page_2">

<?php $i=0; foreach($result[1] as $article) :
    if ($i < 3) { ?> 
        
        <div class="article-b">
            <div class="icones_1">
                <i class="fa-brands fa-pagelines"></i>
                <i class="fa-brands fa-pagelines"></i>
            </div>
            <h3 class="title_lonely"> <?= $article->getTitle(); ?> </h3>
            <div class="content"> <?= $article->getContent(); ?> </div>
            <div class="redim">
                <img src="/test-website/<?= $article->getImagePath(); ?>" alt="" class="img">
            </div>
            <a href="/test-website/onearticle/<?= $article->getId(); ?>" class="bouton">En savoir plus</a>
        </div>
    
    <?php $i +=1;
    }
    endforeach ?>
</div>

