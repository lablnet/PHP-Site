<?php 

require_once 'init.php';

echo "site url: ";

//for site url
echo base_site_url();

echo "<br> Random salts: ";

//for slug,random string
echo generate_salts(10);


//for redirect
//redirect();

