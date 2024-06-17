<?php
include("setting.inc");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$to = $_POST["to"];
// $subject = $_POST["subject"];
// $content = $_POST["content"];
// $content = nl2br($content);

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jekjeujey@gmail.com';                     //SMTP username
    $mail->Password   = 'qrrt fvgg hfhi obkh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'utf-8';

    //Recipients
    $mail->setFrom('jekjeujek@gmail.com', 'NUK Online Website');
    $mail->addAddress('a1113342@mail.nuk.edu.tw', 'User');     //Add a recipient
    //$mail->addAddress('jekjeujek@gmail.com');               //Name is optional
    $mail->addAddress($to, 'User');
    //$mail->addReplyTo('jekjeujey@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Email Verification Confirmation";
    $mail->Body    = "Hello, welcome to NUK Website!";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent. Please check your mailbox.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$student_id = $_POST["sId"];
$name = $_POST["sName"];
$dept = $_POST["sDept"];

//鏈接資料庫
$link = @mysqli_connect(
    'localhost', //MYSQL主機
    'root', //使用者名稱
    '', //密碼
    'nukshop'); //預設使用的資料庫名稱

//SQL語法
$SQL = "INSERT INTO nukshop(StudentID, Name, Department) VALUES('$student_id','$name','$dept')";

// 送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>Registration completed!";
}
echo "<br/><a href = 'index2.php'>Happy Shopping!</a>"

?>