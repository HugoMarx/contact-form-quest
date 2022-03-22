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
       <input type="text" name="firstname" id="firstname" placeholder="Votre nom">
       <label for="lastname">Nom</label>
       <input type="text" name="lastname" id="lastname" placeholder="Votre prénom">
       <label for="email">Email</label>
       <input type="email" name="email" id="email" placeholder="Votre email">
       <label for="phone">Téléphone</label>
       <input type="tel" name="phone" id="phone" placeholder="Votre numéro de téléphone">
       <select name="list" id="list">
           <option value="info"> Demande d'informations</option>
           <option value="dispo">Changement de disponibilité</option>
           <option value="reservation">Reservation de table</option>
           <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
           <input type="submit" value="Envoyer">
       </select>
   </form>
</body>
</html>