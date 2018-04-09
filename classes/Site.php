<?php
	/**
	 * PHP Site class
	 *
	 * @author   Malik Umer Farooq <lablnet01@gmail.com>
	 * @author-profile https://www.facebook.com/malikumerfarooq01/
	 * @license MIT 
	 * @link    https://github.com/Lablnet/PHP-Site-class
	 *
	 */
class Site

{
		/**
		 * Return site URL
		 * 
		 * @return string
		 */	
	public function SiteUrl(){

		if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {

			$protocol = 'http://';

		} else {

			$protocol = 'https://';

		}

		    $base_url = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

			return $base_url.'/';

	}
	/**
	 * Redirect to another page
	 *
	 * @param (string) $url optional 
	 * self => itself page
	 * else => any page you want 
	 *
	 * @return void
	 */
	public function Redirect($url=null){

		if($url === null or empty($url)){

			$base_url = self::SiteUrl();

		}elseif($url === 'self' or isset($_SERVER['HTTP_REFERER'])) {

	        $base_url = $_SERVER['HTTP_REFERER'];

	    }elseif($url !== 'self' && $url !== null){

	    	$base_url = self::SiteUrl().$url;

	    }else{

			$base_url = $url;

		}

		header("Location:".$base_url);

	}	
	/**
	* generate salts for files
	* 
	* @param string $length length of salts
	* @return string
	*/
	public function Salts($length){
		
		$chars =  array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));

		$stringlength = count( $chars  ); //Used Count because its array now
		
		$randomString = '';
		
		for ( $i = 0; $i < $length; $i++ ) {
			
			$randomString .= $chars[rand( 0, $stringlength - 1 )];
			
		}
		
		return $randomString;
		
	}

}
