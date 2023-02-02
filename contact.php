<?php

$name =($_GET['name']);
$email =($_GET['email']);
$phone =($_GET['phone']);
$adresse =($_GET['adresse']);




if(isset($_GET['submit'])
&& isset($_GET['name'])
&& isset( $_GET['email']) 
&& isset($_GET['phone'])
&& isset($_GET['adresse'])) {

    if(empty($name) && empty($email) && empty($phone) && empty($adresse))
        {
            echo '
            <alert>Attention, vous avez oublié de remplir le formulaire ! </alert>';
        } // good

        else if(!empty($name) && empty($email) && empty($phone) && empty($adresse))
        {
            
            echo '<alert>Attention, vous avez inscrit que votre nom ! </alert>';
        }
      
        else if(!empty($email) && empty($name) && empty($phone) && empty($adresse))
        {
            
            echo '<alert>Attention, vous avez inscrit que votre mail ! </alert>';
        }

        else if(!empty($phone) && empty($email) && empty($name) && empty($adresse))
        {
            
            echo '<alert>Attention, vous avez inscrit que votre numéro de téléphone! </alert>';
        }

        else if(!empty($adresse) && empty($email) && empty($phone) && empty($name))
        {
           
            echo '<alert>Attention, vous avez inscrit seulement votre mail ! </alert>';
        }

//---------------------------------------------------------------------------------------------//
        if(empty($name) && !empty($email) && !empty($phone) && !empty($adresse))
        {
            echo '
            <alert>Attention, vous avez oublié de remplir le nom ! </alert>';
        } // good

        else if(empty($email) && !empty($name) && !empty($phone) && !empty($adresse))
        {
            
            echo '<alert>Attention, vous avez oublié de remplir votre email ! </alert>';
        }
      
        else if(empty($phone) && !empty($name) && !empty($email) && !empty($adresse))
        {
            
            echo '<alert>Attention, vous avez oublié de remplir votre numero de téléphone ! </alert>';
        }

        else if(empty($adresse) && !empty($email) && !empty($name) && !empty($phone))
        {
            
            echo '<alert>Attention, vous avez oublié de remplir votre adresse! </alert>';
           
        }

        
    
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($adresse))
        { $tab = [
            'info'=>[
    
                'nom'=> $_GET['name'],
                'email'=> $_GET['email'],
                'phone'=> $_GET['phone'],
                'adresse' => $_GET['adresse']
            ]
    ];
           
            print_r($tab['info']['nom']);
            echo "<br>";
            print_r($tab['info']['email']);
            echo "<br>";
            print_r($tab['info']['phone']);
            echo "<br>";
            print_r($tab['info']['adresse']);
         }    


}

?>
<!--   if(empty($_POST['categorie']) OR empty($_POST['nom']) OR empty($_POST['date']) OR empty($_POST['lien'])) -->
<!--     
    echo $tab ['nom'],"\n";
    echo $tab ['email'],"\n";
    echo $tab ['phone'],"\n";
    echo $tab ['adresse'],"\n"; -->

    <!--   if(!empty($tab['info'])){
    
            echo $tab ['nom'],"\n";
            echo $tab ['email'],"\n";
            echo $tab ['phone'],"\n";
            echo $tab ['adresse'],"\n"; 
        } -->

        <!-- foreach à apprendre -->