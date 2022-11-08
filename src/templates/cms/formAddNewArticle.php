
<div class="flex collum align">
    <p class="valide-msg textcms"><?= ArticleController::getValidArticle(); ?></p>
    <?php foreach(ArticleController::getnotValidArticle() as $notvalid) : ?>
      <p class="not-valide-msg flex collum textcms"><?php  echo $notvalid; ?></p>
    <?php endforeach; ?>
</div>

<form action="" method="POST" enctype="multipart/form-data" class="flex collum align border gray-back">
    <label for="title" class="textcms size">Titre </label>
    <input type="text" name="title" class="field input" value="<?php if(isset($_POST['title'])) {echo $_POST['title'];} ?>"/>
    <label for="content" class="textcms size">Contenue de l'article</label>
    <textarea type="text" name="content" rows="20" cols="100" class="field textarea"><?php if(isset($_POST['content'])) {echo $_POST['content'];} ?></textarea>
    <label for="contentBis" class="textcms size">Contenue secondaire de l'article</label>
    <textarea type="text" name="contentBis" rows="20" cols="100" class="field textarea"><?php if(isset($_POST['contentBis'])) {echo $_POST['contentBis'];} ?></textarea>
    <div class="flex align collum">
      <label for="category" class="textcms size">Catégorie</label>
      <select name="category[]" multiple class="select">
        <?php foreach($result as $category) { ?>
          <option value=<?= $category->getId(); ?>><?= $category->getName(); ?></option>
        <?php } ?>
      </select>
      <label class="textcms size" for="images">Ajoute une image à ton article</label>
      <input class="field" type="file" name="images" id="images">
    </div>
    <button type="submit" class="button default">valider</button>
</form>

<form method="POST" action=""class="flex collum align border gray-back">
    <label for="addCategory" class="textcms size">Ajouter une catégorie</label>
    <input type="text" name="addCategory" class="field input">
    <button type="submit" class="button">Ajouter</button>
</form>

