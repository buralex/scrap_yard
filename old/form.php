<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $websiteErr = "";
$name = $email = $subject = $message = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) ) {
  
  if ($_SERVER['REQUEST_METHOD']=="POST") {
	//	print_r($_FILES);
		
		if (!file_exists('upload/' )) {
        	// dir doesn't exist, make it
        	mkdir('upload/' );
    	}
    	
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["userfile"]["name"]);
		move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);
		
	}
	
  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["message"])) {
    $messageText = "";
  } else {
    $message = test_input($_POST["message"]);
    $messageText = "<b>Name:</b> ".$name." <br><b>Email:</b> ".$email." <p>".$message."</p>";
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }
  
  //SMTP needs accurate times, and the PHP time zone MUST be set
  //This should be done in your php.ini, but this is how to do it if you don"t have access to that
  date_default_timezone_set('Etc/UTC');
  //$path = dirname( __FILE__ );
  $path ="phpmailer/PHPMailerAutoload.php";
  //echo($path . "<br>");
  require $path;
  //Create a new PHPMailer instance
  $mail = new PHPMailer;
  //Tell PHPMailer to use SMTP
  $mail->isSMTP();
  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug = 2;
  //Ask for HTML-friendly debug output
  $mail->Debugoutput = "html";
  //Set the hostname of the mail server
  $mail->Host = "smtp.gmail.com";
  // use
  // $mail->Host = gethostbyname("smtp.gmail.com");
  // if your network does not support SMTP over IPv6
  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587;
  //Set the encryption system to use - ssl (deprecated) or tls
  $mail->SMTPSecure = "tls";
  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "scrapyard2017@gmail.com";
  //Password to use for SMTP authentication
  $mail->Password = "test_task";
  
  
  //Set who the message is to be sent from
  $mail->setFrom("scrapyard2017@gmail.com");
  $mail->AddReplyTo("$subject", "$name");
  
  //Set who the message is to be sent to
  $mail->addAddress("scrapyard2017@gmail.com", "John Doe");
  //Set the subject line
  $mail->Subject = "test";
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  // $mail->msgHTML(file_get_contents("contents.html"), dirname(__FILE__));
  $mail->msgHTML("<div> $messageText </div>");
  //Replace the plain text body with one created manually
  $mail->AddAttachment($target_file);
  
  $mail->AltBody = "This is a plain-text message body";
  //$mail->SMTPDebug = 1;
  //Attach an image file
  // $mail->addAttachment("images/phpmailer_mini.png");
  //send the message, check for errors
  
  
  
  
  if ($_FILES["userfile"]["name"]) {
    unlink($target_file);
  }
  
      setcookie("userName", $name);
	setcookie("userEmail", $email);
	setcookie("userMessage", $message);
	setcookie("userSubject", $subject);
  
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      
      echo "Message sent! ";
      echo "<a href=\"index.php?id=contact\">Return back!</a>";
      
  }
  
  //header("Location: index.php?id=contact");
	//exit;
} else {
	// Чтение куки
	$name = strip_tags($_COOKIE["userName"]);
	$email = strip_tags($_COOKIE["userEmail"]);
	$message = $_COOKIE["userMessage"];
	$subject = $_COOKIE["userSubject"];


}

 
?>