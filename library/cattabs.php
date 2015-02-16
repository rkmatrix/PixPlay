<div class="recent_videos">
<?php
	if($catTabs == 'index'){
	$categories = mysql_query('select category from categories');$i=0;
	while($categories_row = mysql_fetch_array($categories)){
		$q = 'select '.$categories_row[0].'_subcategory from subcategories';$myQ = mysql_query($q);
		while($cnt = mysql_fetch_array($myQ)){if($cnt[0] != null){$subCatCount = 1;}else{$subCatCount = 0;}}
			if($subCatCount == 1){
				
				
				
				?>
			<section id="<?php echo $categories_row[0];?>-tab" class="<?php echo $categories_row[0];?>-tab">
			  <ul id="<?php echo $categories_row[0];?>tabs" class="<?php echo $categories_row[0];?>tabs">
				<?php 
				$myquery = 'select '.$categories_row[0].'_subcategory from subcategories';
							$subCategories = mysql_query($myquery);
							while ($subCategories_row = mysql_fetch_array($subCategories)){
								if($subCategories_row[0] != null){ ?>
								<li><a href="#<?php echo $subCategories_row[0];?>"><?php echo str_replace("_"," ", $subCategories_row[0]);?></a></li>
				
				<?php }} ?>
				
			  </ul>
			  <?php 
				$myquery = 'select '.$categories_row[0].'_subcategory from subcategories';$temp = "";
							$subCategories = mysql_query($myquery);
							while ($subCategories_row = mysql_fetch_array($subCategories)){
								if($subCategories_row[0] != null){?>
			  <div id="<?php echo $subCategories_row[0];?>" class="tab_content">
				<div class="box-product">
				  <div class="flexslider latest_carousel_tab">
					<ul class="slides">
					  <?php 
						$query = "select id,name from ".$subCategories_row[0]."_list where carousel=1;";
						$carousel = mysql_query($query);
							$count = 0;
							while($carousel_row = mysql_fetch_array($carousel)){ 
								if($count < 8){  ?>
					  <li>
						<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '".$carousel_row[1]. "';"));?>
						<div class="slide-inner">
						  <div class="image"><a href="http://localhost/a/WatchNow.php?id=<?php echo $carousel_row[0]; ?>&category=<?php echo $categories_row[0]; ?>&subcategory=<?php if($subCategories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $subCategories_row[0]; ?>_online&name=<?php echo $carousel_row[1]; ?>"><img src="http://localhost/a/GetImageFromDB.php?id=<?php echo $id[0]; ?>&catname=<?php echo  strtolower($categories_row[0]);?>_carousel" width="117" height="117" title="<?php echo $carousel_row[1]; ?>"/></a></div>
						  <div class="name"><a href="http://localhost/a/WatchNow.php?id=<?php echo $carousel_row[0]; ?>&category=<?php echo $categories_row[0]; ?>&subcategory=<?php if($subCategories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $subCategories_row[0]; ?>_online&name=<?php echo $carousel_row[1]; ?>" class=" yt-ui-ellipsis yt-ui-ellipsis-2 yt-uix-sessionlink     spf-link " title="<?php echo $carousel_row[1]; ?>"><?php echo $carousel_row[1]; ?></a></div>
						  
						  <!--
						  <a href="#" class="buttonone"><span>Watch Now</span></a>
						  <div class="cart">
							
							<input type="button" value="Watch Now" class="button" />
						  </div>-->
						  <div class="clear"></div>
						</div>
					  </li>
					  <?php  $count++; }} ?>
					  
					</ul>
				  </div>
				</div>
			  </div>
			  <?php }} ?>
			  
			</section>
			<style> 
				.<?php echo $categories_row[0];?>-tab{margin-bottom:20px;}
				.<?php echo $categories_row[0];?>-tab .<?php echo $categories_row[0];?>tabs{height:30px; line-height: 16px; padding-left:10px; border-bottom: 1px solid #4A4FA5; margin-bottom:20px;}
				.<?php echo $categories_row[0];?>-tab .<?php echo $categories_row[0];?>tabs li{float:left; list-style-type:none;}
				.<?php echo $categories_row[0];?>-tab .<?php echo $categories_row[0];?>tabs li a{padding:7px 15px 6px 15px; float:left; font-size:100%; text-transform:uppercase; font-weight: normal; text-align: center; text-decoration: none; color: #222; margin-right: 2px; opacity:0.7; border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;}
				.<?php echo $categories_row[0];?>-tab .<?php echo $categories_row[0];?>tabs li.active a{opacity:1; padding-bottom: 7px; background: #C2C6D3;font-weight: bold; border-top: 1px solid #4A4FA5; border-left: 1px solid #4A4FA5; border-right: 1px solid #4A4FA5;}
				.<?php echo $categories_row[0];?>-tab .deactive{display:none;}
			</style>
			<script type="text/javascript">
			(function() {
			  // store the slider in a local variable
			  var $window = $(window),
				  flexslider;
			  // tiny helper function to add breakpoints
			  function getGridSize() {
				return (window.innerWidth < 320) ? 1 :
					   (window.innerWidth < 600) ? 2 :
					   (window.innerWidth < 800) ? 3 :
					   (window.innerWidth < 900) ? 4 : 5;
			  }
			  $window.load(function() {
				$('#<?php echo $categories_row[0];?>-tab .featured_carousel_tab, #<?php echo $categories_row[0];?>-tab .latest_carousel_tab, #<?php echo $categories_row[0];?>-tab .bestseller_carousel_tab, #<?php echo $categories_row[0];?>-tab .special_carousel_tab').flexslider({
				  animation: "slide",
				  animationLoop: false,
				  slideshow: false,
				  itemWidth: 210,
				  minItems: getGridSize(), // use function to pull in initial value
				  maxItems: getGridSize(), // use function to pull in initial value
				  start: function(){
					  $("#<?php echo $categories_row[0];?>-tab .tab_content").addClass("deactive");
					  $("#<?php echo $categories_row[0];?>-tab .tab_content:first").removeClass("deactive"); //Show first tab content
					  } });
			  });

			$(document).ready(function() {
				//Default Action
				$("ul#<?php echo $categories_row[0];?>tabs li:first").addClass("active").show(); //Activate first tab
				//On Click Event
				$("ul#<?php echo $categories_row[0];?>tabs li").click(function() {
					$("ul#<?php echo $categories_row[0];?>tabs li").removeClass("active"); //Remove any "active" class
					$(this).addClass("active"); //Add "active" class to selected tab
					$("#<?php echo $categories_row[0];?>-tab .tab_content").hide(); 
					var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
					$(activeTab).fadeIn(); //Fade in the active content
					return false;
				});
			});}());
	</script>

				<?php       }$i++;} }?>

<!-------------Starts: For pages other than index page -------------------->
			<?php
	if($catTabs != 'index'){
	$q = 'select '.$catTabs.'_subcategory from subcategories';$myQ = mysql_query($q);
		while($cnt = mysql_fetch_array($myQ)){if($cnt[0] != null){$subCatCount = 1;break;}else{$subCatCount = 0;}}
			if($subCatCount == 1){
				
				$myquery = 'select '.$catTabs.'_subcategory from subcategories';$temp = "";
							$subCategories = mysql_query($myquery);
							while ($subCategories_row = mysql_fetch_array($subCategories)){
								if($subCategories_row[0] != null){
									
									
									
									
									?>
			<section id="<?php echo $subCategories_row[0];?>-tab" class="<?php echo $subCategories_row[0];?>-tab">
			  <ul id="<?php echo $subCategories_row[0];?>tabs" class="<?php echo $subCategories_row[0];?>tabs">
				<li><a href="#<?php echo $subCategories_row[0];?>"><?php echo str_replace("_"," ", $subCategories_row[0]);?></a></li>
			  </ul>
			  <div id="<?php echo $subCategories_row[0];?>" class="tab_content">
				<div class="box-product">
				  <div class="flexslider latest_carousel_tab">
					<ul class="slides">
					  <?php 
						$query = "select id,name from ".$subCategories_row[0]."_list where carousel=1;";
						$carousel = mysql_query($query);
							$count = 0;
							while($carousel_row = mysql_fetch_array($carousel)){ 
								if($count < 8){  ?>
					  <li>
						<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '".$carousel_row[1]. "';"));?>
						<div class="slide-inner">
						  <div class="image"><a href="http://localhost/a/WatchNow.php?id=<?php echo $carousel_row[0]; ?>&category=<?php echo $categories_row[0]; ?>&subcategory=<?php if($subCategories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $subCategories_row[0]; ?>_online&name=<?php echo $carousel_row[1]; ?>"><img src="http://localhost/a/GetImageFromDB.php?id=<?php echo $id[0]; ?>&catname=<?php echo  strtolower($categories_row[0]);?>_carousel" width="117" height="117" title="<?php echo $carousel_row[1]; ?>"/></a></div>
						  <div class="name"><a href="http://localhost/a/WatchNow.php?id=<?php echo $carousel_row[0]; ?>&category=<?php echo $categories_row[0]; ?>&subcategory=<?php if($subCategories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $subCategories_row[0]; ?>_online&name=<?php echo $carousel_row[1]; ?>" class=" yt-ui-ellipsis yt-ui-ellipsis-2 yt-uix-sessionlink     spf-link " title="<?php echo $carousel_row[1]; ?>"><?php echo $carousel_row[1]; ?></a></div>
						  
						  <!--
						  <a href="#" class="buttonone"><span>Watch Now</span></a>
						  <div class="cart">
							
							<input type="button" value="Watch Now" class="button" />
						  </div>-->
						  <div class="clear"></div>
						</div>
					  </li>
					  <?php  $count++; }} ?>
					  
					</ul>
				  </div>
				</div>
			  </div>
			</section>
			<style> 
				.<?php echo $subCategories_row[0];?>-tab{margin-bottom:20px;}
				.<?php echo $subCategories_row[0];?>-tab .<?php echo $subCategories_row[0];?>tabs{height:30px; line-height: 16px; padding-left:10px; border-bottom: 1px solid #9295D5; margin-bottom:20px;}
				.<?php echo $subCategories_row[0];?>-tab .<?php echo $subCategories_row[0];?>tabs li{float:left; list-style-type:none;}
				.<?php echo $subCategories_row[0];?>-tab .<?php echo $subCategories_row[0];?>tabs li a{padding:7px 15px 6px 15px; float:left; font-size:100%; text-transform:uppercase; font-weight: bold; text-align: center; text-decoration: none; color: #222; margin-right: 2px; opacity:0.7; border-top: 1px solid #4A4FA5; border-left: 1px solid #4A4FA5; border-right: 1px solid #4A4FA5;}
				.<?php echo $subCategories_row[0];?>-tab .<?php echo $subCategories_row[0];?>tabs li.active a{opacity:1; padding-bottom: 7px; background: #C2C6D3; border-top: 1px solid #4A4FA5; border-left: 1px solid #4A4FA5; border-right: 1px solid #4A4FA5;}
				.<?php echo $subCategories_row[0];?>-tab .deactive{display:none;}
			</style>
			<script type="text/javascript">
			(function() {
			  // store the slider in a local variable
			  var $window = $(window),
				  flexslider;
			  // tiny helper function to add breakpoints
			  function getGridSize() {
				return (window.innerWidth < 320) ? 1 :
					   (window.innerWidth < 600) ? 2 :
					   (window.innerWidth < 800) ? 3 :
					   (window.innerWidth < 900) ? 4 : 5;
			  }
			  $window.load(function() {
				$('#<?php echo $subCategories_row[0];?>-tab .featured_carousel_tab, #<?php echo $subCategories_row[0];?>-tab .latest_carousel_tab, #<?php echo $subCategories_row[0];?>-tab .bestseller_carousel_tab, #<?php echo $subCategories_row[0];?>-tab .special_carousel_tab').flexslider({
				  animation: "slide",
				  animationLoop: false,
				  slideshow: false,
				  itemWidth: 210,
				  minItems: getGridSize(), // use function to pull in initial value
				  maxItems: getGridSize(), // use function to pull in initial value
				  start: function(){
					  $("#<?php echo $subCategories_row[0];?>-tab .tab_content").addClass("deactive");
					  $("#<?php echo $subCategories_row[0];?>-tab .tab_content:first").removeClass("deactive"); //Show first tab content
					  } });
			  });

			$(document).ready(function() {
				//Default Action
				$("ul#<?php echo $subCategories_row[0];?>tabs li:first").addClass("active").show(); //Activate first tab
				//On Click Event
				$("ul#<?php echo $subCategories_row[0];?>tabs li").click(function() {
					$("ul#<?php echo $subCategories_row[0];?>tabs li").removeClass("active"); //Remove any "active" class
					$(this).addClass("active"); //Add "active" class to selected tab
					$("#<?php echo $subCategories_row[0];?>-tab .tab_content").hide(); 
					var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
					$(activeTab).fadeIn(); //Fade in the active content
					return false;
				});
			});}());
	</script>

						<?php         }}}$i++; }?>
<!-------------Ends: For pages other than index page -------------------->			
</div>