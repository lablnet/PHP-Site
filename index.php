<?php 

require_once 'init.php';

echo "site url: ";
//for site url
echo Site::SiteUrl();

echo "<br> Random salts: ";

//for slug,random string
echo Site::Salts(10);

//for redirect
//Site::Redirect();

