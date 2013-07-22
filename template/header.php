<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="imagetoolbar" content="no" />
<title><?=$page_title?> - New Zealand</title>
 <? if($page_description) print "<meta name=\"description\" content=\"$page_description\" />\n"; ?>
 <? if($page_keywords) print "<meta name=\"keywords\" content=\"$page_keywords\" />\n"; ?>

<link type="text/css" rel="stylesheet" href="../style.css"/>
<link type="text/css" rel="stylesheet" href="../js/galleryview-2.1.1/galleryview.css"/>

<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/galleryview-2.1.1/jquery.galleryview-2.1.1.js"></script>

<script type="text/javascript" src="../js/galleryview-2.1.1/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="../js/mootools.js"></script>
<script type="text/javascript" src="../js/shuffler.js"></script>
<link type="text/css" rel="stylesheet" href="/templates/nav.css"/>
<link type="text/css" rel="stylesheet" href="/templates/more.css"/>

<script type="text/javascript"> 
jQuery(document).ready(function(){

	jQuery("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	
	jQuery("ul.topnav li span").click(function() { //When trigger is clicked...
		
		//Following events are applied to the subnav itself (moving subnav up and down)
		jQuery(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		jQuery(this).parent().hover(function() {
		}, function(){	
			jQuery(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			jQuery(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			jQuery(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});

});
</script>



<body id="page-<?=$page_id?>" class="section-<?=$page_section?>">

<div class="container">

   <div id="header"> 
   


<!-- Top Nav -->
     <ul class="topnav">
           <li class="link-home"><a href="/">Home</a></li>
           
           
             <li class="link-wedding-day"><a href="../wedding-day/">Wedding Day</a></li>
             <li class="link-wedding-week"><a href="../the-week/">The Week</a></li>

            <li class="link-accommodation"><a href="../accommodation/">Accommodation</a>
            
              <ul class="subnav">
            <li><a href="../accommodation/">Queenstown</a></li>
            <li><a href="../Auckland-accommodation/">Auckland</a></li>
                                     </ul>
            </li>

           <li><a href="#">Flight Info</a>
            
              <ul class="subnav">
            <li><a href="../domestic-flights/">Domestic Flights</a></li>
                    <li><a href="../international-flights/">International Flights</a></li>
                  

                </ul>
            </li>
              <li class="link-photogallery"><a href="../photo-gallery/">Photo Gallery</a></li>
            <!-- <li><a href="#">Contact Us</a></li> -->
            
            

        </ul>
        
       <!-- End Top Nav --> 
        
</div>