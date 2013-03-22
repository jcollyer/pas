<?php
$pageTitle = "Home";
  include "header.php"; 
  include "mainNav.php"; 
  include "con.php";

	$get = mysql_query("SELECT donation FROM twodollar WHERE id = 1");
	if (!$get) {
	    echo ('Can\'t use pas database : ' . mysql_error());
	}

	$row = mysql_fetch_row($get);

  $value = $row[0]; 

?>

	<section>
		<div class="blackBox">

			<h5 class="whiteText">Our Mission:</h5>
			<p class="whiteText">To plant seeds of hope, change and opportunity in schools, individuals and communities in Cameroon and around the world through <b>education</b>, <b>sports</b>, and <b>clean water</b>.</p>
		</div>
		<div id="fund">
			<div id="fund_visible">
				<div id="action_button_container">
					<a href="" class="button" id="action_button">Click!</a>
				</div>
				<div id="action_text">
					<h5 id="home_action_title">
						$2 from 2000!
						<span id="home_action_slogan" style="display:none;">Clean Water for Sangmelima!</span>
					</h5>
					
				</div>
			</div>
			<div id="donate_anim">
				<div id="thefaucet">
						<div id="faucet"><div id="faucet_handle"></div></div>
						<div id="water_stream"><div id="stream">stream</div></div>
						<div id="donate_button"  style="display:none;" name="donatebtn"><h7><a href="" class="button" id="water_donate_button">Donate $2</a></h7></div>
				</div>
				<div id="bucket_container">
					<div id="bucket">
						<div class="pg pg1"></div>
						<div class="pg pg2"></div>
						<div class="pg pg3"></div>
						<div class="pg pg4"></div>
						<div class="pg pg5"></div>
						<div class="pg board1"></div>
						<div class="pg board2"></div>
						<div class="pg board3"></div>
						<div id="water">
							<div id="wave1" style="display:none">wave1</div>
							<div id="wave2" style="display:none">wave1</div>
						</div>
					</div>
					<div id="measure">
						<div id="remainder">remainder</div>
						
							$<div id="amtRaised" class="donation"><div id="flash_thing">&nbsp;</div><? echo $value ?></div>
					</div>
				</div>
			</div>
			<div id="fund_vid">
				<br />
				<p class="giveText">
					Text <b>GIVE13240</b> To <b>80088</b> to donate $10 to Water for Sangmelima. Message and data rates may apply. Only works for US mobile phones.
				</p>
				<div onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
					<img src="img/water_vid_cover_art.jpg" style="cursor:pointer" />
				</div>
				<div id="thevideo" style="display:none">
					<iframe class="iframeClass" width="420" height="315" src="http://www.youtube.com/embed/RbCtZTye0T8" frameborder="0" allowfullscreen></iframe>
				</div>
				<h5><a id="ytsrc" href="http://www.facebook.com/events/115285105310064/permalink/128282890676952/">$2 From 2000 People - Water for Sangmelima! #2$from2000</a></h5>
			</div>
			<script id="globalGiving" type="text/javascript" src="http://www.globalgiving.org/javascript/widget/widget.js">  { "projectids" : "13240", "ggtid" : "130B2E7424DC3C68F394943491B6AEE0"  }  </script>
			<div id="thankyou" style="display:none" >		
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="width:120px; height:50px; margin-top:30px;" >
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="5FLUW4NMKPLYL">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<h3>Thank You!</h3>
			</div>
		</div>
			<div id="colomn_container">
				<div id="homePageMarker"></div>
				<br />

				<div id="colomn_left">
						<div class="teesdiv">		
							<br />
							<br />
							<img class="picFrame" src="img/tees.jpg">
							<p>Order 3 or more T-shirts and get a <b>free handmade hat from Cameroon</b>. Available while supply last. </p>	
							<br />
							<h5><a href="store.php" class="button">Plant a Seed T's</a></h5>
							<br />
						</div> 
						<p class="brightText3">If you are in <b>Cameroon</b> and will like to donate, please contact us or buy books and drop them off at Madam Pauline's home - Sabga Square. Babanki Tungo. Please bring material donations only such as books, pens, pencils and other school related needs.</p>
							<div class="hr-style">&nbsp;</div>
							<h4>Kid of the Month</h4>
							<h5>Ngong Jespa</h5>
								<br />
						
							<img class="picFrame rightFloat" src="img/ngong_jespa.jpg" />
							<p>Ngong Jespa is 12 years old and a son of a single mother, Lustina, who is a farmer. At the age of about 10 months old, his parents left him with his brothers and sister who also were children to go to the farm. There was a big fire in the kitchen where the baby was sleeping set up to dry newly harvested corn (Imagine a flaming hot camp fire except inside a small building). While the parents were at the farm, the younger ones went off to play leaving baby Jespa alone in the kitchen with the blazing fire and heat.  When they remembered to check on him, he was in the flames. They tried to drag him out of the fire but not being old or strong enough, they could not pull him out. They ran out, cried out to the neighbors for help. When the mother and father finally came home and rushed him to the nearest health Center which was miles away, he had sustained third degree burns. Unfortunately, Health Centers are not equipped to deal with such severe burns and his parents did not have money to take him to a better hospital for further treatment. The father died soon after, bringing any hope of helping Jespa to an apparent end. He has bravely attended school for the past six year and is in class 6 at C.B.C primary school Chucku. It will be wonderful to not only help him educationally but medically. If you know any doctors/organizations that might be interested in this case, please forward this to them or <a href="contact.php">contact us</a> through our website </p>
						
				</div>
				<div id="colomn_right" class="clearfix">
					<h4 style="margin-left:7%">Community</h4>
					<div class="article_home clearfix">
						<a class="noLine" href="community.php#communityLink10">	
						<img src="img/cameroon-kids.jpg" class="picFrame leftFloat" />
						<h3>March Newsletter</h3>
						<p class="date">Thursday March 7, 2013</p>
						<p class="dark">Kids in Cameroon update, Clean Water for Sangmelima, Back To School Projects & more!</p>
						</a>
					</div>
					<div class="article_home clearfix">
						<a class="noLine" href="community.php#communityLink9">	
						<img src="img/dec-newsletter-pic2.jpg" class="picFrame leftFloat" />
						<h3>December Newsletter</h3>
						<p class="date">Saturday December 1, 2012</p>
						<p class="dark">SAFARI ANYONE? It's time to go and see the impact we've been making.</p>
						</a>
					</div>
					<div class="article_home clearfix">
						<a class="noLine" href="community.php#communityLink7">	
						<img src="img/phungeh_favour.jpg" class="picFrame leftFloat" />
						<h3>September Newsletter</h3>
						<p class="date">Monday September 3, 2012</p>
						<p class="dark">Plant A Seed has Kid of the Month winner! & 200 kids and parents are participating at the Youth Activities and Book Drive for summer 2012 & more!</p>
						</a>
					</div>
					<div class="article_home clearfix">
						<a class="noLine" href="community.php#communityLink7">	
						<img src="img/sponsorChild4.jpg" class="picFrame leftFloat" />
						<h3>July Newsletter</h3>
						<p class="date">Friday July 13, 2012</p>
						<p class="dark">Plant A Seed is officially a 501 (c) (3), The Benefit Comedy Show is July 18th, 2012, Plant A Seed Youth Activities and Book Drive and more!</p>
						</a>
					</div>
					<div class="article_home">
						<a class="noLine" href="community.php#communityLink1">	
						<img src="img/home-pics5.jpg" class="picFrame leftFloat" />
						<h3>June Newsletter</h3>
						<p class="date">Friday June 1, 2012</p>
						<p class="dark">Hello friends and family,  What do you do when you can’t sleep at 3 in the morning? Right now please walk with me…</p>
						<br />
						</a>
					</div>
	<!-- 				<div class="article_home">
						<a class="noLine" href="https://www.createspace.com/3987579/">	
						<img src="img/book_cover.jpg" class="picFrame leftFloat" />
						<h3>New Book By Ruth</h3>
						
						<p class="dark">This is a story about love, about relationships, about family and about commitment to that family, harnessed from the founts of memory; a memory fuelled essentially by letters. Here, epistles become avenues to reveal characters, their relationships with each other, setting, tone and mood. The letters equally serve as vehicles for conveying important life lessons from a biblical perspective.</p>
						</a>
					</div> -->
				<!-- <div class="article_home">
						<a class="noLine" href="community.php#communityLink2">	
						<img src="img/home-pics1.jpg" class="picFrame leftFloat" />
						<h3>YBFC Soccer Team Febuary Update</h3>
						<p class="date">Friday, March 2, 2012</p>
						<p class="dark">As was promised last month, a monthly report on the status of the team will be provided every month.  February has been a pretty good month for YBFC and we hope that March will carry the same...</p>
						</a>
					</div>		
					<div class="article_home">
						<a class="noLine" href="community.php#communityLink3">	
						<img src="img/home-pics2.jpg" class="picFrame leftFloat" />
						<h3>YBFC Soccer Team January Update</h3>
						<h5>Friday, March 2, 2012</h5>
						<p class="dark">Happy New Year (2012) to the Plant A Seed family. The New Year comes with good things as well as challenges. As for the challenges, our soccer team has seen a slight decline in performance as a result...</p>
						</a>
					</div>	
					<div class="article_home">
						<a class="noLine" href="community.php#communityLink4">	
						<img src="img/home-pics3.jpg" class="picFrame leftFloat" />
						<h3>END OF YEAR NEWSLETTER</h3>
						<h5>Tuesday, December 13, 2011</h5>
						<p class="dark">Happy Holidays Friends and Family! As I watch CNN Heroes highlights, I think of every one of you. You are my heroes! I can’t imagine it has been a year since Plant A Seed came into existence thanks to...</p>
						</a>
					</div>	-->
					  <script id="gsWidgetScript9195111h1" type="text/javascript">    (function() { function a() { var a = document.createElement("script"); a.type = "text/javascript"; a.async = true; a.src = "http://widgets.guidestar.org/gxseal2?o=9195111&l=h1&async=1"; var b = document.getElementsByTagName("script")[0]; b.parentNode.insertBefore(a, b) } if (window.attachEvent) window.attachEvent("onload", a); else window.addEventListener("load", a, false) })()</script>
				
					  <br />
					  <br />
					  <p></p>
				</div>	
			<br />
			<article>
				<h5>"We are seeking volunteer staff and board members. Contact us for more information."</h5>	
				<br />
			</article>			
		</div>
	</section>
<?php include "footer.php"?>
