<section style="display: flex; flex-direction:column;  justify-content:center; align-items:center">
<div class="header">
    <h1 style="width:400px ;">creer un article</h1>
  </div>
    <form method="post" class="form" id="form"
    enctype="multipart/form-data">
        <div class="form-control">
            <label for="username">Titre de l'article</label>
            <input type="text" id="title" placeholder="Le developpement mobile" name="title" autocomplete="off">
        </div>
        <div class="form-control">
            <label for="slug">slug</label>
            <input type="text" name="slug" id="slug" placeholder="le-developpement-mobile">
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