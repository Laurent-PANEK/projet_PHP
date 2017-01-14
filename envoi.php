<?php

if (empty($_POST)){

    
    echo "Veuillez renseigner les champs";
}
else{
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    $to="exemple@gmail.com";
    $subject="Message envoyé via le formulaire de contact";
    mail($to, $subject, $message, "From :" . $name);
    echo "<script>alert(\"Message envoyé\")</script>";
    
}


?>