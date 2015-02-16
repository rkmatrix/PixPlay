<div id="footer">
	<div class="innerfoot">
    	<!-- Top button Section -->
        <div class="scroll-to-top">
						<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= 'bttop';"));?>
						<a href="#"> <img src= "http://localhost/a/images/bttop.png" title="To Top"/></a>
					</div>
        <div class="clear"></div>
        <!-- Footer - Search - Share -->
        <div class="foot_search_share">
        	<!-- Footer - search -->
        	<div class="foot_search">
            	<input type="text" value="Enter keyword to search" id="searchBox2" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            	<a href="http://localhost/a/Search.php" class="searchbtn buttonone right"><span>Search</span></a>
            </div>
            <!-- Footer -share -->
            <div class="share">
            	<a href="#"><img src="http://localhost/a/images/facebook.png" alt="" /></a>
                <a href="#"><img src="http://localhost/a/images/twitter.png" alt="" /></a>
                <a href="#"><img src="http://localhost/a/images/rss.png" alt="" /></a>
                <a href="#"><img src="http://localhost/a/images/youtube.png" alt="" /></a>
                <a href="#"><img src="http://localhost/a/images/linkdin.png" alt="" /></a>
                <a href="#"><img src="http://localhost/a/images/del.png" alt="" /></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Footer content -->
        <div class="footer_cont">
        	<!-- Footer sec1 -->
            <div class="footer_sec1">
            	<!-- Footer logo -->
                <div class="foot_logo">
                	<a href="http://localhost/a/index.php"><img src="http://localhost/a/images/logo.png" alt="PixonPlay" title="Pix Always Play" width="225" height="55"/></a>
                </div>
                <!-- Footer - our network -->
                <div class="ournetwork">
                	<h3>Our Network</h3>
                    <ul>
                    	<li><a href="#" class="youtube">www.YouTube.com</a></li>
                        <li><a href="#" class="flickr">www.Flickr.com</a></li>
                        <li><a href="#" class="facebook">www.facebook.com</a></li>
                    </ul>
                </div>
                <!-- Footer - rules policies -->
                
            </div>
            <!-- Footer sec2 -->
            <div class="footer_sec2">
            	<!-- Footer - about us -->
                <div class="aboutus">
                	<h3>Categories</h3>
                    <ul>
                    	<?php
							$categories = mysql_query('select category from categories');$i=1;
							while($categories_row = mysql_fetch_array($categories)){ ?>
								<li><a href="http://localhost/a/maincategory.php?cat=<?php if($categories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $categories_row[0]; ?>_online"><?php echo $categories_row[0] ?></a></li>
						<?php $i++;} ?>
                    </ul>
                </div>
                <!-- Footer - information
                <div class="inforamtion">
                	<h3>Inforamtion</h3>
                    <ul>
                    	<li><a href="#">Help</a></li>
                        <li><a href="#">Imprint</a></li>
                        <li><a href="#">Copyright Agent</a></li>
                    </ul>
                </div> -->
            </div>
            <!-- Footer sec3 
            <div class="footer_sec3">
            	<!-- Footer - recomended 
                <div class="recomended">
                	<h3>Recommended</h3>
                    <ul class="videolist">
                    	<li>
                        	<div class="thumb">
                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<h5><a class="white title" href="#">Lorem ipsum dolor sit</a></h5>
                                <p class="viewscount bbcolr">2,061,785 Views</p>
                                <p class="postedby bbcolr">Posted By:<a href="#" class="bbcolr under">RayWilliams</a></p>
                            </div>
                        </li>
                        <li>
                        	<div class="thumb">
                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<h5><a class="white title" href="#">Lorem ipsum dolor sit</a></h5>
                                <p class="viewscount bbcolr">2,061,785 Views</p>
                                <p class="postedby bbcolr">Posted By:<a href="#" class="bbcolr under">RayWilliams</a></p>
                            </div>
                        </li>
                        <li>
                        	<div class="thumb">
                                <a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="http://localhost/a/images/video7.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5><a class="white title" href="#">Lorem ipsum dolor sit</a></h5>
                                <p class="viewscount bbcolr">2,061,785 Views</p>
                            	<p class="postedby bbcolr">Posted By:<a href="#" class="bbcolr under">RayWilliams</a></p>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div id="Disclaimer">
	<div class="inner">
    	<p>Disclaimer :: This website is not affiliated with YouTube or DailyMotion. We are displaying vidoes hosted on YouTube and DailyMotion in their provided embed function.</p>
    </div>
</div>