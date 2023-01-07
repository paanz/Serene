<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$PropertyName = $_POST['PropertyName'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "daniallotester123@gmail.com"; //enter you email address
        $mail->Password = 'yzkhojmbwqxcifxw'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("daniallotester123@gmail.com"); //enter you email address
		$mail->addAddress($email); //enter you email address

        $mail->Subject = ("Booking Received (Booking Form)");
        $mail->Body = "<h3> Full Name : $name <br>Email: $email  <br>Phone: $phone <br>Property Name : $PropertyName</h3>";


        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
