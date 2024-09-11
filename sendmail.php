<?php //echo '<pre>'; print_r($_POST); die();
if(isset($_POST['submit']) && $_POST['submit'] =='Send Message'){
    // echo '<pre>'; print_r($_POST); die();
    $to = 'logicalat.dev2@gmail.com';
    $subject = 'Enquiry from contact us page';
    $from = 'logicalat.dev2@gmail.com';
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
    // Create email headers
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
     
    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<h1 >Hello Admin,<br/>Tejas Chavan Portfolio</h1>';
    $message .= '<p>A contact us form is submitted on website.<br/>Below are the submmited details</p>';
    $message .= '<p><span>Name: </span>'.$_POST['name'].'</p>';
    $message .= '<p><span>Email: </span>'.$_POST['email'].'</p>';
    // $message .= '<p><span>Phone: </span>'.$_POST['form_phone'].'</p>';
    $message .= '<p><span>Subject: </span>'.$_POST['subject'].'</p>';
    $message .= '<p><span>Message: </span>'.nl2br($_POST['message']).'</p>';
    $message .= '<p><span>submit: </span>'.$_POST['submit'].'</p>';
    // $message .= '<p><br/><br/>-Regards<br/>Team Koyascofx</p>';
    $message .= '</body></html>';

     // echo '<pre>'; print_r($message); die();    
     
    // Sending email
    mail('tejchavan1997@gmail.com', $subject, $message, $headers); // must be commented, for testing only
    if(mail($to, $subject, $message, $headers)){
        header('location:index.html');
    } else{
        //echo '<script>alert("Unable to send email. Please try again.");</script>';
        header('location:index.html');
    }
}
?>