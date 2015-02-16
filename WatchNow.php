<!DOCTYPE  html>
<?php
define('ABSPATH',dirname(__FILE__).'/library/');
include(ABSPATH.'connect.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>PixonPlay - </title>
<?php include(ABSPATH.'cssdata.html');?>
<?php include(ABSPATH.'jsdata.html');?>
</head>
<body class="bg2">
<span class="smalllines">&nbsp;</span>
<!-- Wrapper -->
<div id="wrapper_sec">
	<!-- Header -->
       <?php include(ABSPATH.'header.php');
			$id = $_GET['id'];
			$table = substr($_GET['subcategory'],6,-7)."_list";
			$videoName = mysql_fetch_array(mysql_query("select name from ".$table." where id='".$id."';"));
			$videoURL = mysql_fetch_array(mysql_query("select link from ".$table." where id='".$id."';"));
			
	   ?>
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
            <!-- Video Heading -->
            <div class="allvideos_heading">
            	<h1><?php echo $videoName[0]; ?></h1>
                <p class="txt"></p>
            </div>
            <div class="clear"></div>
            <!-- Video Detail -->
            <div class="videodetail">
            	<!-- Short Detail -->
                <div class="shortdetail">
                	<div class="videoby">
                    	<?php if(isset($_GET['channel'])){$link = 'http://localhost/a/ViewAll.php?category='.$_GET['category'].'&subcategory='.$_GET['subcategory'].'&channel='.$_GET['channel'];$by = $_GET['channel'];}
						else{$link = 'http://localhost/a/ViewAll.php?category='.$_GET['category'].'&subcategory='.$_GET['subcategory'];$by=$_GET['subcategory'];}?>
						<a href="<?php echo $link; ?>" class="videoavatar"><img src="http://localhost/a/images/videoby.gif" alt="" /></a>
                        <p>From</p>
                        <a href="<?php echo $link; ?>" class="bold name"><?php echo $by; ?></a>
						
                    </div>
                    <div class="videodate">January 11, 2011 8:17 AM PST</div>
                    <div class="subscribe"><a href="#">Subscribe</a></div>
                    <div class="videoviews"><p>1,387,378 views</p></div>
                </div>
                <div class="clear"></div>
                <!-- Big Video -->
                <div class="videobig">
                	<iframe width="675" height="438" src=<?php echo $videoURL[0]."?rel=0;&autoplay=1"; ?> frameborder="0" allowfullscreen></iframe>
				</div>
                <div class="clear"></div>
                <!-- Video tabs -->
                <div class="videotabs">
                	<div class="tabbuttons">
                        <ul class="likedilike">
                            <li><a href="#" class="like">Like</a></li>
                            <li><a href="#" class="dislike">Dislike</a></li>
                        </ul>
                        <ul class="tablinksselected">
                            <li><a href="#"><span class="sharebtn">Share</span></a></li>
                        </ul>
                        <ul class="tablinks">
                            <li><a href="#"><span class="embed">Embed</span></a></li>
                        </ul>
                        <ul class="tablinks">
                            <li><a href="#"><span class="addto">Add to</span><span class="downarrow">&nbsp;</span></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="tabcont">
                    	<input type="text" value="htttp://www.Vidsea.com/watch?v=lpQTeYG6cGM" name="s" class="chain" />
                        <input type="text" value="200" name="s" class="chrome" />
                        <input type="text" value="1001" name="s" class="facebook1" />
                        <input type="text" value="2000" name="s" class="twitter1" />
                        <div class="clear"></div>
                        <div class="shareicons">
                            <a href="#" class="icons"><img src="http://localhost/a/images/icon1.gif" alt="" /></a>
                            <a href="#" class="icons"><img src="http://localhost/a/images/icon2.gif" alt="" /></a>
                            <a href="#" class="icons"><img src="http://localhost/a/images/icon3.gif" alt="" /></a>
                            <a href="#" class="icons"><img src="http://localhost/a/images/icon4.gif" alt="" /></a>
                            <a href="#" class="icons"><img src="http://localhost/a/images/icon5.gif" alt="" /></a>
                            <a href="#" class="icons"><img src="http://localhost/a/images/icon6.gif" alt="" /></a>
                        </div>
                    </div>
                </div>
                <!-- Comments -->
                <div class="comments">
                	<h2 class="heading">477 comments</h2>
                    <textarea name="" cols="" rows=""></textarea>
                    <p class="characters">500 characters remaining</p>
                    <ul class="textareasubmission">
                    	<li class="txt"><a href="#">Cancel</a> or</li>
                        <li><a href="#" class="post">Post</a></li>
                        <li class="txt"><a href="#" class="attachment">Attach a video </a></li>
                    </ul>
                    <!-- <ul class="commentslist">
                    	<li class="level1">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments1.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                        <li class="level1">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments2.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                        <li class="level1">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments3.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                        <li class="level1">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments4.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                        <li class="level2">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments5.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                        <li class="level2">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments6.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                        <li class="level1">
                        	<div class="thumb">
                            	<a href="#"><img src="http://localhost/a/images/comments7.gif" alt="" /></a>
                            </div>
                            <div class="desc">
                            	<div class="commentlinks">
                                    <a href="#" class="reply">Reply</a>
                                    <a href="#" class="like">Like</a>
                                	<a href="#" class="dislike">Dislike</a>
                                </div>
                            	<h5><a href="#" class="colr">By MySebbb:</a></h5>
                                <p class="time">7 months ago</p>
                                <div class="clear"></div>
                                <p class="txt">
                                	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien.
                                </p>
                            </div>
                        </li>
                    </ul> -->
                </div>
                <div class="clear"></div>
                <!-- Pagination -->
                <div class="paginations">
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
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col2">
        	<!-- Tabs -->
			<?php include(ABSPATH.'tabs.php');?>
            <!-- Top Searches
            <div class="topsearches">
            	<h5>Top Searches</h5>
                <ul>
                	<li><a href="#" class="colr">Anne Roumanoff</a></li>
                    <li><a href="#" class="colr">Caméra caché</a></li>
                    <li><a href="#" class="colr">Cauet</a></li>
                    <li><a href="#" class="colr">Eric et Ramzy</a></li>
                    <li><a href="#" class="colr">Florence</a></li>
                    <li><a href="#" class="colr">Foresti</a></li>
                    <li><a href="#" class="colr">Franck Dubosc</a></li>
                    <li><a href="#" class="colr">Francois</a></li>
                    <li><a href="#" class="colr">Damiens</a></li>
                    <li><a href="#" class="colr">Anthony</a></li>
                    <li><a href="#" class="colr">Kavanagh</a></li>
                    <li><a href="#" class="colr">Jamel</a></li>
                    <li><a href="#" class="colr">Debbouze</a></li>
                    <li><a href="#" class="colr">Laurent</a></li>
                    <li><a href="#" class="colr">Ruquier</a></li>
                    <li><a href="#" class="colr">Les Nuls</a></li>
                    <li><a href="#" class="colr">Michaël Youn</a></li>
                    <li><a href="#" class="colr">Omar et Fred</a></li>
                    <li><a href="#" class="colr">Patrick Timsit</a></li>
                    <li><a href="#" class="colr">Rémi Gaillard</a></li>
                    <li><a href="#" class="colr">Gad ElMaleh</a></li>
                    <li><a href="#" class="colr">Stéphane Guillon</a></li>
                    <li><a href="#" class="colr">TF1 Replay</a></li>
                    <li><a href="#" class="colr">chatroulette</a></li>
                </ul>
                <a href="#" class="buttonone"><span>Most Viewed Videos</span></a>
                <a href="#" class="buttonone"><span>Recent Videos</span></a>
            </div> -->
        	<!-- Advertisment -->
        	<div class="adv">
            	<a href="#"><img src="http://localhost/a/images/adv1.gif" alt="" /></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- Footer -->
<?php include(ABSPATH.'footer.php');?>
</body>
</html>
