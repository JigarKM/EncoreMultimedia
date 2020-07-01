<?php
      


        $fname             	=       $_POST["ffname"];    // NAME
        $flname         	=       $_POST["flname"];    //  Last Name
		$femail          	=       $_POST["femail"];    // MAIL
        $fphone            	=       $_POST["fphone"]; 	 //PHONE
		$fbirthday          =       $_POST["fbirthday"]; //Birthday
		$fgender            =       $_POST["fgender"];   //Gender
		
		//getting languages
		$getlanguages ='';
				foreach ($_POST["flanguages"] as $value) {
    					$getlanguages=$getlanguages."$value,";
					}
					
		$flanguages         =       $getlanguages;   //Languages
	

        $message         = '<table >';

        $message        .= '<tr><td>';
        $message        .= '<b>Hi,</b>';
        $message        .= '</td></tr>';

        $message        .= '<tr><td>';
        $message        .= '<b>Contact us form submitted online.</b>' ;
        $message        .= '</td></tr>';
		
        $message        .= '<tr><td>';
        $message        .= '<b>FIRST NAME 			:</b> '.$fname ;
        $message        .= '</td></tr>';
		
		$message        .= '<tr><td>';
        $message        .= '<b>LAST NAME 			:</b> '.$flname ;
        $message        .= '</td></tr>';

		$message        .= '<tr><td>';
        $message        .= '<b>E-MAIL ID 			:</b> '.$femail;
        $message        .= '</td></tr>';
		
		

		$message        .= '<tr><td>';
        $message        .= '<b>PHONE NUMBER 		:</b> '.$fphone ;
        $message        .= '</td></tr>';
		
		$message        .= '<tr><td>';
        $message        .= '<b>BIRTH DAY 			:</b> '.$fbirthday ;
        $message        .= '</td></tr>';
		
		$message        .= '<tr><td>';
        $message        .= '<b>GENDER 				:</b> '.$fgender;
        $message        .= '</td></tr>';
		
		$message        .= '<tr><td>';
        $message        .= '<b>LANGUAGES 			:</b> '.$flanguages;
        $message        .= '</td></tr>';


        $message        .= '</table>';
		

$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 		// This Line is Old 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";				// This Line is New 


// Subject
$subject	= 'contact form';

// To Address
$to			= "prasadpulaparthi123@gmail.com";

// Additional headers
$headers	.= 'From: '.$fname.' <'.$femail.'> ' . "\r\n";
//$headers	.= 'Cc: <email id here>' . "\r\n";
//$headers	.= 'Bcc: <email id here>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

echo 'Thank you for your submission!';

?>
