<?php
// 從表單接收資料
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// 設定收件人電子郵件地址
$to = "gimi0970706384@gmail.com";

// 組合電子郵件內容
$email_body = "You have received a new message from the contact form on your website.\n\n";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Subject: " . $subject . "\n";
$email_body .= "Message: " . $message . "\n";

// 設定電子郵件標題和寄件者
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// 傳送電子郵件
if (mail($to, $subject, $email_body, $headers)) {
    echo "Your message has been sent successfully!";
} else {
    echo "Oops, something went wrong. Please try again later.";
}
?>