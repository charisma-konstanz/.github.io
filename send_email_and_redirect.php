<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $to = "charisma.konstanz@gmail.com"; 
    $subject = "Neue Kontaktanfrage"; 
    $firstname = htmlspecialchars($_POST["firstname"]); 
    $lastname = htmlspecialchars($_POST["lastname"]); 
    $email = htmlspecialchars($_POST["email"]); 
    $message = htmlspecialchars($_POST["subject"]); 

    $body = "Vorname: $firstname\nNachname: $lastname\nE-Mail: $email\nNachricht:\n$message"; 

    // Send email 
    mail($to, $subject, $body); 
    
    // Redirect to kontaktanfrage.html 
    header("Location: /content/kontaktanfrage.html"); 
    exit(); 
} 
?>