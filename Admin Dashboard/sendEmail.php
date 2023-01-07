<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $phoneNo= $_POST['phoneNo'];
        $email = $_POST['email'];
        $PropertyName = $_POST['PropertyName'];     
        $date = $_POST['date'];

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
		$mail->addAddress($email); //enter you email address

        $mail->Subject = ("Appointment Information");
        $mail->Body = "<h3> 
            Date: $date<br>
            To,<br>
            $name.<br>
            <br>
            Dear Mr.$name,<br>
            This an email to set you on an appointment for the property that you have booked which is a $PropertyName in Serene@Sakura. The date of the appointment will be on $date. Any inquiry please contact us at 1300 1231 0231 0212.
            Sincerely,<br>
            GBJ Realty<br>
            </h3>";


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
