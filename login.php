<?php
define('LOGIN', 'rozke');
define('PASSWORD', 'rozke');
if(!empty($_POST)) 
{
  // Les identifiants sont transmis ?
  if(!empty($_POST['login']) && !empty($_POST['password'])) 
  {
    // Sont-ils les mêmes que les constantes ?
    if($_POST['login'] !== LOGIN) 
    {
      $errorMessage = 'Mauvais login !';
    }
      elseif($_POST['password'] !== PASSWORD) 
    {  
      $errorMessage = 'Mauvais password !';
    }
      else
    {
      // On ouvre la session
      session_start();
      // On enregistre le login en session
      $_SESSION['login'] = LOGIN;
      // On redirige vers le fichier admin.php
      header('Location: challenge9.php');
      exit();
    }
  }
    else
  {
    $errorMessage = 'Veuillez inscrire vos identifiants svp !';
  }
}
//session_start();
//if (isset($_POST['login']))
//{
//    $_SESSION['login'] = $_POST['login'];
 //   header('location: challenge9.php');
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SESSION</title>
    <head>
    <title>Formulaire d'authentification</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <fieldset>
        <legend>Identifiez-vous</legend>
        <?php
          // Rencontre-t-on une erreur ?
          if(!empty($errorMessage)) 
          {
            echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
          }
        ?>
       <p>
          <label for="login">Login :</label> 
          <input type="text" name="login" id="login" value="" />
        </p>
        <p>
          <label for="password">Password :</label> 
          <input type="password" name="password" id="password" value="" /> 
          <input type="submit" name="submit" value="Se logguer" />
        </p>
      </fieldset>        
    </form>
</body>
</html>