<?php
    use App\Models\Auteur;
?>
<html>
    <a href="/articial-intelligence-news/sign-in">Login</a>
    <br/>
    <a href="/articial-intelligence-news/sign-in">Actualites et evenements</a>
    <a href="/articial-intelligence-news/sign-in">Educations et formations</a>
    <a href="/articial-intelligence-news/sign-in">Tendances et innovations</a>
    <a href="/articial-intelligence-news/sign-in">Conseils pratiques</a>
    <table width="800" border="1">
        <tr>
            <th>Date</th>
            <th>Titre</th>
            <th>Resume</th>
            <th>Auteur</th>
        </tr>
        <?php foreach($info as $row){ ?>
        <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['titre']; ?></td>
            <td><?php echo $row['resume']; ?></td>
            <td><?php echo $row['nom']; ?></td>
        </tr>
        <?php } ?>
    </table>
</html>
