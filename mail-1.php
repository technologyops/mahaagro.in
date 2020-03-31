

<?php
    $to = "pandi@mahaagro.in";
    $subject = " Enquiry Email From Maha Agricultural Products Pvt Ltd";
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg']; 
    $from=$_POST['email'];

   
    $message = "
    <html>
    <head>
    <style type=”text/css”>
table {
    margin: 8px;
}

th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.2em;
    background: #666;
    color: #FFF;
    padding: 2px 6px;
    border-collapse: separate;
    border: 1px solid #000;
}

td {
    font-size: 1.2em;
    border: 1px solid #DDD;
    padding: 2px 6px;
}
</style>
    <title>HTML email</title>
    </head>
    <body>
    <h5>Enquiry From Web</h5>
    <table>
    <tr>
    <td>Name</td>
    <td>$name</td>
    </tr>

     <tr>
    <td>Email</td>
    <td>$email</td>
    </tr>
    <tr>
    <td>Phone</td>
    <td>$phone</td>
    </tr>
    <tr>
    <td>Subject</td>
    <td>$sub</td>
    </tr>
      
       <tr>
    <td>Message</td>
    <td>$msg</td>
    </tr>


    </table>
    </body>
    </html>
    ";



    // Always set content-type when sending HTML email
  //  $headers = "MIME-Version: 1.0" . "\r\n";
   // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
   // $headers .= 'From: $from'. "\r\n";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
$headers .= "From:".$from."\r\n";



    mail($to,$subject,$message,$headers);
echo "<script type='text/javascript'>window.location.href='index.html'</script>";
?>

