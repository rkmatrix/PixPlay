<div id="banner">
    	<div id="slider2" class="leftsecbanner">
            <?php 
							$myquery = 'select Movies_subcategory from subcategories';$temp = "";
							$subCategories = mysql_query($myquery);
							while ($subCategories_row = mysql_fetch_array($subCategories)){ 
								if($subCategories_row[0] != null){$temp = $temp . "select link from ".$subCategories_row[0]."_list where Featured=1 UNION ";}}
							
							$query = substr($temp, 0, -7);
							$slideShow = mysql_query($query);
							while($slideShow_row = mysql_fetch_array($slideShow)){ ?>
				<div class="contentdiv">
                <iframe width="660" height="348" src=<?php echo str_replace("embed","v",$slideShow_row[0]); ?> frameborder="0" allowfullscreen></iframe>
				
            </div>
			<?php } ?>
			 <?php $slideShow = mysql_query('select link from trailers_carousel;');
							while($slideShow_row = mysql_fetch_array($slideShow)){ ?>
				<div class="contentdiv">
                <iframe width="660" height="348" src=<?php echo str_replace("embed","v",$slideShow_row[0]); ?> frameborder="0" allowfullscreen></iframe>
				
            </div>
			<?php } ?>
			 <?php $slideShow = mysql_query('select link from movies_carousel;');
							while($slideShow_row = mysql_fetch_array($slideShow)){ ?>
				<div class="contentdiv">
                <iframe width="660" height="348" src=<?php echo str_replace("embed","v",$slideShow_row[0]); ?> frameborder="0" allowfullscreen></iframe>
				
            </div>
			<?php } ?>
        </div>
        <div id="paginate-slider2">
        	<div class="usual">
                <ul class="idTabs">
                  <li><a href="#idTab1" class="selected"><span>New</span></a></li>
                  <li><a href="#idTab2"><span>Being Watched</span></a></li>
                  <li><a href="#idTab3"><span>Top Rated</span></a></li>
                </ul>
                <div id="idTab1" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<?php 
							$myquery = 'select Movies_subcategory from subcategories';$temp = "";
							$subCategories = mysql_query($myquery);
							while ($subCategories_row = mysql_fetch_array($subCategories)){ 
								if($subCategories_row[0] != null){$temp = $temp . "select id,name from ".$subCategories_row[0]."_list where Featured=1 UNION ";}}
							
							$query = substr($temp, 0, -7);
							$slideShow = mysql_query($query);
							while($slideShow_row = mysql_fetch_array($slideShow)){ ?>
							<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '". $slideShow_row[1] . "';"));
							if($id[0] == ""){$id[0] = 381;}?>
						
								<a href="#" class="toc">
									<span class="thumb"><img src="http://localhost/pixonplay/GetImageFromDB.php?id=<?php echo $id[0]; ?>" alt="" /></span>
									<span class="desc">
										<span class="title"><?php echo $slideShow_row[1]; ?></span>
										<!-- <span class="time"></span>
										<span class="channel"></span> -->
									</span>
								</a>
						<?php } ?>
                        
                    </div>
                </div>
				<div id="idTab2" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<?php $slideShow = mysql_query('select id,name from trailers_carousel;');
							while($slideShow_row = mysql_fetch_array($slideShow)){ ?>
							<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '". $slideShow_row[1] . "';"));
							if($id[0] == ""){$id[0] = 381;}?>
						
								<a href="#" class="toc">
									<span class="thumb"><img src="http://localhost/pixonplay/GetImageFromDB.php?id=<?php echo $id[0]; ?>" alt="" /></span>
									<span class="desc">
										<span class="title"><?php echo $slideShow_row[1]; ?></span>
										<!-- <span class="time"></span>
										<span class="channel"></span> -->
									</span>
								</a>
						<?php ;} ?>
                        
                    </div>
                </div>
                <div id="idTab3" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<?php $slideShow = mysql_query('select id,name from movies_carousel;');
							while($slideShow_row = mysql_fetch_array($slideShow)){ ?>
							<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '". $slideShow_row[1] . "';"));
							if($id[0] == ""){$id[0] = 381;}?>
						
								<a href="#" class="toc">
									<span class="thumb"><img src="http://localhost/pixonplay/GetImageFromDB.php?id=<?php echo $id[0]; ?>" alt="" /></span>
									<span class="desc">
										<span class="title"><?php echo $slideShow_row[1]; ?></span>
										<!-- <span class="time"></span>
										<span class="channel"></span>-->
									</span>
								</a>
						<?php ;} ?>
                        
                    </div>
                </div>
          	</div>
			<div class="clear"></div>
        </div>
        <script type="text/javascript" src="http://localhost/a/js/banner.js"></script>
    </div>
    <div class="clear"></div>