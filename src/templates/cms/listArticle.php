
<h2 class="container article">Mes Articles </h2>

<div class="flex collum catelist">
    <form method="POST">
        <select name="categorySort[]" multiple class="select">
            <?php foreach($result[1] as $category) { ?>
              <option value=<?= $category->getId(); ?>><?= $category->getName(); ?></option>
            <?php } ?>
        </select>
        <button type="submit" class="button default">Trier</button>
    </form>
</div>
    
<div class="container">
    <ul class="no-padding">
        <?php $count = 0; foreach ($result[0] as $article): ?> 
            <li class="flex list gray-back"> 
                <div>
                    <h3 class="articletitle"><?= $article->getTitle(); ?></h3>
                    <p class="textcms"><?= nl2br($article->getContent()); ?> </p>
                    <img src="<?= $article->getImagePath(); ?>" width="300" height="auto"/>
                    <p class="textcms"><?= nl2br($article->getContentBis()); ?> </p>
                </div>
                <div class="flex">
                    <div>
                        <a href="/test-website/update-article/<?= $article->getId(); ?>" class="no-underline">
                            <button type="button" name="updateArticle" class="button default textcms">modifier</button>
                        </a>
                    </div>
                    <div>
                        <button id="openmodal" class="button delete textcms openModalCms">supprimer</button>
                        <div id="modal<?php echo $count; ?>" class="modalCms" name="var" data-id="<?php echo $count; ?>">
                            <div class="modalContentCms flex collum">
                                <p>Es-tu sur de vouloir supprimer l'article : <?= $article->getTitle(); ?> ?</p>
                                <a href="/test-website/deleteArticle/<?= $article->getId(); ?>" class="no-underline">
                                    <button type="button" name="deleteArticle" class="button delete align textcms" data-id="<?php echo $count; ?>">supprimer</button>
                                </a>
                                <button class="cancelCms" data-id="<?php echo $count; ?>">annuler</button>
                            </div>
                        </div>  
                    </div>
                    <div>
                        <?php if(ArticleController::publishButton($article->getId())) : ?>
                            <a href="./publishedArticle/<?= $article->getId(); ?>" class="no-underline">
                                <button type="button" name="deleteArticle" class="button publish textcms align">publier</button>
                            </a>
                        <?php endif ?>
                        <?php if(!ArticleController::publishButton($article->getId())) : ?>
                            <a href="./unPublishedArticle/<?= $article->getId(); ?>" class="no-underline">
                                <button type="button" name="deleteArticle" class="button publish textcms align">dépublier</button>
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </li>         
        <?php $count++;
         endforeach ?>
         <p id="nbrarticle">Nombres d'articles : <?= $count; ?></p>
    </ul>

</div>