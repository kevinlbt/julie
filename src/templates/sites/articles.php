

<div class="baniere">
    <div class="baniere_txt"> 
        <h1>Articles <h1> 
    </div>
</div>

<div class="bloc_page_3">

<?php foreach($result as $article) : ?> 
            
    <div class="article-b grid-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200" data-aos-delay="50" data-aos-easing="ease-in-back" data-aos-offset="100">
        <div class="icones_1">
            <i class="fa-brands fa-pagelines"></i>
            <i class="fa-brands fa-pagelines"></i>
        </div>
        <h3> <?= $article['attributes']['titre']; ?> </h3>
        <div class="content"> <?= $article['attributes']['contenue']; ?> </div>
        <div class="redim">
            <img src="./my-project/public<?= $article['attributes']['images']['data'][0]['attributes']['url']; ?>" alt="" class="img">
        </div>
        <a href="./onearticle/<?= $article['id']; ?>" class="bouton">En savoir plus</a>
    </div>

<?php endforeach ?>

</div>
