<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $to = "charisma.konstanz@gmail.com"; 
    $subject = "Neue Kontaktanfrage"; 
    $firstname = htmlspecialchars($_POST["firstname"]); 
    $lastname = htmlspecialchars($_POST["lastname"]); 
    $email = htmlspecialchars($_POST["email"]); 
    $message = htmlspecialchars($_POST["subject"]); 

    $body = "Vorname: $firstname\nNachname: $lastname\nE-Mail: $email\nNachricht:\n$message"; 

    // Send email 
    if (mail($to, $subject, $body)) {
        echo "<div id='success-message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: black; color: red; padding: 20px; border-radius: 5px; z-index: 1000;'>
                Kontakt Nachricht rausgeschickt
                <button onclick=\"document.getElementById('success-message').style.display='none';\" style='margin-top: 10px; background-color: red; color: white; border: none; padding: 10px; cursor: pointer;'>Schließen</button>
              </div>";
    } else {
        echo "<div id='error-message' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: black; color: red; padding: 20px; border-radius: 5px; z-index: 1000;'>
                Fehler beim Versenden der Nachricht
                <button onclick=\"document.getElementById('error-message').style.display='none';\" style='margin-top: 10px; background-color: red; color: white; border: none; padding: 10px; cursor: pointer;'>Schließen</button>
              </div>";
    }
} 
?>