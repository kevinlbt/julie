<h1 class="articletitle align">Articles</h1>

<div class="container">
    <?php foreach($result as $article) : ?>
        <h1 class=""><?= $article['attributes']['titre']; ?></h1>
        <p class="pararet"><?= $article['attributes']['date']; ?></p>
        <div class="paraset"><?= $article['attributes']['contenue']; ?></div>
            <?php foreach($article['attributes']['images']['data'] as $image) : ?>
                <img src="./my-project/public<?= $image['attributes']['url']; ?>" width="200" height="auto">
            <?php endforeach ?>
        <div class="paraset"><?= $article['attributes']['contenue_2']; ?></div>
        <hr>
    <?php endforeach ?>

</div>
