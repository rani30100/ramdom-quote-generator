<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<!-- Control Maj R supprimer le cache de la Page  -->
<body>
    <section class="formulaire">
        <form action="contact.php"  class="formulaire">
            <h1>HELLO WORD</h1>
            <h3>Bienvenue dans mon form</h3>
            <div>
                <label for="name" ></label>
                <input type="text" for="name" name="name" placeholder="Votre nom" class="input" >
            </div>
    
            <div>
                <label for="email"></label>
                <input type="text" for="email" name="email" placeholder="Votre mail"class="input">
</div>
    
            <div>
    
                <label for="telephone"></label>
                <input type="text" for="email"name="phone"placeholder="Votre numéro de téléphone"class="input">
            </div>
    
            <div>
    
                <label for="adresse"></label>
                <input type="text" for="email"name="adresse"placeholder="Votre adresse"class="input">
            </div>

    
            <input type="submit" name="submit" id="" class="btn">
            <button type="reset" name="reset" class="btn"> Annuler</button>
    </section>




    </form>
</body>

</html>