<?php
$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message']
$subject = $_POST['Received Mail From "$name"'];
$to = $_POST['kip.handwerker@yahoo.com']
$headers = $_POST['From : <$from>\r\n ']

if (isset ($_POST['submit'])){
  if(mail($to, $subject, $message, $headers)){
    echo "Thanks!"
  } else {
    echo "Fail"
  }
}
?>
