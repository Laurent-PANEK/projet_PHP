<?php

if (empty($_POST)){

    
    echo "Veuillez renseigner les champs";
}
else{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $to="exemple@gmail.com";
    $subject="Message envoyé via le formulaire de contact";
    mail($to, $subject, $message, "From :" . $name);
    header('location:index.php');
    echo "<script>alert(\"Message envoyé\")</script>";
    
}


?>