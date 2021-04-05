<?php
    include('dbcon.php');

    // $reference = $database->getReference('contact');

    // ($reference->getValue()!=null);
    // echo $reference->getValue();
   

  
    


      $email = $_GET['email'];
      $pass =$_GET['pass'];
       
      $userProperties = [
        'uid' => $email,
        'email' => $email,
       
        
        'password' => $pass,
        
    ];

  
      //$auth = $factory->getAuth();
     // $user = $auth->createUserWithEmailAndPassword($email,$pass);
     try{
      $user1 ;
      if(is_null($auth->getUser($email))){

    //     echo "success";
    //     $user=  $auth->createUser($userProperties);
    //  $auth->sendEmailVerificationLink($email);
     
      }
      else{
        echo "<h1>There is a Account with this Email. You can't create a account using this email.</h1> <h3>or check your email to verify</h3> ";
      }
     
     //header("Location:createacc.php");
    //  echo "    A Confirmation Email has been sent on your inbox. Please check.
    //  <h1> PLEASE VERIFY YOUR EMAIL</h1>";
   //echo "successs";
    
     }
     catch(\Kreait\Firebase\Exception\Auth\UserNotFound $e)
     {
      $user=  $auth->createUser($userProperties);
      $auth->sendEmailVerificationLink($email);
      echo " A Confirmation Email has been sent on your inbox. Please check. <h1> PLEASE VERIFY YOUR EMAIL</h1>";
     }
   
     
      //header("Location:index.php");
      ?>
