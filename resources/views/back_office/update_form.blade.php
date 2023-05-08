<html>
    <hr/>
    <h1>Modifier un article</h1>
    <form action="/information/update" enctype="multipart/form-data" method="GET">
    @csrf
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
        <h4>Date: <?php echo $info['date']; ?></h4>
       <input type="date" name="date" value="<?php echo $info['date']; ?>">
       <h4>Categorie</h4>
        <select name="categorie">
            <option value="<?php echo $info['categorieid']; ?>"><?php echo $info['categorie']; ?></option>
            <?php foreach($categorie as $key){ ?>
                <option value="<?php echo $key['id']; ?>"><?php echo $key['categorie']; ?></option>
            <?php } ?>
        </select>
        <h4>Titre</h4>
       <input type="text" name="titre" placeholder="titre" value="<?php echo $info['titre']; ?>">
       <h4>Resume</h4>
       <textarea type="text" name="resume"><?php echo $info['resume']; ?></textarea>
        <h4>Contenu</h4>
        <textarea cols="80" class="ckeditor" id="editeur" name="contenu" rows="10"><?php echo $info['contenu']; ?></textarea>
    <br/>
        <input type="submit" value="Modifier">
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>

<script src="/ckeditor/ckeditor.js"></script>
</html>
