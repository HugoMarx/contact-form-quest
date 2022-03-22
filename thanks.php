<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thank you !</title>
</head>
<body> 
    <div>
        <?php 
        
    echo '<h1>Merci '.$_POST['firstname'].' '.$_POST['lastname'].' de nous avoir contacté à propos de “'.$_POST['list'].'”.</h1>'.
    '<p>  Un de nos conseiller vous contactera soit à l’adresse '.$_POST['email'].' ou par téléphone au '.$_POST['phone'].' dans les plus brefs délais pour traiter votre demande : </p>'.

    '<p>" '.$_POST['message'].' "</p>';
    ?>
    </div>
    
</body>
</html>