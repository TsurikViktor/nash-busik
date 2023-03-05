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
            $mess =  htmlspecialchars($_POST['message']);
            
            $to = "polandbus.com.ua@gmail.com";
            $from = 'info@panibus.com.ua';
            $subject = "Заявка с сайта panibus.com.ua (блок - контакты)";
            $message = 'Имя: ' . $name . '<br>Телефон: ' . $phone . '<br>Сообщение: ' . $mess . '';
            $headers = "Content-type: text/html; charset=UTF-8 \r\n";
            $headers .= "From: <info@panibus.com.ua>\r\n";
            $result = mail($to, $subject, $message, $headers);

            if ($result) {
                echo "<p class='massageok'>Сообщение успешно отправлено.<br>Пожалуйста, оставайтесь на связи.</p>";
                $check = "24!1F-P;Zz4H@1Za&4bs1Kf^Xe6)271b&*;tdy^T*77-PHO2_a)yyRae)XbX8N4F";
                include("telegramBot.php");
            } else {
                echo "<p class='massageerror'>Сообщение не отправлено.<br>Пожалуйста, попробуйте еще раз.</p>";
            }
        } else {
            echo "<p class='massageerror'>Обязательные поля не заполнены.<br>Введите номер телефона.</p>";
        }
        ?>

    </body>
</html>