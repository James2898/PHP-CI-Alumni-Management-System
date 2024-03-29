<?php  

	class SendSMS {

			//##########################################################################
			// ITEXMO SEND SMS API - PHP - CURL METHOD
			// Visit www.itexmo.com/developers.php for more info about this API
			//##########################################################################
			/*public function itexmo($number,$message,$apicode){
				$ch = curl_init();
				$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
				curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
				curl_setopt($ch, CURLOPT_POST, 1);
				 curl_setopt($ch, CURLOPT_POSTFIELDS, 
				          http_build_query($itexmo));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				return curl_exec ($ch);
				curl_close ($ch);
			}*/
			//##########################################################################

			//##########################################################################
			// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
			// Visit www.itexmo.com/developers.php for more info about this API
			//##########################################################################
			function itexmo($number,$message,$apicode){
			$url = 'https://www.itexmo.com/php_api/api.php';
			$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
			$param = array(
			    'http' => array(
			        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			        'method'  => 'POST',
			        'content' => http_build_query($itexmo),
			    ),
			);
			$context  = stream_context_create($param);
			return file_get_contents($url, false, $context);}
			//##########################################################################
	}

?>