






<?php
  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  // required files
  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';
  require 'phpmailer/src/SMTP.php';

  // Create an instance; passing `true` enables exceptions
  if (isset($_POST["contact_btn"])) {
    $mail = new PHPMailer(true);

    // Setting up variables to capture user input
    $postData = $uploadedFile = $statusMsg = '';
    $statusMsg = '';
    $msgClass = 'errordiv';

    $postData = $_POST;
    $name = $_POST['name'];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate user input
    if (empty($name)) {
      $statusMsgs[0][] = "<i class='mdi mdi-small mdi-alert-octagon mr-2'></i>Please enter your name.<br>";
    }

    if (empty($email)) {
      $statusMsgs[1][] = "<i class='mdi mdi-small mdi-alert-octagon mr-2'></i>Please enter your email address.<br>";
      
    }

    if (empty($message)) {
      $statusMsgs[2][] = "<i class='mdi mdi-small mdi-alert-octagon mr-2'></i>Your message is empty. Please add your message and try again.<br>";
    }


    if (empty($statusMsgs)) {
      // Check if email is valid
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $statusMsg = "Please enter a valid email address.";
      }
      else {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'altochp@gmail.com';
        $mail->Password = 'iyonogicdywbczio';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom($_POST["email"], $_POST["name"]); // Senter Email and Name
        $mail->addAddress('altoch@hotmail.com'); //Add a recipient email address
        $mail->addReplyTo($email); // Reply to sender

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'PORTFOLIO CONTACT FORM: from' . $name;
        $mail->Body = $message;

        // Success alert
        $mail->Send();

        echo
        "
        <script>
          alert('Message was sent successfully');
          document.location.href = '#contact';
        </script>
        ";
      }
    } 
    else {
      $statusMsg;
    }
  }
?>


















