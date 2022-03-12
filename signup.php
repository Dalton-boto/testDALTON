<?php 
include 'includes/head.php';
?>


<?php 
require('actions/signupAction.php');
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
    </div> 
     </div>
     <div class="mb-3">
      <label for="exempleInputPassword1" class="form-label"></label>nom</div>
      <input type="text" class="form-control" name="nom">
    </div> 
    <div class="mb-3">
      <label for="exempleInputPassword1" class="form-label"></label>prenom</div>
      <input type="text" class="form-control" name="prenom" >
    </div> 
    <div class="mb-3">
      <label for="exempleInputPassword1" class="form-label"></label>phonenumber</div>
      <input type="number" class="form-control" name="phone" >
    </div>
      <div class="mb-3">
      <label for="exempleInputPassword1" class="form-label"></label>password</div>
      <input type="password" class="form-control" name="password">
    </div><br> <br>
         <button type="submit" class="btn btn-primary" name="valided">s'inscrire</button>
         <a href="login.php"><p>j'ai deja un compte,je me connect...</p></a>
         <script>
         alert('signature DALTON');
         </script>
    </form>
</body>
</html>