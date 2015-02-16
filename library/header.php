	<!-- Header -->
    <div id="masthead">
    	<!-- Logo -->
        <div class="logo">
        	<a href="http://localhost/a/index.php"><img src="http://localhost/a/images/logo.png" alt="PixonPlay" title="Pix Always Play" width="225" height="55"/></a>
        </div>
		<!-- Search -->
        <div class="search">
        	<input type="text" value="Enter keyword to search" id="searchBox" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            <a href="http://localhost/a/comingsoon/" class="go">&nbsp;</a>
        </div>
		  <ul id="nav">
			<li><a href="http://localhost/a/index.php">Home</a></li>
				<?php
					$categories = mysql_query('select category from categories');$i=1;
					while($categories_row = mysql_fetch_array($categories)){ ?>
						<li><a href="http://localhost/a/maincategory.php?cat=<?php if($categories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $categories_row[0]; ?>_online"><?php echo $categories_row[0] ?></a>
							<ul>
								<?php 
								$subCategories = mysql_query('select * from subcategories');
								while ($subCategories_row = mysql_fetch_array($subCategories)){ 
									if($subCategories_row[$i] != null){?>
								
								<li><a href="http://localhost/a/ViewAll.php?category=<?php echo $categories_row[0]; ?>&subcategory=<?php if($categories_row[0] == "Technology"){echo "Learn_";}else{echo "Watch_";}?><?php echo $subCategories_row[$i]; ?>_online"><?php echo str_replace("_"," ",$subCategories_row[$i]); ?></a>
									<?php 
										if($categories_row[0] == "TVSerials"){
										echo "<ul>";
											$query = 'Select distinct channel from '.$subCategories_row[$i].'_list;';
											$superSubCategories = mysql_query($query);
											while ($superSubCategories_row = mysql_fetch_array($superSubCategories)){
											$link = 'http://localhost/a/ViewAll.php?category='.$categories_row[0].'&subcategory=Watch_'.$subCategories_row[$i].'_online&channel='.$superSubCategories_row[0];
												echo "<li><a href='$link'>".$superSubCategories_row[0]."</a></li>";
											}
										echo "</ul>";
										}
									?>
						<?php 
										if($categories_row[0] == "TVShows"){
										echo "<ul>";
											$query = 'Select distinct channel from '.$subCategories_row[$i].'_list;';
											$superSubCategories = mysql_query($query);
											while ($superSubCategories_row = mysql_fetch_array($superSubCategories)){
											$link = 'http://localhost/a/ViewAll.php?category='.$categories_row[0].'&subcategory=Watch_'.$subCategories_row[$i].'_online&channel='.$superSubCategories_row[0];
												echo "<li><a href='$link'>".$superSubCategories_row[0]."</a></li>";
											}
										echo "</ul>";
										}
									?>
								</li>	
								<?php }} ?>								
							</ul>
						</li>
				<?php $i++;} ?>
		</ul>	
		
        <!-- Navigation -->
        <div class="navigation">
      	
			
			
        </div>
        
    </div>
    <div class="clear"></div>
	<div class="clear"></div>
	<div id="empty"></div>
