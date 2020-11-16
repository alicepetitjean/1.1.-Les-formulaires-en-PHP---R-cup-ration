<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<?php
  $truename = $_POST['true_name'];
    $username=$_POST['user_name'];
    $email=$_POST['user_email'];
    $number = $_POST['user_number'];
    $message = $_POST['user_message'];
    $sujet = $_POST ['sujet'];
    
   
if ($_POST) {
  $tab = array();

  if(empty($_POST['true_name'])) {
    $tab['true_name'] = " Ton prénom ne peut pas être vide.";
  }
  if(empty($_POST['user_name'])) {
    $tab['user_name'] = " Ton nom de famille ne peut pas être vide.";
  }
  if(empty($_POST['user_email'])) {
    $tab ['user_email'] = " Ton email ne peut pas être vide." ;
  }
  if(empty($_POST['user_number'])) {
    $tab ['user_number'] = " Ton numéro ne peut pas être vide." ;
  }
  if(empty($_POST['user_message'])) {
    $tab ['user_message'] = " Ton message ne peut pas être vide." ;
  }
  
} ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

  

<body>
<form  action="thankss.php"  method="post">
  <div>
      <p>
      <label  for="Prénom">Prénom:</label>
      <input  type="text"  id="prenom"  name="true_name">
      </p>
      <p> <?php if(empty($_POST['true_name'])) { 
        echo $tab['true_name'];} ?> </p>
    </div>  
  <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
      <p> <?php if(empty($_POST['user_name'])) { 
        echo $tab['user_name'];} ?> </p>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
        <p> <?php if(empty($_POST['user_email'])) { 
          echo $tab['user_email'];} ?> </p>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
      <p> <?php if(empty($_POST['user_message'])) { 
      echo $tab['user_message']; } ?> </p>
    </div>
    <div>
      <label  for="number">Numéro:</label>
      <input  id="number"  name="user_number">
      <p> <?php if(empty($_POST['user_number'])) { 
      echo $tab['user_number']; } ?> </p>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    <label for ="sujet">votre sujet : </label>
    <select name="sujet" id="choix-sujet">
      <option value="Youpi">Youpi</option>
      <option value="youpo">Youpo</option>
    </select>
  </form>
</body>
</html>

    
<?php echo 'Merci '. $truename .' '. $username .' de nous avoir contacté à propos de '. $sujet .'.<br> Un de nos conseillers vous contactera soit à l adresse '. $email .' ou par téléphone au '. $number .' dans les plus brefs délais pour traiter votre demande : <br>'. $message . ''; ?>
  
