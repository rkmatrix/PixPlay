<!DOCTYPE  html>
<?php
define('ABSPATH',dirname(__FILE__).'/library/');
include(ABSPATH.'connect.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width" />
<title>PixonPlay - <?php $myCategory = substr($_GET['cat'],6,-7); echo $myCategory;?></title>
<?php include(ABSPATH.'cssdata.html');?>
<?php include(ABSPATH.'jsdata.html');?>
</head>
<body>
<!--<span class="biglines">&nbsp;</span>-->
<!-- Wrapper -->
<div id="wrapper_sec">
	<!-- Header -->
    <?php include(ABSPATH.'header.php');?>
    <!-- Banner ----- Removed can be added by including banner.php -------------------------------------------->
    
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Column 1 -->
        <div class="col1">
        	<!-- Featured Playlist -->
			
        	<?php $page = $myCategory;include(ABSPATH."featuredChannels.php");?>
			<!-- Recent Videos -->
			<?php $catTabs = $myCategory;include(ABSPATH.'cattabs.php');?>
        </div>
			
        <!-- Column 2 -->
        <div class="col2">
        	<!-- Advertisment -->
        	<div class="adv">
            	<a href="#"><img src="http://localhost/a/images/adv1.gif" alt="" /></a>
            </div>
            <div class="clear"></div>
            <!-- mainpage_recentcommentstags.txt -->
			<!-- Tabs -->
			<?php include(ABSPATH.'tabs.php');?>
			<!-- Top Searches -->
            <div class="topsearches">
            	<h5>Top Searches</h5>
                <ul>
                	<li><a href="#" class="colr">Anne Roumanoff</a></li>
                    <li><a href="#" class="colr">Caméra caché</a></li>
                    <li><a href="#" class="colr">Cauet</a></li>
                    <li><a href="#" class="colr">Eric et Ramzy</a></li>
                    <li><a href="#" class="colr">Florence</a></li>
                    <li><a href="#" class="colr">Foresti</a></li>
                    <li><a href="#" class="colr">Franck Dubosc</a></li>
                    <li><a href="#" class="colr">Francois</a></li>
                    <li><a href="#" class="colr">Damiens</a></li>
                    <li><a href="#" class="colr">Anthony</a></li>
                    <li><a href="#" class="colr">Kavanagh</a></li>
                    <li><a href="#" class="colr">Jamel</a></li>
                    <li><a href="#" class="colr">Debbouze</a></li>
                    <li><a href="#" class="colr">Laurent</a></li>
                    <li><a href="#" class="colr">Ruquier</a></li>
                    <li><a href="#" class="colr">Les Nuls</a></li>
                    <li><a href="#" class="colr">Michaël Youn</a></li>
                    <li><a href="#" class="colr">Omar et Fred</a></li>
                    <li><a href="#" class="colr">Patrick Timsit</a></li>
                    <li><a href="#" class="colr">Rémi Gaillard</a></li>
                    <li><a href="#" class="colr">Gad ElMaleh</a></li>
                    <li><a href="#" class="colr">Stéphane Guillon</a></li>
                    <li><a href="#" class="colr">TF1 Replay</a></li>
                    <li><a href="#" class="colr">chatroulette</a></li>
                </ul>
                <a href="#" class="buttonone"><span>Most Viewed Videos</span></a>
                <a href="#" class="buttonone"><span>Recent Videos</span></a>
            </div> 
        </div>
    </div>
</div>
<div class="clear"></div>
	<!-- Footer -->
<?php include(ABSPATH.'footer.php');?>


</body>
</html>
