            <div class="recent_videos">
<?php
					$categories = mysql_query('select category from categories');$i=0;
					while($categories_row = mysql_fetch_array($categories)){ ?>
				<div class="recent_head">
                	<h3><?php echo $categories_row[0] ?></h3>
                    <a href="#" class="viewall">(View All)</a>
                    <div class="recent_buttons">
                    	<ul>
                        	<li>
                            	<a href="#" class="previousbtn">&nbsp;</a>
                                <a href="#" class="nextbtn">&nbsp;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <ul class="display thumb_view">
                	<?php
							$myquery = 'select '.$categories_row[0].'_subcategory from subcategories';$temp = "";
							$subCategories = mysql_query($myquery);
							if($subCategories != null){
							while ($subCategories_row = mysql_fetch_array($subCategories)){ 
								if($subCategories_row[0] != null){$temp = $temp . "select id,name from ".$subCategories_row[0]."_list where carousel=1 UNION ";}}
							
							$query = substr($temp, 0, -7);
							$carousel = mysql_query($query);
							$count = 0;
							while($carousel_row = mysql_fetch_array($carousel)){ 
								if($count < 8){ ?>
					<li>
                    	<?php $id = mysql_fetch_array(mysql_query("select img_id from images where img_name= '".$carousel_row[1]. "';"));?>
						<a href="http://www.pixonplay.com/WatchNow.php?id=<?php echo $carousel_row[0] ?>&cat=<?php echo $categories_row[0]."_carousel"?>" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span>
							<img src="http://localhost/a/GetImageFromDB.php?id=<?php echo $id[0]; ?>&catname=<?php echo  strtolower($categories_row[0]);?>_carousel" width="155" height="113" alt="" /></a>
                        <div class="smallsec">
                        	<h6><a href="http://localhost/a/detail.php" class="colr"><?php echo $carousel_row[1]; ?></a></h6>
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
							<?php } $count++; }} ?>
                </ul>
			<?php $i++;} ?>
            </div>