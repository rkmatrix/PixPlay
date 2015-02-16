<!DOCTYPE  html>
<?php

$username = "super";
$password = "super";
$host = "localhost";
$database = "galata";

mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

mysql_select_db($database) or die("Can not select the database: ".mysql_error());

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>PixonPlay - Telugu Movies</title>
		
		<link href="http://localhost/pixonplay/GetImageFromDB.php?id=47" rel="icon" type="image/x-icon" />
		<!-- CSS -->
		<link rel="stylesheet" href="http://localhost/pixonplay/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="http://localhost/pixonplay/css/social-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="http://localhost/pixonplay/css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="http://localhost/pixonplay/css/demo.css" type="text/css" media="screen" />
		<!-- ENDS CSS -->	
		<script type='text/javascript' src="http://localhost/pixonplay/js/menu_jquery.js"></script>	
		
		<!-- Product Gallery Page -->
			<link rel="stylesheet" href="http://localhost/pixonplay/css/filtrify.css">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script src="http://localhost/pixonplay/js/filtrify.min.js"></script>
			<script type="text/javascript">
				$(function() {$.filtrify("container", "placeHolder");});
			</script>
		<!-- END of Product Gallery Page -->
		
		<!-- For Lazy Loading -->
		<script src="http://localhost/pixonplay/js/lazyload.js"></script>
		<script type="text/javascript">
		$(function() {
			$("img.lazy").lazyload();
		});
		</script>
		<script type="text/javascript" src="http://localhost/pixonplay/js/ScrollToTop.js"></script>
		<!-- Nivo slider -->
		<link rel="stylesheet" href="http://localhost/pixonplay/css/nivo-slider.css" type="text/css" media="screen" />
		<script src="http://localhost/pixonplay/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="http://localhost/pixonplay/css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="http://localhost/pixonplay/js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="http://localhost/pixonplay/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="http://localhost/pixonplay/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="http://localhost/pixonplay/css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="http://localhost/pixonplay/css/superfish-left.css" /> 
		<script type="text/javascript" src="http://localhost/pixonplay/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="http://localhost/pixonplay/js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="http://localhost/pixonplay/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="http://localhost/pixonplay/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="http://localhost/pixonplay/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="http://localhost/pixonplay/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="http://localhost/pixonplay/css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="http://localhost/pixonplay/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="http://localhost/pixonplay/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="http://localhost/pixonplay/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
		
		

	</head>
	

	<body data-twttr-rendered="true" class="home">

			<!-- HEADER -->
			<div id="header">
				
				<!-- wrapper-header -->
				<div class="wrapper">
					
					<a href="http://localhost/pixonplay/index.php"><img id="logo" src="http://localhost/pixonplay/GetImageFromDB.php?id=32" alt="PixonPlay" /></a>
					<!-- search -->
					<div class="top-search">
						<form  method="get" id="searchform" action="#">
							<div>
								<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<!-- ENDS search -->
						
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			<!-- Menu -->
			<div id='cssmenu'>
			<ul>
			   <li><a href='http://localhost/pixonplay/index.php'><span>Home</span></a></li>
			   <?php
					$categories = mysql_query('select category from categories');$i=0;
					while($categories_row = mysql_fetch_array($categories)){ ?>
					<li class='has-sub'><a href="http://localhost/pixonplay/<?php echo $categories_row[0] ?>.php"><span><?php echo $categories_row[0] ?></span></a>
				  <ul>
					 <?php 
						$subCategories = mysql_query('select * from subcategories');
						while ($subCategories_row = mysql_fetch_array($subCategories)){ ?>
						<li class='has-sub'><a href="http://localhost/pixonplay/<?php echo $subCategories_row[$i] ?>.php"><span><?php echo $subCategories_row[$i] ?></span></a>
							<!-- Super Sub Category Starts -->
							
							<?php 
								if($categories_row[0] == "TVShows"){
								echo "<ul>";
									$query = 'Select distinct channel from '.$subCategories_row[$i].'_list;';
									$superSubCategories = mysql_query($query);
									while ($superSubCategories_row = mysql_fetch_array($superSubCategories)){
									$link = 'http://localhost/pixonplay/viewlist.php?cat='.$subCategories_row[$i].'_list&channel='.$superSubCategories_row[0];
										echo "<li><a href='$link'><span>".$superSubCategories_row[0]."</span></a></li>";
									}
								echo "</ul>";
								}
							?>
							<!-- Super Sub Category Ends -->
						</li>
					 <?php } ?>
					 
				  </ul>
			   </li>
			   <?php $i++;} ?>
			</ul>
			</div>

			<!-- ENDS Menu -->		
			

			
			<!-- MAIN -->
			<?php $channel = $_GET['channel'];
				  $table = $_GET['cat'];?>
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					
<div id="mymain" role="main">
<div id="content" class="demo">

<h2><?php $h2 = str_replace("_","",$table); echo str_replace("list","",$h2)?></h2>

<div id="placeHolder"></div>

<ul id="container">
	<?php
		$query = "select id,name,hero,year,genre,director from ".$table." where channel = '".$channel."';";
		$movieDetails = mysql_query($query);
		while($movieDetails_row = mysql_fetch_array($movieDetails)){ 
		$id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '". $movieDetails_row[1] . "';"));
		if($id[0] == ""){$id[0] = 381;}?>
		<li data-show=<?php if($movieDetails_row[1] != null){echo "'".$movieDetails_row[1]."'";} else{echo "'Not Specified'";} ?>>
			<a href="http://localhost/pixonplay/WatchNow.php?id=<?php echo $movieDetails_row[0] ?>&cat=".$table."_list"><strong><?php echo $movieDetails_row[1]; ?></strong></a>
			<a href="http://localhost/pixonplay/WatchNow.php?id=<?php echo $movieDetails_row[0] ?>&cat=".$table."_list" ><img data-original="http://localhost/pixonplay/GetImageFromDB.php?id=<?php echo $id[0]; ?>" class="lazy" width="220" height="318" title=<?php echo "'".$movieDetails_row[1]."'"; ?> ></a>
			<span>Channel: <i><?php echo $channel; ?></i></span>
		</li>
	<?php } ?>
	
	
</ul>

</div>
</div>



				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			
			<!-- Twitter 
			<div id="twitter">
				<div class="wrapper">
					<a href="#" id="prev-tweet"></a>
					<a href="#" id="next-tweet"></a>
					<img id="bird" src="img/bird.png" alt="Tweets" />
					<div id="tweets">
						<ul class="tweet_list"></ul>
					</div>
				</div>
			</div>
			<!-- ENDS Twitter -->

			
			<!-- FOOTER -->
			<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
						<li class="col">
							<h6>Pages</h6>
							<ul>
								<?php
								$categories = mysql_query('select category from categories');$i=0;
								while($categories_row = mysql_fetch_array($categories)){ ?>
								<li class="page_item"><a href="<?php echo $categories_row[0] ?>.php"><?php echo $categories_row[0] ?></a></li>
								<?php } ?>
							</ul>
						</li>
						
						<!-- <li class="col">
							<h6>Disclaimer</h6>
							<ul>
								<li><a href="#">Webdesign projects senectus</a></li>
								<li><a href="#/">Wordpress projects senectus</a></li>
								<li><a href="#">Vestibulum tortor quam</a></li>
								<li><a href="#">Code projects amet quam egestas</a></li>
								<li><a href="#">Web design projects senectus</a></li>
								<li><a href="#/">Marketplace projects</a></li>
								<li><a href="#">Writting projects senectus</a></li>
								<li><a href="#">Drawings projects fames Aenean</a></li>
								<li><a href="#/">Wordpress projects Aenean ultricies</a></li>
							</ul>-->
						</li>
						<li class="col">
							<h6>Disclaimer</h6>
							This website is not affiliated with YouTube. We are displaying vidoes hosted on YouTube in their provided embed function.
						</li> 
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<!--<div id="bottom-text">2011 Nova all rights reserved. <a href="http://www.luiszuno.com"> Luiszuno.com</a> | <a href="http://www.html5xcss3.com">html5xcss3.com</a> </div>-->
					<!-- Social -->
					<ul class="social ">
						<li><a href="http://www.facebook.com" class="poshytip  facebook" title="Become a fan"></a></li>
						<li><a href="https://plus.google.com/" class="poshytip google" title="Follow g+"></a></li>
						<li><a href="http://www.twitter.com" class="poshytip twitter" title="Follow our tweets"></a></li>
						<li><a href="http://www.dribbble.com" class="poshytip dribbble" title="View our work"></a></li>
						<li><a href="http://www.addthis.com" class="poshytip addthis" title="Tell everybody"></a></li>
						<li><a href="http://www.vimeo.com" class="poshytip vimeo" title="View our videos"></a></li>
						<li><a href="http://www.youtube.com" class="poshytip youtube" title="View our videos"></a></li>
					</ul>
					<!-- ENDS Social -->
					
					<div class="scroll-to-top">
						<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= 'bttop';"));?>
						<a href="#"> <img src="http://localhost/pixonplay/GetImageFromDB.php?id=<?php echo $id[0]; ?>"title="To Top"/></a>
					</div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	
	</body>
</html>