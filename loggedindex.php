<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Yakimix</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="files/photos/yakilogo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="files/style.css" rel="stylesheet">
		<script>
		function Redirect() {
               window.location="index.php";
        }
        function Redirect2() {
               window.location="mainpage.php";
        }
	</script>
	</head>
	<body>
		<div id="header">
		<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 14px; margin-right: 15px;" class="userbutt" onclick="Redirect()">Log out</button>
		<form action="loggedindex.php" method="get" style="display: inline;">
				<table border="0" style="display: inline; float: right; margin-top: 10px;">
					<tr style="display: inline;">
					<td align="left"><input class="inputfield" type="text" readonly="yes" name="username" value="<?php
					if(!empty($_POST['username'])) {
						$username = $_POST['username'];
						if (strpos($username, '_') !== false || strpos($username, '.') !== false) {
							$username = str_replace('_', ' ', $username);
							$username = str_replace('.', ' ', $username);
							if (strpos($username, '@') !== false) {
								$username = substr($username, 0, strpos($username, "@"));
							}
						}
						echo $username;
					} else {
						echo "Demo User";
					}
					?>"
				size="20" maxlength="50" style="background-size: 30px;text-transform: capitalize;background-repeat: no-repeat;background-color: transparent;color: #630619;text-align: right;font-size: 17px;"></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<div id="headwrapper">
				<div class="titlewrapper">
					<img id="logo" src="files\photos\yakimixlogo.png"/>
					
				</div>
			<div class="descriptionwrapper">
				<p class="description">
					Metro Manila's leading eat-all-you-can restaurant featuring Asian cuisine.
				</p>
			</div>
			</div>
			<nav id="headnav">
				<a id="current">Home Page</a>
				<a href="sushi.php">Sushi</a>
				<a href="sidedishes.php">Side Dishes</a>
				<a href="ramen.php">Ramen</a>
				<a href="bibimbap.php">Bibimbap</a>
				<a href="contact.php">Contact</a>
				<a href="about.php">About</a>
			</nav>
		</div>
		<div class="fullbackground" id="first">
		</div>
		<div class="plainbackground" id="sushichoices">
			<h1>SUSHI CHOICES</h1>
			<ul>
				<li><img id="logo" src="files\photos\platter01-s.png"/>
					<h2>Yamite Set</h2>
					<button>Buy for ₱2690</button>
					<p>The pearl of our orient. Contains everything you love about Japanese, including the freshest seafood and quality tuna we can find.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\platter03-s.png"/>
					<h2>Tokyo Set</h2>
					<button>Buy for ₱2300</button>
					<p>A full set of the most famous sushi around Japan. Eating this alone makes you feel as if you were in Tokyo.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\platter-shanghai-s.png"/>
					<h2>Mina Set</h2>
					<button>Buy for ₱1506</button>
					<p>Eating for two? Why not purchase this set, it contains even amounts of our best sushi, perfect for young couples.</p>
				</li>
				<li><img id="logo" src="files\photos\platter09-s.png"/>
					<h2>New Dragon Set</h2>
					<button>Buy for ₱2900</button>
					<p>For those who are celebrating something special in their lives. This set offers spicy and exotic flavors with wasabi on the side.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\platter10-s.png"/>
					<h2>Shozen's Set</h2>
					<button>Buy for ₱2850</button>
					<p>Harking back to the taste of sushi around the time of shoguns, this set only offers sushi recepies from the Jhoto Era.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\platter02-s.png"/>
					<h2>Spring Set</h2>
					<button>Buy for ₱2740</button>
					<p>Japanese spring never tasted so good until this set arrived. Filled-to-the-brim with freshly-cut fruits, it's spring once again.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\platter07-s.png"/>
					<h2>White Jade Set</h2>
					<button>Buy for ₱2940</button>
					<p>For those looking for a really authentic and quality Japanese sushi experience, try this one out. It never fails to impress.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\platter05-s.png"/>
					<h2>Shōjo Jidai Set</h2>
					<button>Buy for ₱3500</button>
					<p>Way to go! It's time for a new generation, a light leading us into the new world. This set features bold and fresh tastes.</p>
				</li>
			</ul>
		</div>
		<div class="fullbackground" id="vertical1">
			<h1>SIDE DISHES</h1>
			<div class="verticalmenu" id="juan">
				<div class="vertcontain">
					<ul>
						<li>
							<img id="logo" src="files\photos\potato-salad1-218x155.png"/>
							<h2>Potato Salad</h2>
							<button>Add for ₱50</button>
						</li>
						<li>
							<img id="logo" src="files\photos\Spicy-tuna-don_JH.png"/>
							<h2>Spicy Tuna Don</h2>
							<button>Add for ₱70</button>
						</li>
						<li>
							<img id="logo" src="files\photos\chasiu-rice2-218x155.png"/>
							<h2>Mini Chaisu Don</h2>
							<button>Add for ₱240</button>
						</li>
						<li>
							<img id="logo" src="files\photos\Mentai-Dashi-Maki.png"/>
							<h2>Mantai Dashi Maki</h2>
							<button>Add for ₱110</button>
						</li>
						<li>
							<img id="logo" src="files\photos\Dashi-Maki-Tamago-218x155.png"/>
							<h2>Dashi Maki Tamago</h2>
							<button>Add for ₱900</button>
						</li>
						<li>
							<img id="logo" src="files\photos\gyoza-218x155.png"/>
							<h2>Gyoza</h2>
							<button>Add for ₱160</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="plainbackground" id="ramen">
			<h1>RAMEN BOWLS</h1>
			<ul>
				<li><img id="logo" src="files\photos\Bushi-Tonkotsu-Ramen-218x155.png"/>
					<h2>Bushi Ramen</h2>
					<button>Add for ₱190</button>
					<p>Our best meal. Premium taste for less. Medium-rare beef shoulders shopped thinly and coated with garlic, salt, and seasonings to deliver an exquisite delight to your senses.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Garlic-Ramen_small1-218x155.png"/>
					<h2>Garlic Ramen</h2>
					<button>Add for ₱350</button>
					<p>2 full eggs compliments the garlic-coated pork belly in this dish. With meat cooked so close to perfection, we can gurantee that this bowl will make you craving for more.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Tonkotsu-Ramen1-218x155.png"/>
					<h2>Tonkotsu Ramen</h2>
					<button>Add for ₱155</button>
					<p>Not too much meat? Watching your health and diet? On the more green side? We've got you covered. Our Tonkotsu Ramen bowl only contains freshly-cut vegetables.</p>
				</li>
			</ul>
			<ul>
				<li><img id="logo" src="files\photos\Uma-Uma-Ramen1-218x155.png"/>
					<h2>Shin Ramyun Ramen</h2>
					<button>Add for ₱190</button>
					<p>Filled with our best Shin Ramyun, this ramen add-on is for those who are getting into Japanese food and want to taste the best authentic experience any restaurant can offer.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Spicy-Chasiu-Ramen1-218x155.png"/>
					<h2>Blazit Ramen</h2>
					<button>Add for ₱420</button>
					<p>This bowl is for those looking to add a lot of heat into their lives. The Blazit Ramen bowl is not for the faint of heart. Rumors say, no one has entirely finished it.</p>
				</li>
			</ul>
		</div>
		<div class="fullbackground" id="promo">
		</div>
		<div class="plainbackground" id="bibimbap">
			<h1>BIBIMBAP BOWLS</h1>
			<ul>
				<li><img id="logo" src="files\photos\bibimbowl-creamy-curry-beef.png"/>
					<h2>Cream Curry Beef</h2>
					<button>Add for ₱190</button>
					<p>Ever tasted original Korean bibimbap with a sweet creamy texture and a rich taste of beef? Now you can! Try our new cream curry beef.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\bibimbowl-creamy-curry-chicken.png"/>
					<h2>Cream Curry Chicken</h2>
					<button>Add for ₱350</button>
					<p>2 full eggs compliments the garlic-coated pork belly in this dish. With meat cooked so close to perfection, we can guarantee that this bowl will make you craving for more.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Spicy-Bibimbowl-chicken-top.png"/>
					<h2>Spicy Chicken</h2>
					<button>Add for ₱155</button>
					<p>Are you looking for thrill in your life? Want to live outside the lines? Ready for some action? Unleash the daredevil in you and try our spicy bibimbap chicken.</p>
				</li>
				<li><img id="logo" src="files\photos\Spicy-Bibimbowl-beef-top.png"/>
					<h2>Spicy Beef</h2>
					<button>Add for ₱190</button>
					<p>Beef got you down? Taste too bland? Want some spice? Are you waiting for that burst of flavor? We're sure you can't handle this. One bite alone will leave you running.</p>
				</li>
			</ul>
			<ul>
				<li>
					<img id="logo" src="files\photos\Spicy-Bibimbowl-beef-boxed-meal.png"/>
					<h2>Spicy Beef Set</h2>
					<button>Add for ₱225</button>
					<p>Want some spicy beef with a little more.. flavor? This set offers a wide range of senses that we're sure to definitely leave you craving for more.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Seafood-Bibimbowl-Meal.png"/>
					<h2>Seafood Set</h2>
					<button>Add for ₱120</button>
					<p>Fresh from the sea-that's what this bowl is. Featuring the freshest seafood you can ever find on the deep blue sea, with tasteful seaweed to bring you back to the ocean.</p>
				</li>
				<li>
					<img id="logo" src="files\photos\Taco-Bibimbowl-Meal.png"/>
					<h2>Taco Set</h2>
					<button>Add for ₱310</button>
					<p>Want the chili con carne found in Mexican food? Missing the spice of Jalapeño peppers? We've got you covered. We've blended the perfect mix of Korean and Mexican dishes.</p>
				</li>
			</ul>
		</div>
		<div class="plainbackground" id="footer">
			<p>&#169; 2017 Dartegnian Velarde</p>
		</div>
	</body>
</html>