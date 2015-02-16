<div class="featured_playlist">
            	<h3 class="heading">Favorite Channels</h3>
                <ul>
                	<?php 
						if($page == "index"){
							$favChannel = mysql_query("
							(select channel from channels where Featured = 1 and lang = 'Telugu' limit 2) union 
							(select channel from channels where Featured = 1 and lang = 'Tamil' limit 2) union 
							(select channel from channels where Featured = 1 and lang = 'Hindi' limit 2) union
							(select channel from newschannels where Featured = 1 and lang = 'Telugu' limit 2) union 
							(select channel from newschannels where Featured = 1 and lang = 'Tamil' limit 2) union 
							(select channel from newschannels where Featured = 1 and lang = 'Hindi' limit 2) union
							(select channel from devotionalchannels where Featured = 1 and lang = 'Telugu' limit 2) union 
							(select channel from devotionalchannels where Featured = 1 and lang = 'Tamil' limit 2) union 
							(select channel from devotionalchannels where Featured = 1 and lang = 'Hindi' limit 1);");
						}
						if($page == "Movies"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "Trailers"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "TVSerials"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "TVShows"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "ShortFilms"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "Comedy"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "Technology"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "KIDS"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "Devotional"){
							$favChannel = mysql_query("(select channel from devotionalchannels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from devotionalchannels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from devotionalchannels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "Cookery"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "Quiz"){
							$favChannel = mysql_query("(select channel from channels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from channels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from channels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						if($page == "NEWS"){
							$favChannel = mysql_query("(select channel from newschannels where Featured = 1 and lang = 'Telugu' limit 4) union (select channel from newschannels where Featured = 1 and lang = 'Tamil' limit 4) union (select channel from newschannels where Featured = 1 and lang = 'Hindi' limit 4);");
						}
						while($favChannel_rows = mysql_fetch_array($favChannel)){
						?>
					<li>
                    	<a href="http://localhost/a/comingsoon/" class="channellogo"><img src="http://localhost/a/images/<?php echo $favChannel_rows[0];?>.jpg" alt="<?php echo $favChannel_rows[0];?>" width="50" height="50" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="http://localhost/a/comingsoon/" class="colr"><?php echo $favChannel_rows[0];?></a>
                        </div>
                    </li>
						<?php }?>
                </ul>
            </div>