<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <p>
        <?php
        if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['gender'])){
            echo $_GET['gender'] ." ". $_GET['firstname'] ." ". $_GET['lastname'];
        } else {
        ?>
        </p>
        <form action="index.php" method="get">
            <label for="firstname">Nom: </label>
            <input type="text" name="firstname" id="firstname" />
            
            <label for="lastname">Prénom: </label>
            <input type="text" name="lastname" id="lastname" />
            
            <label for="gender">Genre</label>
            <select name="gender" id="gender">
                <option selected disabled>Genre</option>
                <option value="M">M</option>
                <option value="Mme">Mme</option>
            </select>
            
            <button type="submit" name="send">Submit</button>
        </form>
        <?php
        }
        // fermeture du else aprés le form pour le cacher si 
        ?>
    </body>
</html>
