

<div class="baniere">
    <div class="baniere_txt"> 
        <h1>Articles <h1> 
    </div>
</div>

<?php $i=0 ; foreach($result as $article) : ?> 
    <?php if ($i === 0) { ?>
        <div class="article-a" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="10" data-aos-easing="ease-in-out" data-aos-offset="100">
            <div>
                <img src="<?= $article->getImagePath(); ?>" alt="">
            </div>
            <div class="last-article">
                <div class="icones_1">
                    <i class="fa-brands fa-pagelines"></i>
                    <i class="fa-brands fa-pagelines"></i>
                </div>
                <h3> <?= $article->getTitle(); ?> </h3>
                <p class="content"> <?= $article->getContent(); ?> </p>
                <div class="div-button">
                    <a href="./onearticle/<?= $article->getId(); ?>" class="bouton">En savoir plus</a>
                </div>
            </div>
            <?php if($i === 0) {?> <img src="./assets/images/carre.png" class="carre" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" data-aos-delay="1500" data-aos-easing="ease-in-out"></img><?php ;} ?>
            <?php if($i === 0) {?> <img src="./assets/images/carre.png" class="carre-bottom" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" data-aos-delay="1500" data-aos-easing="ease-in-out" ></img><?php ;} ?>
        </div>
    <?php } ?>
<?php $i++ ; endforeach ?>   

<div class="bloc_page_3">
<?php $i=0 ; foreach($result as $article) : ?> 
    <?php if ($i >= 1) { ?>    
        <div class="article-b grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="10" data-aos-easing="ease-in-out" data-aos-offset="100">
            <div class="icones_1">
                <i class="fa-brands fa-pagelines"></i>
                <i class="fa-brands fa-pagelines"></i>
            </div>
            <h3> <?= $article->getTitle(); ?> </h3>
            <p class="content"> <?= $article->getContent(); ?> </p>
            <div>
                <img src="<?= $article->getImagePath(); ?>" alt="" class="img">
            </div>
            <a href="./onearticle/<?= $article->getId(); ?>" class="bouton">En savoir plus</a>
        </div>
    <?php } ?>

<?php $i++ ; endforeach ?>

</div>
