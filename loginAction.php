<?php
require('actions/basededonnes.php');
//bouton de validation
if(isset($_POST['valided'])){
    //verier si le champ entrée ne pas vide
      if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
          //le donneé de users
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = htmlspecialchars($_POST['password']);

            //verifier si le pseudo existeest correct
        $checkuserexist = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo=?');
        $checkuserexist->execute(array($pseudo));
       //verifions si le mot de passe est correct si le nombre de données recuoerer est suprieure a 0
       if($checkuserexist->rowCount()>0){
          $userinfo=$checkuserexist->fetch();
          //on verifie si le deux mot de passe est correct crypter et non crypter
          if (password_verify($pass,$userinfo['mdp'])){
              //authentifier l'utilisateur sur la page de connection

            $_SESSION['auth']=true;//ici on verifie bien si l'utilisateur est autentifier bien
            $_SESSION['id']=$userinfo['id'];//ic on recupere l'identifiant
            $_SESSION['nom']=$userinfo['nom'];
            $_SESSION['penom']=$userinfo['prenom'];
            //on redirige l'utilisateur vers la page d'accuiellep
            header('Location:BizPage/index.php');
          }else{
            $messEr="<div style=color:red>Votre mot de passe est incorrect!</div>";     
          }
      }else{
        $messEr="<div style=color:red>votre pseudo est incorrect...</div>";  
       }
      
      }else{
          $messEr="veillez completer tous les champ...";
      }
  
  }
?>