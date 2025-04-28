<section style="display: flex; flex-direction:column;  justify-content:center; align-items:center">

    <h1 style="width:90vw ;">creer un article</h1>

    <form method="post" style="width:100%;" id="form"
        enctype="multipart/form-data">
        <div class="form-control">
            <label for="username">Titre de l'article</label>
            <input type="text" id="title" placeholder="Le developpement mobile" name="title" autocomplete="off">
        </div>

        <div class="form-control">
            <label for="text">introduction</label>
            <input type="text" id="text" placeholder="L'introduction de l'article" name="introduction">
        </div>
        <div class="form-control">
            <label for="content">Contenu de l'article</label>
            <textarea name="content" id="content" placeholder="contenu de l'article" style="resize: none; height: 100px; width:70%; border-radius:7px; "></textarea>
        </div>
        <div class="form-control">
            <button type="submit" class="btn" style="  width: 70%;
  padding: var(--sp-sm);
  font-size: var(--fs-6);
  background: var(--color-first);
  color: var(--color-white);
  border: none;
  border-radius: var(--radius);
  cursor: pointer;">Creer l'article</button>
        </div>

    </form>
</section>
<section>
<h2>Listes des articles!!!</h2>
<div class="container">
    <?php 
    foreach($articles as $article):?>
    <div class="box">
        <h2><?= $article['title'] ?></h2>
        <p><?php $article['introduction'] ?></p>
        <div class="link" style="display: flex; gap:10px;">
        <div class="">
            <a href="">Voir plus</a>
    </div>
        <div class="">
            <a href="">editer</a>
    </div>
        <div class="">
            <a href="">supprimer</a>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
</div>
</section>