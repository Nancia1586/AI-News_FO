<html>
    <form action="/auteur/traitement-login" method="post">
        @csrf
        <input type="text" name="email">
        <input type="password" name="mdp">
        <input type="submit" value="VALIDER">
    </form>
</html>
