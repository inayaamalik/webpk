<?php
/**
 * @package Unlimited Elements
 * @author unlimited-elements.com
 * @copyright (C) 2021 Unlimited Elements, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('UNLIMITED_ELEMENTS_INC') or die('Restricted access');


class UniteHelperBaseUC extends HtmlOutputBaseUC{
	
	
	/**
	 *
	 * echo json ajax response
	 */
	public static function ajaxResponse($success,$message,$arrData = null){
	
		$response = array();
		$response["success"] = $success;
		$response["message"] = $message;
	
		if(!empty($arrData)){
		
			if(gettype($arrData) == "string")
				$arrData = array("data"=>$arrData);
	
			$response = array_merge($response,$arrData);
		}
						
		$json = json_encode($response);
		
		if($json == false){
			
			$message = json_last_error_msg();
			
			$response = array();
			$response["success"] = false;
			$response["message"] = "Json Encode error: ".$message;
			
			$json = json_encode($response);			
		}
			
		
		// clean the buffier, 
		// but return the content if exists for showing the warnings
		
		if(ob_get_length() > 0) {
			
			$content = ob_get_contents();
			ob_end_clean();
			
			echo $content;
		}
		
		$isJsonOutput = UniteFunctionsUC::getGetVar("json","",UniteFunctionsUC::SANITIZE_KEY);
		$isJsonOutput = UniteFunctionsUC::strToBool($isJsonOutput);
		
		if($isJsonOutput == true)
			header('Content-Type: application/json');
		
			
		echo UniteProviderFunctionsUC::escCombinedHtml($json);
		exit();
	}
	
	/**
	 *
	 * echo json ajax response, without message, only data
	 */
	public static function ajaxResponseData($arrData){
				
		if(gettype($arrData) == "string")
			$arrData = array("data"=>$arrData);
		
		self::ajaxResponse(true,"changelog returned",$arrData);
	}
	
	/**
	 *
	 * echo json ajax response
	 */
	public static function ajaxResponseError($message,$arrData = null){
	
		self::ajaxResponse(false,$message,$arrData,true);
	}
	
	/**
	 * echo ajax success response
	 */
	public static function ajaxResponseSuccess($message,$arrData = null){
	
		self::ajaxResponse(true,$message,$arrData,true);
	
	}
	
	/**
	 * echo ajax success response
	 */
	public static function ajaxResponseSuccessRedirect($message,$url){
		$arrData = array("is_redirect"=>true,"redirect_url"=>$url);
	
		self::ajaxResponse(true,$message,$arrData,true);
	}
	
	
}

?>