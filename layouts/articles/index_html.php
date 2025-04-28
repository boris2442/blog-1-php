
<h1>Listes des articles</h1>

<hr>
<div>
  <?php
  foreach ($articles as $article): 
    ?>
    <div>
    <h2> <?= htmlspecialchars($article['title']) ?> </h2>

    <p> <?= htmlspecialchars($article['introduction']) ?> </p>

    <a href="article.php?id=<?= urlencode($article['id']) ?>">Voir plus</a>
    <a name="delete" href="delete.php?id=<?= urlencode($article['id']) ?>" 
       onClick="return confirm('Voulez-vous vraiment supprimer cet article ?');">Supprimer</a>
    <a href="edit-article.php?id=<?= urlencode($article['id']) ?>">Éditer</a>
    </div>
    <hr>
  <?php endforeach; ?>
</div>