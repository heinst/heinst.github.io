<?
	//define the receiver of the email
	
	define('TO_NAME','Trevor Heins');
	define('TO_EMAIL','tjh88@drexel.edu');
	define('SUBJECT','Message for Trevor Heins');	
	
	define('TEMPLATE_PATH','template/default.php');
 
	define('SMTP_ENABLE',false); // True to enable SMTP
	define('SMTP_HOST','');
	define('SMTP_USERNAME','');
	define('SMTP_PASSWORD','');

	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','There seemed to be an error while sending the message, please retry.');

?>