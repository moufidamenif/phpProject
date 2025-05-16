<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Luxe Bijoux</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400&display=swap">
    <style>
        main{
            width: 100%;
        }
        body,html{
             max-width: 100%;
            overflow-x: hidden;
        }
        img 
        {
            padding: 0;
        }
    </style>
</head>
<body>
    <?php include (VIEWS."inc/navbar.php")?>

   
      <img src="<?php echo  IMAGES_URL."/landingPage.png"  ?>">

    <?php include (VIEWS."inc/footer.php")?>
</body>
</html>