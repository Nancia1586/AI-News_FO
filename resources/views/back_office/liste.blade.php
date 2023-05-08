<html>
    <a href="/articial-intelligence-news/sign-in">Login</a>
    <table width="800" border="1">
        <tr>
            <th>Date</th>
            <th>Categorie</th>
            <th>Titre</th>
            <th>Resume</th>
            <th>Auteur</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($info as $row){ ?>
        <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['categorie']; ?></td>
            <td><?php echo $row['titre']; ?></td>
            <td><?php echo $row['resume']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td>
                <form action="/information/update-form" method="get">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="submit" value="Modifier">
                </form>
            </td>
            <td>
                <form action="/information/delete" method="get">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</html>
