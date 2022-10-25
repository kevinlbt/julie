
<div class="bloc_page">
    <section class="defeco">
        <article>
            <h1 class="Titre_Def"> ECOCENTRISME C'EST QUOI ? </h1>
            <p class="texte">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. 
                Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Duis vel enim mi, in lobortis sem. 
                Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis
            </p>
            <p class="texte">
                Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. 
                Mauris non erat eu erat placerat convallis.
            </p>
            <p class="texte">
                Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. 
                Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. 
            </p>
        </article>
        <img src="assets/images/tableau.jpg" alt="" class="tableau">
    </section>
</div> 



<div class="background"> <!-- Image de fond-->
    <div class="zone_texte_wrapper"> 
        <div class="zone_texte"><!-- fond blanc/zone de texte -->
            <p class="cit"> Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. 
                Mauris non erat eu erat placerat convallis.
            </p>
            <p class="aut"> Mauris in pretium urna </p>
        </div>
    </div>
</div>


<h2 class="titre_article"> Articles </h2>
     
<div class="bloc_page_2">
<?php for($i = 0; $i <= 2; $i++) : ?>         
    <div class="article-b">
        <div class="icones_1">
            <i class="fa-brands fa-pagelines"></i>
            <i class="fa-brands fa-pagelines"></i>
        </div>
        <h3> <?= $result[$i]['attributes']['titre']; ?> </h3>
        <div class="content"> <?= $result[$i]['attributes']['contenue']; ?> </div>
        <div class="redim">
            <img src="./my-project/public<?= $result[$i]['attributes']['images']['data'][0]['attributes']['url']; ?>" alt="" class="img">
        </div>
        <a href="" class="bouton">En savoir plus</a>
    </div>
<?php endfor ?>

    <!-- <div class="article-b">
        <div class="icones_2">
            <i class="fa-brands fa-pagelines"></i>                    
            <i class="fa-brands fa-pagelines"></i>
        </div>
        <h3> The purple flame </h3>
        <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. 
            Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci
        </p>
        <img src="assets/images/image_2.jpg" alt="" class="img">
        <a href=""  class="bouton"> En savoir plus </a>
    </div>

    <div class="article-b">
        <div class="icones_3">
            <i class="fa-brands fa-pagelines"></i>
            <i class="fa-brands fa-pagelines"></i>
        </div>
        <h3> The purple flame </h3>
        <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. 
            Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci
        </p>
        <img src="assets/images/image_3.jpg" alt="" class="img">
        <a href="" class="bouton"> En savoir plus </a>
    </div> -->
</div>