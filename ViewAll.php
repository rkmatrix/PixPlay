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
<title>PixonPlay - <?php if(isset($_GET['channel'])){echo str_replace("_"," ",$_GET['subcategory'])." - ". $_GET['channel'];}else{echo str_replace("_"," ",$_GET['subcategory']);} ?></title>
<?php include(ABSPATH.'cssdata.html');?>
<?php include(ABSPATH.'jsdata.html');?>
<!--------- Only for ViewAll Page ------------------------->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://localhost/a/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/a/js/jquery.1.4.2.js"></script>
<script type="text/javascript" src="http://localhost/a/js/jquery.lint.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/a/js/filtrify.min.js"></script>
<script type="text/javascript">
				$(function() {$.filtrify("containers", "placeHolder");});
			</script>
			<script type="text/javascript">
        $(document).ready(function() {
            $("#containers").Pagination();
        });
</script>
</head>
<body class="bg2">
<span class="smalllines">&nbsp;</span>
<!-- Wrapper -->
<div id="wrapper_sec">
	
    <!-- Header -->
    <?php include(ABSPATH.'header.php');?>
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Bread Crumb -->
        <div id="crumb">
        	<h5>You are here </h5>
            <ul>
                <li><a href="http://localhost/a/index.php">Home</a></li>
                
				<?php if(isset($_GET['subcategory'])){?>
				<li><a href="http://localhost/a/maincategory.php?cat=<?php if($_GET['category'] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $_GET['category']; ?>_online"><?php echo $_GET['category']; ?></a></li>
            	<?php }else{ ?>
				<li class="last"><a href="http://localhost/a/maincategory.php?cat=<?php if($_GET['category'] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $_GET['category']; ?>_online"><?php echo $_GET['category']; ?></a></li>
				<?php } ?>
				<?php 
				if(isset($_GET['subcategory'])){
				if(isset($_GET['channel'])){ $link = 'http://localhost/a/ViewAll.php?category='.$_GET['category'].'&subcategory='.$_GET['subcategory'];?>
				<li><a href="<?php echo $link; ?>"><?php echo str_replace("_"," ",substr($_GET['subcategory'],6,-7));?></a></li>
				<?php $link = 'http://localhost/a/ViewAll.php?category='.$_GET['category'].'&subcategory='.$_GET['subcategory'].'&channel='.$_GET['channel']; ?>
				<li class="last"><a href="<?php echo $link; ?>"><?php echo $_GET['channel'];?></a></li>
				<?php }else{ $link = 'http://localhost/a/ViewAll.php?category='.$_GET['category'].'&subcategory='.$_GET['subcategory'];?>
				<li class="last"><a href="<?php echo $link; ?>"><?php echo str_replace("_"," ",substr($_GET['subcategory'],6,-7));?></a></li>
				<?php }} ?>
            </ul>
        </div>
    	<!-- Column 1 -->
        <div class="col1">
            <div class="allvideos_heading">
            	<h3><?php if(isset($_GET['channel'])){echo str_replace("_"," ",substr($_GET['subcategory'],6,-7))." - ".$_GET['channel'];}else{echo str_replace("_"," ",substr($_GET['subcategory'],6,-7));} ?></h3>
                <p></p>
            </div>
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="whitesec_search">
            	<!-- <p></p>
                <a href="#" class="join"></a> -->
                <div class="smallsearch">
                	<input type="text" value="Enter keyword to search" id="searchBox3" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            		<a href="http://localhost/a/comingsoon/" class="buttonone"><span>Search</span></a>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">
            	<!--<div class="recent_head">
                	<ul class="videocat">
                    	
						<li>Sort By: </li>
                        <li><a href="#">Recently Added</a></li>
                        <li><a href="#">Most Viewed</a></li>
                        <li><a href="#">Top Rated</a></li>
                        <li class="last"><a href="#">Production Date</a></li> 
						
                    </ul>
                </div>
                <div class="clear"></div>-->
                <!-- Video Listing -->
				
                <div id="placeHolder"></div>
				<ul id="containers" class="display thumb_view">
				
                <?php
					if(isset($_GET['channel'])){
						$query = "select id,name,hero,year,genre,director from ".substr($_GET['subcategory'],6,-7)."_list where channel= '".$_GET['channel']."';";
					}
					else{
						if($_GET['category'] == 'Technology' || $_GET['category'] == 'NEWS' || $_GET['category'] == 'KIDS' || $_GET['category'] == 'Devotional' || $_GET['category'] == 'Cookery' || $_GET['category'] == 'Quiz'){
							$query = "select id,name from ".substr($_GET['subcategory'],6,-7)."_list";
						}
						else{
							$query = "select id,name,hero,year,genre,director from ".substr($_GET['subcategory'],6,-7)."_list";
						}
					}
					$id = mysql_fetch_array(mysql_query("select count(*) from ".substr($_GET['subcategory'],6,-7)."_list;"));
					$Details = mysql_query($query);
					while($Details_row = mysql_fetch_array($Details)){ 
					if($_GET['category'] == 'Technology' || $_GET['category'] == 'NEWS' || $_GET['category'] == 'KIDS' || $_GET['category'] == 'Devotional' || $_GET['category'] == 'Cookery' || $_GET['category'] == 'Quiz'){?>	
						<li data-Name=<?php if($Details_row[1] != null){echo "'".$Details_row[1]."'";} else{echo "'Not Specified'";} ?>>
					<?php } else { ?>
						<li data-Movies=<?php if($Details_row[1] != null){echo "'".$Details_row[1]."'";} else{echo "'Not Specified'";} ?> data-genre=<?php if($Details_row[4] != null){echo "'".$Details_row[4]."'";} else{echo "'Not Specified'";} ?> data-main-actors=<?php if($Details_row[2] != null){echo "'".$Details_row[2]."'";} else{echo "'Not Specified'";} ?> data-year=<?php if($Details_row[3] != null){echo "'".$Details_row[3]."'";} else{echo "'No Year'";} ?> data-director=<?php if($Details_row[5] != null){echo "'".$Details_row[5]."'";} else{echo "'Not Specified'";} ?>>
					<?php } ?>
                    	<a href="http://localhost/a/WatchNow.php?id=<?php echo $Details_row[0]; ?>&category=<?php echo $_GET['category']; ?>&subcategory=<?php if($_GET['category'] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo substr($_GET['subcategory'],6,-7); ?>_online&<?php if(isset($_GET['channel'])){echo "channel=".$_GET['channel']."&";}?>name=<?php echo $Details_row[1]; ?>" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img data-original="http://localhost/a/GetImageFromDB.php?id=<?php echo $id[0]; ?>&catname=<?php echo substr($_GET['subcategory'],6,-7); ?>_list"  class="lazy" alt="" width="155" height="113"/></a>
                        <div class="smallsec">
                        	<h6><a href="http://localhost/a/WatchNow.php?id=<?php echo $Details_row[0]; ?>&category=<?php echo $_GET['category']; ?>&subcategory=<?php if($_GET['category'] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo substr($_GET['subcategory'],6,-7); ?>_online&<?php if(isset($_GET['channel'])){echo "channel=".$_GET['channel']."&";}?>name=<?php echo $Details_row[1]; ?>" class="colr"><?php echo $Details_row[1]; ?></a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
					
					<?php } ?>
				</ul>
				<!-- Pagination -->
                <div id="PageList" class="paginations">
                	<h5 class="pagehead">PAGE</h5>
                    <ul>
                    	<li class="leftpage"><a href="#">&nbsp;</a></li>
                        <li class="pages"><a href="#">1</a></li>
                        <li class="pages"><a href="#">2</a></li>
                        <li class="pages"><a href="#">3</a></li>
                        <li class="pages"><a href="#">4</a></li>
                        <li class="pages"><a href="#" class="selected">5</a></li>
                        <li class="pages"><a href="#">6</a></li>
                        <li class="pages"><a href="#">7</a></li>
                        <li class="pages"><a href="#">8</a></li>
                        <li class="pages"><a href="#">9</a></li>
                        <li class="pages"><a href="#">10</a></li>
                        <li class="dots">...</li>
                        <li class="pages"><a href="#">103</a></li>
                        <li class="pages"><a href="#">104</a></li>
                        <li class="nextpage"><a href="#">&nbsp;</a></li>
                    </ul>
                </div>
                <!-- Small Banner 
                <div class="small_banner">
                	<a href="#"><img src="http://localhost/a/images/apple_banner.gif" alt="" /></a>
                </div>-->
                <div class="clear"></div>
                
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col2">
        	 <!-- Categories
            <div class="categories">
            	
			</div>
            <div class="clear"></div> -->
        	<!-- Tabs -->
			<?php include(ABSPATH.'tabs.php');?>
        	<!-- Advertisment -->
        	<div class="adv">
            	<a href="#"><img src="http://localhost/a/images/adv1.gif" alt="" /></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<!-- Footer -->
<?php include(ABSPATH.'footer.php');?>
</body>
</html>
