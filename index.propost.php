<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Document</title>
</head>

<body>
     <form action="ville.php" method="post">
          <div class="container">
               <div class="content">
                    <div class="cont-city">
                         <h3>Ville</h3>
                         <p>Veuillez saisir votre ville</p>
                         <label for="ville"></label>
                         <input type="text" placeholder="Entrer votre ville" name="ville" required>
                    </div>
                    <div class="cont-country">
                         <h3>Pays</h3>
                         <p>Veuillez saisir votre <br>pays</p>
                         <label for="pays"></label>
                         <input type="text" placeholder="Entrer votre pays" name="pays" required>
                    </div>
               </div>

               <button type="submit" class="registerbtn">Envoyer</button>
          </div>
     </form>
</body>

</html>