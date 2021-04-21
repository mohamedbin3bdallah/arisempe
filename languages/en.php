<?php

function language($lang)
{
	$arr[' '] = " ";
	$arr[':'] = " : ";
	$arr['/'] = " / ";
	$arr['-'] = " - ";
	$arr['*'] = " * ";
	
	$arr['edit'] = "Edit";
	$arr['delete'] = "Delete";
	$arr['en'] = "English";
	$arr['ar'] = "Arabic";
	$arr['first'] = "First";
	$arr['next'] = "Next";
	$arr['previous'] = "Previous";
	$arr['last'] = "Last";
	
	// Arise ourteam
	$arr['more'] = "More";
	$arr['job'] = "Job";
	$arr['team'] = "Team";
	$arr['ourteam'] = "Our Team";
	$arr['newourteam'] = "New Team Member";
	$arr['noourteam'] = "There Are No Team Members";
	$arr['deleteourteammodal'] = "Are You Sure You Want To Delete This Team Member ?";
	$arr['description'] = "Description";
	
	// Arise Wish
	$arr['wish'] = "Wish";
	$arr['wait'] = "Wait ...";
	
	// Arise
	$arr['slogan'] = "Extraordinary Is Our Ordinary";
	$arr['copyright'] = "All rights reserved. Designed and developed by";
	$arr['contactslogan'] = "Feel free to contact us";
	$arr['form'] = "Form";
	$arr['home'] = "Home";
	$arr['about'] = "About";
	$arr['address'] = "Address";
	$arr['message'] = "Message";
	$arr['send'] = "Send";
	$arr['email'] = "Email";
	$arr['name'] = "Name";
	
	// Arise Menu
	$arr['services'] = "Services";
	$arr['portfolio'] = "Portfolio";
	$arr['contact'] = "Contact";
	
	// Arise Homepage
	$arr['newimage'] = "New Image";
	$arr['changeimage'] = "Change Image";
	
	
	// Arise About
	$arr['body'] = "Who We Are";
	$arr['vision'] = "Our Vision";
	$arr['mission'] = "Our Mission";
	$arr['values'] = "Our Values";
	$arr['logostory'] = "Logo Story";
	
	// Arise Contact
	$arr['phone'] = "Phone";
	$arr['sphone'] = "Sales No.";
	$arr['facebook'] = "Facebook";
	$arr['twitter'] = "Twitter";
	$arr['googleplus'] = "Google Plus";
	$arr['linkedin'] = "Linked IN";
	$arr['skype'] = "Skype";
	$arr['instagram'] = "Instagram";
	$arr['pinterest'] = "Pinterest";
	$arr['youtube'] = "Youtube";
	
	// Arise Testimonials
	$arr['job'] = "Job";
	$arr['company'] = "company";
	$arr['website'] = "website";
	$arr['testimonials'] = "Testimonials";
	$arr['notestimonials'] = "There Are No Testimonials";
	$arr['newtestimonial'] = "New Testimonial";
	$arr['deletetestimonialmodal'] = "Are You Sure You Want To Delete This Testimonial ?";
	
	// Arise Services
	$arr['all'] = "All";
	$arr['icon'] = "Icon";
	$arr['title'] = "title";
	$arr['noservices'] = "There Are No Services";
	$arr['categories'] = "Categories";
	$arr['subcategories'] = "SubCategories";
	$arr['services'] = "Services";
	$arr['subservices'] = "SubServices";
	$arr['newcategory'] = "New Category";
	$arr['newsubcategory'] = "New SubCategory";
	$arr['newservice'] = "New Service";
	$arr['newsubservice'] = "New SubService";
	$arr['deletecategorymodal'] = "Are You Sure You Want To Delete This Category ?";
	$arr['deletesubcategorymodal'] = "Are You Sure You Want To Delete This SubCategory ?";
	$arr['deleteservicemodal'] = "Are You Sure You Want To Delete This Service ?";
	$arr['deletesubservicemodal'] = "Are You Sure You Want To Delete This SubService ?";
	
	// Arise Offers
	$arr['offers'] = "Offers";
	$arr['newoffer'] = "New Offer";
	$arr['offer'] = "Offer";
	$arr['nooffer'] = "There are no Offers";
	$arr['deleteoffermodal'] = "Are You Sure You Want To Delete This Offer ?";
	$arr['hurryoffer'] = "HURRY UP AND CALL US NOW";
	
	// Arise Portfolio
	$arr['noprojects'] = "There Are No Projects";
	$arr['newproject'] = "New Project";
	
	$arr['reset'] = "Reset";
	$arr['accept'] = "Accept";
	$arr['year'] = "Years";
	$arr['members'] = "Members";
	$arr['appearto'] = "Appear To";
	
	// Arise Clients	
	$arr['newclient'] = "New Client";
	$arr['clients'] = "Clients";
	$arr['noclients'] = "There Are No Clients";
	$arr['deleteclientmodal'] = "Are You Sure You Want To Delete This Client ?";
	
	// admin
	$arr['countries'] = "Countries";
	$arr['hello'] = "Hello";
	$arr['image'] = "Image";
	$arr['agree'] = "AGREE";
	$arr['no'] = "NO";	
	
	//	designs/forms/login.php
	$arr['nowuser'] = "Current User";
	$arr['username'] = "Username";
	$arr['mobile'] = "Mobile No.";
	$arr['password'] = "Password";
	$arr['remember'] = "Remember Me";
	$arr['close'] = "Close";
	$arr['login'] = "LogIn";
	$arr['logout'] = "LogOut";
	$arr['forgotpass'] = "Forgot Password";
	$arr['wronglogin'] = "Enter the right Username and Password";	
	
	echo $arr[$lang];
}

?>