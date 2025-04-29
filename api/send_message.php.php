<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "sikhism@yandex.ru"; // Укажи свою почту
        $subject = "Новое сообщение с сайта";
        $body = "Имя: $name\nE-mail: $email\nСообщение:\n$message";

        $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            echo "<p style='text-align:center; color:green;'>Сообщение отправлено!</p>";
        } else {
            echo "<p style='text-align:center; color:red;'>Ошибка отправки. Попробуйте позже.</p>";
        }
    } else {
        echo "<p style='text-align:center; color:red;'>Заполните все поля!</p>";
    }
}
?>
