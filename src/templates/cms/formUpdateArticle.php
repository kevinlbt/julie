<div class="flex collum align">
    <?php foreach(ArticleController::getnotValidArticle() as $notvalid) : ?>
      <p class="not-valide-msg flex collum textcms"><?php  echo $notvalid; ?></p>
    <?php endforeach; ?>
</div>

<form action="" method="POST" enctype="multipart/form-data" class="flex collum align border gray-back">
    <label for="title" class="textcms size">Titre</label>
    <input type="text" name="title" class="field input" value="<?= $result[0]->getTitle() ?>">
    <label for="content" class="textcms size">Contenue de l'article</label>
    <textarea type="text" name="content" rows="10" cols="70" class="field textarea"><?= $result[0]->getContent() ?></textarea>
    <label for="category" class="textcms size">Catégorie</label>
    <select id="sel1" name="category[]" multiple class="select">
      <?php foreach($result[2] as $category) { ?>
        <option selected value=<?= $category->getId(); ?>><?= $category->getName(); ?></option>
      <?php } ?>
      <?php foreach($result[1] as $category) { ?>
        <option value=<?= $category->getId(); ?>><?= $category->getName(); ?></option>
      <?php } ?>
    </select>
    <label class="textcms size" for="images">Modifie l'image de ton article si tu le souhaite</label>
    <input class="field" type="file" name="images" id="images">
    <button type="submit" class="button default">modifier</button>
</form>
