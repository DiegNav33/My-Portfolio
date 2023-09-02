<?php
    var_dump($_POST);

     if(!empty($_POST)){
        
         $formContent = $_POST["name"]."\n".$_POST["email"]."\n".$_POST["tel"]."\n".$_POST["message"];
         $mailReturn = mail("diegnavpro@gmail.com", $_POST["subject"], $formContent,"");

         var_dump($mailReturn, $formContent);
     }

    // header("Location:../pages/contact.html");