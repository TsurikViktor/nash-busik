<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>


        <?php
        if (!empty($_POST['telephone'])) {
            $direction =  htmlspecialchars($_POST['direction']);
            $name = htmlspecialchars($_POST['name']);
            $phone =  htmlspecialchars($_POST['telephone']);
            $date = htmlspecialchars($_POST['date']);
            
            $to = "polandbus.com.ua@gmail.com";
            $from = 'info@panibus.com.ua';
            $subject = "Заявка с сайта panibus.com.ua";
            $message = 'Имя: ' . $name . '<br>Телефон: ' . $phone . '';
            $headers = "Content-type: text/html; charset=UTF-8 \r\n";
            $headers .= "From: <info@panibus.com.ua>\r\n";
            $result = mail($to, $subject, $message, $headers);

            if ($result) {
                echo "<p class='massageok'>Заявка успешно отправлена.<br>Пожалуйста, оставайтесь на связи.</p>";
                $check = "24!1F-P;Zz4H@1Za&4bs1Kf^Xe6)271b&*;tdy^T*77-PHO2_a)yyRae)XbX8N4F";
                include("telegramBot.php");
            } else {
                echo "<p class='massageerror'>Заявка не отправлена.<br>Пожалуйста, попробуйте еще раз.</p>";
            }
        } else {
            echo "<p class='massageerror'>Обязательные поля не заполнены.<br>Введите номер телефона.</p>";
        }
        ?>

    </body>
</html>