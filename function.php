<?php

//require_once('phpMailer/PHPMailerAutoload.php');
if(isset($_REQUEST['email']))
{
    
    $name= $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];

    $msg = '<table>
    <tbody>
       <tr>
         <th>Name</th>
         <td>'.$name.'</td>
      </tr>
       <tr>
         <th>Lastname</th>
          <td>'.$lastname.'</td>
      </tr>
       <tr>
         <th>Email</th>
          <td>'.$email.'</td>
      </tr>
       <tr>
         <th>Password</th>
          <td>'.$pass.'</td>
      </tr>
      
    </tbody>
      
      
    </table>';
    
    $subject = 'Registration Form Data';

    $to      = 'email';
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: email' . "\r\n" .
    'Reply-To: email' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $msg, $headers))
    {
      echo "Your details have been send successfuly";
    }
    else
    {
      echo "An error occur while sending your details";
    }

}
