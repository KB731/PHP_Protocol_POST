<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../style1.css">
     <title>Document</title>
</head>

<body>
     <style>
          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          .container {
               background-color: #f2f2f2;
               width: 100%;
               height: 100%;
               display: flex;
               flex-direction: column;
               align-items: center;
               color: #000;
               padding: 20px;
               font-size: 30px;
               border-radius:5px;
          }

          .content {
               
               display: flex;
               justify-content: space-around;
          }

          .cont-city {
               width: 70%;
               height: 100%;
          }

          .cont-country {
               width: 70%;
               height: 100%;
          }

          button {
               margin-top: 25px;
               width: 80%;
               height: 100%;
               background-color: #000;
               color: #fff;
               font-size: 30px;
          }

          button:hover {
               background-color: #fff;
               color: #000;
          }

          input {
               margin-top: 20px;
               width: 80%;
               height: 100%;
               font-size: 30px;
          }
     </style>

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