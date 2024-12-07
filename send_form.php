<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // TODO : Ajouter l'envoi d'email avec mail() ou une bibliothèque
    echo "Merci $firstName $lastName, votre message a été envoyé.";
}