            <div class="tabs">
            	<div class="tab_menu_container">
                    <ul id="tab_menu">  
                        <li><a class="current" rel="liked">Liked</a></li>
                        <li><a class="" rel="tvserials">TV Serials</a></li>
                        <li><a class="" rel="news">NEWS</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                <div class="tab_container">
                    <div class="tab_container_in">
                       <div style="display: none;" id="liked" class="tab_sidebar_list">					
                        	<ul class="videolist">
                            	<?php 
									$myquery = 'select Movies_subcategory from subcategories';$temp = "";
								$subCategories = mysql_query($myquery);
								while ($subCategories_row = mysql_fetch_array($subCategories)){ 
									if($subCategories_row[0] != null){$temp = $temp . "select id,name,link,tablename from ".$subCategories_row[0]."_list where Featured=1 UNION ";}}
								
								$query = substr($temp, 0, -7);
								$slideShow = mysql_query($query);
								while($slideShow_row = mysql_fetch_array($slideShow)){?>
								<li>
                                	<div class="thumb">
                            		<a href="http://localhost/a/WatchNow.php?id=<?php echo $slideShow_row[0]; ?>&category=null&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online&name=<?php echo $slideShow_row[1]; ?>"><!--<span class="add">&nbsp;</span><span class="rated">&nbsp;</span>--><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<a class="colr title" href="http://localhost/a/WatchNow.php?id=<?php echo $slideShow_row[0]; ?>&category=null&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online&name=<?php echo $slideShow_row[1]; ?>"><?php echo $slideShow_row[1]; ?></a>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">From: <a href="http://localhost/a/ViewAll.php?category=Movies&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online"><?php echo str_replace("_"," ",$slideShow_row[3]); ?></a></p>
                                    </div>
                                </li>
								<?php } ?>
                            </ul>			
                        </div> 
                        <!-- END -->
                        <!-- Top Rated -->
                        <div style="display: none;" id="tvserials" class="tab_sidebar_list">  
                            <ul class="videolist">
                            	<?php 
									$myquery = 'select TVSerials_subcategory from subcategories';$temp = "";
								$subCategories = mysql_query($myquery);
								while ($subCategories_row = mysql_fetch_array($subCategories)){ 
									if($subCategories_row[0] != null){$temp = $temp . "select id,name,link,tablename from ".$subCategories_row[0]."_list where Featured=1 UNION ";}}
								
								$query = substr($temp, 0, -7);
								$slideShow = mysql_query($query);
								while($slideShow_row = mysql_fetch_array($slideShow)){?>
								<li>
                                	<div class="thumb">
                            		<a href="http://localhost/a/WatchNow.php?id=<?php echo $slideShow_row[0]; ?>&category=null&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online&name=<?php echo $slideShow_row[1]; ?>"><!--<span class="add">&nbsp;</span><span class="rated">&nbsp;</span>--><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<a class="colr title" href="http://localhost/a/WatchNow.php?id=<?php echo $slideShow_row[0]; ?>&category=null&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online&name=<?php echo $slideShow_row[1]; ?>"><?php echo $slideShow_row[1]; ?></a>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">From: <a href="http://localhost/a/ViewAll.php?category=Movies&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online"><?php echo str_replace("_"," ",$slideShow_row[3]); ?></a></p>
                                    </div>
                                </li>
								<?php } ?>
                            </ul>
                        </div> 
                        <!-- END -->
                        <!-- Most Commented -->
                        <div style="display: none;" id="news" class="tab_sidebar_list"> 
                            <ul class="videolist">
                            	<?php 
									$myquery = 'select news_subcategory from subcategories';$temp = "";
								$subCategories = mysql_query($myquery);
								while ($subCategories_row = mysql_fetch_array($subCategories)){ 
									if($subCategories_row[0] != null){$temp = $temp . "select id,name,link,tablename from ".$subCategories_row[0]."_list where Featured=1 UNION ";}}
								
								$query = substr($temp, 0, -7);
								$slideShow = mysql_query($query);
								while($slideShow_row = mysql_fetch_array($slideShow)){?>
								<li>
                                	<div class="thumb">
                            		<a href="http://localhost/a/WatchNow.php?id=<?php echo $slideShow_row[0]; ?>&category=null&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online&name=<?php echo $slideShow_row[1]; ?>"><!--<span class="add">&nbsp;</span><span class="rated">&nbsp;</span>--><img src="http://localhost/a/images/video5.gif" alt="" /></a>
                                    </div>
                                    <div class="desc">
                                    	<a class="colr title" href="http://localhost/a/WatchNow.php?id=<?php echo $slideShow_row[0]; ?>&category=null&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online&name=<?php echo $slideShow_row[1]; ?>"><?php echo $slideShow_row[1]; ?></a>
                                        <p class="viewscount">2,061,785 Views</p>
                                        <p class="postedby">From: <a href="http://localhost/a/ViewAll.php?category=Movies&subcategory=<?php echo "Watch_".$slideShow_row[3]; ?>_online"><?php echo str_replace("_"," ",$slideShow_row[3]); ?></a></p>
                                    </div>
                                </li>
								<?php } ?>
                            </ul>
                        </div>
                        <!-- END -->
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>