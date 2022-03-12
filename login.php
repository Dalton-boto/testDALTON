
<?php
include 'includes/head.php';
require('actions/loginAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<body>
<form action="" method="POST" class="container">
    <?php  
    if(isset($messEr)){
        echo'<p>'.$messEr.'<p>';
    }
    ?>
    <div><Help" class="form-text"></div>
    <div class="mb-3">
    <div class="mb-3">
      <label for="exempleInputPassword1" class="form-label"></label>pseudo</div>
      <input type="text" class="form-control" name="pseudo">
      <div class="mb-3">
      <label for="exempleInputPassword1" class="form-label"></label>password</div>
      <input type="password" class="form-control" name="password"><br>
    </div> <br>
         <button type="submit" class="btn btn-primary" name="valided">se connecter</button>
         <a href="signup.php"><p>Cree compte</p></a>
    </form>
</body>
</html>