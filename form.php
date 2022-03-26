<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Form</title>
</head>

<body>
   
    <form action="thanks.php" method="POST" enctype="application/x-www-form-urlencoded">
       
       <label for="firstname">Prénom</label>
       <input type="text" name="firstname" id="firstname" pattern="[a-zA-Z'-'\s]*" placeholder="Votre nom" required>
       <label for="lastname">Nom</label>
       <input type="text" name="lastname" id="lastname" pattern="[a-zA-Z'-'\s]*"  placeholder="Votre prénom" required>
       
       <label for="email">Email</label>
       <input type="email" name="email" id="email" placeholder="Votre email" required>
       
       <label for="phone">Téléphone</label>
       <input type="tel" name="phone" id="phone" minlength = "10" pattern = '^[+]*([0-9]{10,13})' placeholder="Votre numéro de téléphone" required>
      
        <select name="list" id="list">
           <option value="info"> Demande d'informations</option>
           <option value="dispo">Changement de disponibilité</option>
           <option value="reservation">Reservation de table</option>
        </select>
           
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" required></textarea>
           
        <input type="submit" value="Envoyer">

       
   </form>
</body>
</html>
