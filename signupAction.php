<?php 
require ('actions/basededonnes.php');
// bouton de validation
if(isset($_POST['valided'])){
  //verifier si les donnes existe
    if(!empty($_POST['pseudo'])&& !empty($_POST['nom'])&& !empty($_POST['prenom']) && !empty($_POST['phone']) && !empty($_POST['password'])){
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $nom = htmlspecialchars($_POST['nom']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $phone = htmlspecialchars($_POST['phone']);
      $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
      $check = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo=?');
      $check->execute(array($pseudo));
      //on test si un utilisateur exist sur le site ou pas si oui s'il veut cree encore un compte il genere une message d'erreur
      if($check->rowCount() == 0){
          $insertdonn = $bdd->prepare('INSERT INTO utilisateur(pseudo,nom,prenom,phone,mdp) VALUES(?, ?, ?, ?, ?)');
          $insertdonn->execute(array($pseudo,$nom,$prenom,$phone,$pass));
          // recuperer les informations de l'utilisateur
          $getauthe=$bdd->prepare('SELECT id,nom,prenom FROM utilisateur WHERE nom=? AND prenom=?');
          $getauthe->execute(array($nom,$preno));
          $usersinfo= $getauthe->fetch();
          // authentifiation
          $_SESSION['auth']=true;//ici on verifie bien si l'utilisateurest autentifier bien
          $_SESSION['id']=$usersinfo['id'];//ic on recupere l'identifiant
          $_SESSION['nom']=$usersinfo['nom'];
          $_SESSION['penom']=$usersinfo['prenom'];
          //rediriger l'utilisateur vers la page d'accuiel
          header('Location:BizPage/index.php');
      }else{
        $messEr = "<div style=color:red>l'utilisateur existe deja sur le site...</div>"; 
      }
    }else{
        $messEr="<div style=color:red>veillez completer tous les champ...</div>";
    }

}
?>