<html>
    <a href="/information/list">Voir la liste</a>
    <hr/>
    <h1>Ajouter un article</h1>
    <form action="/information/create" enctype="multipart/form-data" method="POST">
    @csrf
        <h4>Date</h4>
       <input type="date" name="date">
       <h4>Categorie</h4>
        <select name="categorie">
            <?php foreach($categorie as $key){ ?>
                <option value="<?php echo $key['id']; ?>"><?php echo $key['categorie']; ?></option>
            <?php } ?>
        </select>
        <h4>Titre</h4>
       <input type="text" name="titre" placeholder="titre">
       <h4>Resume</h4>
       <textarea type="text" name="resume" placeholder="Resume"></textarea>
        <h4>Image</h4>
        <input type="file" name="image" class="form-control" id="exampleInputName1" placeholder="resume">
        <h4>Contenu</h4>
        <textarea cols="80" class="ckeditor" id="editeur" name="contenu" rows="10"></textarea>
    <br/>
    <input type="submit" value="AJOUTER">
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>

<script src="/ckeditor/ckeditor.js"></script>
</html>
