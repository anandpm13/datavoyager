<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $email = $_POST['Email'];
       $subject = $_POST['Subject'];
       $Message = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "pmanand13@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>