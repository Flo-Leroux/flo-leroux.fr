<?php

    $expediteur = @ $_POST['email'];
    $message = @ $_POST['message'];

    if(!empty($expediteur) && !empty($message)) {
        $destinataire = 'lerouxflorian1@gmail.com';
        // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
        // $expediteur = 'lerouxflorianiut@gmail.com';
        $copie = $expediteur;
        $copie_cachee = $expediteur;
        $objet = 'Site Personnel - Contact Form'; // Objet du message
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
        $headers .= 'Cc: '.$copie."\n"; // Copie Cc
        $headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
        $message = '<div style="width: 100%; text-align: center; font-weight: bold">'.$message.'</div>';
        if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
        {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else // Non envoyé
        {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);        
    }
    
?>