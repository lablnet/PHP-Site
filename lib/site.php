<?php 
	 /**
	 * Create instence of class
	 *
	 * @return object
	 */	 
function site_object(){

	return new Site;

}
	 /**
	 * Site Url
	 *
	 *
	 * @return string
	 */
function base_site_url(){

	return site_object()->SiteUrl();
}
	 /**
	 * Generate Salts
	 *
	 * @param $length of salts	 
	 *
	 * @return string
	 */
function generate_salts($length){

	return site_object()->Salts($length);

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
function redirect($url=null){

	return site_object()->Redirect($url);

}