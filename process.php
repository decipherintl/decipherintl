<script>
 alert('process');
</script>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"];
 
$EmailTo = "amitacomval@gmail.com";
$Subject = "New Message Received";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";


$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if (isset($success)){
   echo "success";
}else{
    echo "invalid";
}
 
?>
