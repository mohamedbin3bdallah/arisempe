<?php
include('libs/lang.php');
include('libs/index.php');

$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

//$wish = getWish();
$carousel = getCarousel();
$about = getAbout($lang_file);
$categories = getCategories($lang_file);
$subcategories = getSubCategories($lang_file);
//$offers = getOffers($lang_file);
$clients = getClients($lang_file);
$ourteam = getOurteam($lang_file);
//$testimonials = getTestimonials($lang_file);
$contact = getContact($lang_file);
?>