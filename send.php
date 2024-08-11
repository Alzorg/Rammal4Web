<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$N=htmlspecialchars($_POST['Name']);
$E=htmlspecialchars($_POST['Email']);
$S=htmlspecialchars($_POST['Subject']);
$M=htmlspecialchars($_POST['Message']);

$to = "rammalabbass.ar@gmail.com";
$body = "الاسم: $N\nالبريد الإلكتروني: $E\nالرسالة:\n$M";
$headers = "From: $E";

if (mail($to, $S, $body, $headers)) {
    echo "تم إرسال الرسالة بنجاح!";
} else {
    echo "حدث خطأ أثناء إرسال الرسالة.";
}

}
?>
