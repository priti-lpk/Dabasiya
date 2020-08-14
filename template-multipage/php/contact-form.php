<?php

if ($_POST) {

    $email_to = "preetihirani2909@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];

    $message = $_POST["message"];
    $fromemail = "talk@lpktechnosoft.com";
    $email_subject = "Contact-us";
    $headers = "From:" . $fromemail . "\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "Reply-To: " . $fromemail . "\n";
    $message = "<html>
	            <head>
		    <title>Email</title>
                    </head>
                    <style>
                    </style>
	            <body>
                    <div class='msg' style='border:1px solid black; width:100%;background-color: #f2f2f2;'>
                            <h2>" . $email_subject . "</h2>
                            Name: " . $name . "<br>
                            Email: " . $email . "<br>
                            Message: " . $message . "
                    </div>
                    </body>
                    </html>";
//    echo $message;

    $sent = mail($email_to, $email_subject, $message, $headers);
    if ($sent) {
        $responce = array("status" => TRUE, "msg" => "successfull");
        echo "<script>alert('Successfully Contact');top.location='../contact.php';</script>";
    } else {
        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail" . $sent);
    }

    echo json_encode($responce);
}
?>