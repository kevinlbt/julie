

<div class="baniere">
    <div class="baniere_txt"> 
        <h1>Articles <h1> 
    </div>
</div>

<div class="bloc_page_3">

<?php foreach($result as $article) : ?> 
            
    <div class="article-b grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="10" data-aos-easing="ease-in-out" data-aos-offset="100">
        <div class="icones_1">
            <i class="fa-brands fa-pagelines"></i>
            <i class="fa-brands fa-pagelines"></i>
        </div>
        <h3> <?= $article->getTitle(); ?> </h3>
        <p class="content"> <?= $article->getContent(); ?> </p>
        <div class="redim">
            <img src="<?= $article->getImagePath(); ?>" alt="" class="img">
        </div>
        <a href="./onearticle/<?= $article->getId(); ?>" class="bouton">En savoir plus</a>
    </div>

<?php endforeach ?>

</div>
