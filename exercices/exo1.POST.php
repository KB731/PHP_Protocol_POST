<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exo1.POST.php" method="POST">
        <p>
            <label for="couleur">Couleur de fond</label>
            <input type="color" name="couleur" id="couleur">
        </p>
        <p>
            <label for="text">Couleur du texte</label>
            <input type="color" name="text" id="text">
        </p>
        <input type="submit" value="envoyer">
        <input type="button" value="rafraichir" onclick="window.location.reload()">
    </form>

    
    <?php
        if (isset($_POST['couleur']) && (isset($_POST['text']))) {
            $tab = array ();
            $tab['couleur'] = $_POST['couleur'];
            setcookie('couleur', $tab['couleur'], time() +20);
            $tab['text'] = $_POST['text'];
            setcookie('text', $tab['text'], time() + 20);
        }
        if (isset($_COOKIE['couleur']) && (isset($_COOKIE['text']))) {
            echo '<p style="background-color: ' . $_COOKIE['couleur'] . ';color ' . $_COOKIE['text'] . ';
            "><i class="fa-solid fa-cookie-bite fa-10x"></i></p>';
        }
    ?>
    <script src="https://kit.fontawesome.com/6cbcb9e61f.js" crossorigin="anonymous"></script>
</body>
</html>