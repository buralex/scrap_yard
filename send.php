<?php


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$nameErr = $phoneErr = "";
$name = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["phone"]) ) {
  
  if ($_SERVER['REQUEST_METHOD']=="POST") {

		
		if (!file_exists('upload/' )) {
        	mkdir('upload/' );
    	}
	}
	
  $name = test_input($_POST["name"]);
  $phone = test_input($_POST["phone"]);
  

  //SMTP needs accurate times, and the PHP time zone MUST be set
  //This should be done in your php.ini, but this is how to do it if you don"t have access to that
  date_default_timezone_set("Europe/Kiev");

  $path .="phpmailer/PHPMailerAutoload.php";

  require $path;

  $mail = new PHPMailer;

  $mail->isSMTP();

  $mail->Host = "smtp.gmail.com";

  $mail->Port = 587;

  $mail->SMTPSecure = "tls";

  $mail->SMTPAuth = true;

  $mail->Username = "scrapyard2017@gmail.com";

  $mail->Password = "test_task";
  
  
  //Set who the message is to be sent from
  $mail->setFrom("scrapyard2017@gmail.com");
  $mail->AddReplyTo("$phone", "$name");
  
  //Set who the message is to be sent to
  $mail->addAddress("scrapyard2017@gmail.com", "John Doe");

  $mail->Subject = "test";
  
  //$message = "name: "."$name"." "."phone:"."$phone";
  
  $mail->msgHTML("<h2> $name </h2>"."<h2> $phone </h2>");

  
  	for($ct=0;$ct<count($_FILES['userfile']['tmp_name']);$ct++){
      $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
      
      $filename =$_FILES['userfile']['name'][$ct];
      
      if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
          $mail->addAttachment($uploadfile, $filename);
      }
  
    }

  
  
  
  $mail->AltBody = "This is a plain-text message body";
  //$mail->SMTPDebug = 1;


  //send the message, check for errors
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      $result = "has been sent";
      echo "Message sent!";
  }
  
  //echo $message;
  //echo "$name";
  //echo " "."$phone";

} 

 
?>