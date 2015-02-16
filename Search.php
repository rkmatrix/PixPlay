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
<title>PixonPlay - Search Result for <?php echo $_GET['keyword']; ?></title>
<?php include(ABSPATH.'cssdata.html');?>
<?php include(ABSPATH.'jsdata.html');?>
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
       
    	<!-- Column 1 -->
        
            <div class="allvideos_heading">
            	<h3><?php if(isset($_GET['channel'])){echo str_replace("_"," ",substr($_GET['subcategory'],6,-7))." - ".$_GET['channel'];}else{echo str_replace("_"," ",substr($_GET['subcategory'],6,-7));} ?></h3>
                <p>(Switch to 5000 DVDs)</p>
            </div>
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="whitesec_search">
            	<p></p>
                <a href="#" class="join"></a>
                <div class="smallsearch">
                	<input type="text" value="Enter keyword to search" id="searchBox3" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            		<a href="#" class="buttonone"><span>Search</span></a>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">
            	<div class="recent_head">
                	<ul class="videocat">
                    	<li>Sort By: </li>
                        <li><a href="#">Recently Added</a></li>
                        <li><a href="#">Most Viewed</a></li>
                        <li><a href="#">Top Rated</a></li>
                        <li class="last"><a href="#">Production Date</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <!-- Video Listing -->
                <div class="easyui-panel">
					<div class="easyui-pagination" data-options="total:<?php echo mysql_fetch_array(mysql_query("select count(*) from telugu_movies_list;"))[0]?>"></div>
				</div>
				<ul class="display thumb_view">
				
                <?php
					if(isset($_GET['channel'])){
					
					$query = "select id,name,hero,year,genre,director from ".substr($_GET['subcategory'],6,-7)."_list where channel= '".$_GET['channel']."';";
					}
					else{
					$query = "select id,name,hero,year,genre,director from ".substr($_GET['subcategory'],6,-7)."_list";
					}
					$Details = mysql_query($query);
					while($Details_row = mysql_fetch_array($Details)){ 
					$id = mysql_fetch_array(mysql_query("select id from ".substr($_GET['subcategory'],6,-7)."_list where name= '". $Details_row[1] . "';"));
					if($id[0] == ""){$id[0] = 381;}?>	
					<li>
                    	<a href="http://localhost/a/WatchNow.php?id=<?php echo $Details_row[0]; ?>&category=<?php echo $_GET['category']; ?>&subcategory=<?php if($_GET['category'] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo substr($_GET['subcategory'],6,-7); ?>_online&name=<?php echo $Details_row[1]; ?>" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img data-original="http://localhost/a/GetImageFromDB.php?id=<?php echo $id[0]; ?>&catname=<?php echo substr($_GET['subcategory'],6,-7); ?>_list"  class="lazy" alt="" width="155" height="113"/></a>
                        <div class="smallsec">
                        	<h6><a href="http://localhost/a/WatchNow.php?id=<?php echo $Details_row[0]; ?>&category=<?php echo $_GET['category']; ?>&subcategory=<?php if($_GET['category'] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo substr($_GET['subcategory'],6,-7); ?>_online&name=<?php echo $Details_row[1]; ?>" class="colr"><?php echo $Details_row[1]; ?></a></h6>
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
				<div class="easyui-panel">
					<div class="easyui-pagination" data-options="total:1101"></div></div>
                <div class="clear"></div>
                <!-- Small Banner 
                <div class="small_banner">
                	<a href="#"><img src="http://localhost/a/images/apple_banner.gif" alt="" /></a>
                </div>-->
                <div class="clear"></div>
                
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col2">
        	<!-- Categories -->
            <div class="categories">
            	<h5>Categories</h5>
                <ul>
                	<li><a href="#" class="colr">Action</a></li>
                    <li><a href="#" class="colr">Art &amp; Animation</a></li>
                    <li><a href="#" class="colr">Entertainment &amp; TV</a></li>
                    <li><a href="#" class="colr">Food</a></li>
                    <li><a href="#" class="colr">Games</a></li>
                    <li><a href="#" class="colr">How-To</a></li>
                    <li><a href="#" class="colr">Music</a></li>
                    <li><a href="#" class="colr">People &amp; Vlogs</a></li>
                    <li><a href="#" class="colr">Environment</a></li>
                    <li><a href="#" class="colr">Transportation</a></li>
                </ul>
                <ul>
                	<li><a href="#" class="colr">Animals</a></li>
                    <li><a href="#" class="colr">Commercials</a></li>
                    <li><a href="#" class="colr">Family</a></li>
                    <li><a href="#" class="colr">Funny Videos</a></li>
                    <li><a href="#" class="colr">Health &amp; Beauty</a></li>
                    <li><a href="#" class="colr">Movies &amp; Shorts</a></li>
                    <li><a href="#" class="colr">News &amp; Politics</a></li>
                    <li><a href="#" class="colr">Products &amp; Tech</a></li>
                    <li><a href="#" class="colr">Sports</a></li>
                    <li><a href="#" class="colr">Travel</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        	<!-- Tabs -->
            <div class="tabs">
            	<div class="tab_menu_container">
                    <ul id="tab_menu">  
                        <li><a class="current" rel="tab_sidebar_recent">Recent</a></li>
                        <li><a class="" rel="tab_sidebar_comments">Comments</a></li>
                        <li><a class="" rel="tab_sidebar_tags">Tags</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                <div class="tab_container">
                    <div class="tab_container_in">
                        <!-- Recent --> 
                        <div style="display: none;" id="tab_sidebar_recent" class="tab_sidebar_list">					
                        	<ul class="videolist">
                            	<li>
                                	<div class="thumb">
                            		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                            		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                                    	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video7.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                                    	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video8.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                    </div>
                                </li>
                            </ul>			
                        </div> 
                        <!-- END -->
                        <!-- Top Rated -->
                        <div style="display: none;" id="tab_sidebar_comments" class="tab_sidebar_list">  
                            <ul class="videolist">
                            	<li>
                                	<div class="thumb">
                                    	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video8.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                                    	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video7.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                            		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                            		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div> 
                        <!-- END -->
                        <!-- Most Commented -->
                        <div style="display: none;" id="tab_sidebar_tags" class="tab_sidebar_list"> 
                            <ul class="videolist">
                            	<li>
                                	<div class="thumb">
                            		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                            		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">Brian</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                                    	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video7.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                    </div>
                                </li>
                                <li>
                                	<div class="thumb">
                                    	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video8.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<h5><a class="colr title" href="http://localhost/a/detail.php">Lorem ipsum dolor sit</a></h5>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- END -->
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
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
