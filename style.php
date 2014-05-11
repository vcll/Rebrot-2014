<?php
require_once('../../../wp-load.php');
header("Content-type: text/css"); 

echo '

.twitter {
  background: url("'.get_stylesheet_directory_uri().'/ico/twitter.png") no-repeat scroll left center #000;
}

.facebook {
  background: url("'.get_stylesheet_directory_uri().'/ico/facebook.png") left no-repeat #000;

}

.rss {
  background: url("'.get_stylesheet_directory_uri().'/ico/rss.png") left no-repeat #000;
}


.calendari {
  background: url("'.get_stylesheet_directory_uri().'/ico/calendari.png") left no-repeat #000;
}

.arran {
	background: url("'.get_stylesheet_directory_uri().'/ico/arran.png") left no-repeat #000;
}


'; ?>
