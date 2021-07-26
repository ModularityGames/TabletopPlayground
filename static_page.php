<?php /* Template Name: HomePage */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tabletop Playground - The Modern Digital Boardgame Creator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="tabletop, boardgame, card game, board game, multiplayer, sandbox, physics, moddable, strategy, chess">
	<meta name="description" content="Play any kind of tabletop game you want in Tabletop Playground! Make up your own rules, create games and share them with other players around the world.">
	<meta name="theme-color" content="#da532c">
	<meta property="og:title" content="Tabletop Playground - The Modern Digital Boardgame Creator" />
	<meta property="og:description" content="Play any kind of tabletop game you want in Tabletop Playground! Make up your own rules, create games and share them with other players around the world." />
	<meta property="og:type" content="game" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="https://tabletop-playground.com/wp-content/uploads/splash.png" />
	<meta property="twitter:card" content="summary_large_image" />
	<meta property="twitter:site" content="@TabletopPG" />
	<meta property="twitter:title" content="Tabletop Playground" />
	<meta property="twitter:description" content="Play any kind of tabletop game you want in Tabletop Playground! Make up your own rules, create games and share them with other players around the world." />
	<meta property="twitter:url" content="" />
	<meta property="twitter:image" content="https://tabletop-playground.com/wp-content/uploads/splash.png" />
	<link rel="icon" href="https://tabletop-playground.com/wp-content/uploads/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
	<style>
	body {
		background: #232426;
	}

	iframe {
		max-width: 100%;
	}

	a {
		color: #209cee;
	}

	.hero {
		background-color: transparent !important;
	}

	.modal img {
		cursor: pointer;
	}

	.modal .modal-image,
	.modal iframe {
		max-height: calc(100vh - 40px);
    	max-width: calc(100vw - 40px);
    	overflow: auto;
	}

	.modal .modal-content {
		width: 100% !important;
		overflow: hidden !important;
	}

	.container .content {
		max-width: 800px;
		margin: 0 auto 3rem;
	}

	.container .content p {
		text-align: justify;
	}

	.tile-screenshot {
		background: none;
		padding: 0;
		border-radius: 0;
	}

	.tile-trailer:hover .button {
		transform: translate(-50%,-45%) scale(1.2) !important;
	}

	.plan-image {
		display: none;
	}

	@media screen and (min-width:1280px) {
		.plan-image {
			display: block;
		}

		.plan-image img {
			max-width: 220px;
			display: block;
			margin: 0.5rem auto 0;
		}
	}

	@media screen and (min-width:1470px) {
		.plan-image img {
			max-width: 280px;
			display: block;
			margin: 0.5rem auto 0;
		}
	}

	#landing {
		background-image: url(https://tabletop-playground.com/wp-content/uploads/bg.jpg);
		background-position: 0 0;
		position: relative;
		overflow: hidden;
	}

	@media screen and (max-width:768px) {
		#landing {
			background-image: url(https://tabletop-playground.com/wp-content/uploads/Wood.jpg);
			background-position: center center;
			min-height: auto;
		}

		#landing .hero-head {
			margin-bottom: 1.5rem;
		}

		#landing .hero-head .level {
			padding-top: 0 !important;
		}
	}

	#landing img {
		image-rendering: auto;
	}

	#landing .hero-head,
	#landing .hero-foot {
		position: relative;
		z-index: 4;
	}

	#landing .hero-head .level {
		padding-top: 1.5rem;
		text-transform: uppercase;
		font-size: 0.9em;
		font-weight: bold;
		text-shadow: 0 0 4px #232426, 0 0 8px #232426, 0 0 12px #232426;
	}

	@media screen and (min-width:769px) {
		#landing .hero-head .level-logo {
			 flex-grow: 0;
		}
	}

	#landing .hero-head .level a:hover {
		text-shadow: 0 0 4px #ffffff, 0 0 8px #ffffff, 0 0 12px #ffffff;
	}

	#landing .hero-head img {
		max-width: 200px;
	}

	#landing .hero-body iframe {
		 max-width: 100%;
		 margin: 0 auto;
		 background: #000;
	}

	#landing .hero-foot {
		padding: 1.5rem 0 1.3rem;
		background: -moz-linear-gradient(top, transparent 0%, #232426 100%);
		background: -webkit-linear-gradient(top, transparent 0%,#232426 100%);
		background: linear-gradient(to bottom, transparent 0%,#232426 100%);
	}

	#landing .hero-foot p {
		margin-top: 0.75rem;
	}

	#footer {
		background: transparent;
		margin-top: 6rem;
	}

	#footer a {
		color: #209cee;
	}

	#footer a:hover {
		color: #ef651e;
	}
	</style>
</head>
<body>
	<div class="modal">
		<div class="modal-background"></div>
		<div class="modal-container">
			<div class="modal-content"></div>
		</div>
		<button class="modal-close is-large" aria-label="close"></button>
	</div>

	<section id="landing" class="hero is-fullheight is-dark is-bold">
		<script>
		if($(document).width() > 768)) {
			const table = document.querySelector("#landing");
			table.addEventListener("mousemove", (e) => {
				table.style.backgroundPositionX = -e.clientX/3 + "px";
				table.style.backgroundPositionY = -e.clientY/3 + "px";
			});
		}
		</script>
		<div class="hero-head">
			<div class="container">
				<nav class="level">
					<p class="level-item has-text-centered">
						<a href="#about" class="link is-info is-size-6 is-hidden-mobile">About</a>
					</p>
					<p class="level-item has-text-centered">
						<a href="https://tabletop-playground.com/blog/" class="link is-info is-size-6 is-hidden-mobile">Blog</a>
					</p>
					<p class="level-item has-text-centered">
						<a href="https://tabletop-playground.com/knowledge-base/" class="link is-info is-size-6 is-hidden-mobile">Wiki</a>
					</p>
					<p class="level-item level-logo has-text-centered">
						<a href="#landing"><img src="https://tabletop-playground.com/wp-content/uploads/logo.png" alt="Tabletop Playground"></a>
					</p>
					<p class="level-item has-text-centered is-hidden-tablet">
						<a href="https://tabletop-playground.com/blog/" class="link is-info is-size-6">Blog</a>
					</p>
					<p class="level-item has-text-centered is-hidden-tablet">
						<a href="https://tabletop-playground.com/knowledge-base/" class="link is-info is-size-6">Wiki</a>
					</p>
					<p class="level-item has-text-centered">
						<a href="https://tabletop-playground.com/press/" class="link is-info is-size-6">Presskit</a>
					</p>
					<p class="level-item has-text-centered">
						<a href="https://tabletopplayground.mod.io" class="link is-info is-size-6" target="_blank">Games</a>
					</p>
					<p class="level-item has-text-centered">
						<a href="https://discord.gg/tabletop-playground" class="link is-info is-size-6" target="_blank">Discord</a>
					</p>
				</nav>
			</div>
		</div>
		<div class="hero-body is-hidden-mobile">
			<iframe width="800" height="450" src="https://www.youtube.com/embed/LsOVQkrQ-bI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="hero-foot has-text-centered">
			<a href="https://store.steampowered.com/app/838410/Tabletop_Playground/" class="button is-white is-rounded is-outlined" target="_blank">
				<span class="icon is-hidden-mobile">
					<svg class="fab fa-steam" aria-label="Steam" style="fill: currentColor;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-steam"></use></svg>
				</span>
				<span>Buy on Steam</span>
			</a>
			<a href="https://tabletopplayground.mod.io" class="button is-info is-rounded is-hidden-mobile">
				<span>Browse Player Made Games</span>
			</a>
		</div>
	</section>

	<section id="about" class="hero is-medium is-dark">
		<div class="hero-body" style="padding-top: 4rem;">
			<div class="container has-text-centered">
				<div class="content">
					<br><br>
					<h2 class="title is-size-4-mobile">The modern digital tabletop game for fans & creators!</h2>
					<p>Experience digital tabletop gaming like never before with realistic physics and satisfying controls. Recreate and modify classic games or build your own and share them with the world. Utilize specialized tools to play niche and complex games with up to 8 players across PC and VR. Get ready for the definitive tabletop gaming experience, with Tabletop Playground.</p>

					<picture class="ttp-demo">
						<img data-src="https://tabletop-playground.com/wp-content/uploads/tile5.jpg" alt="Tabletop Playground Card Games Multiplayer" width="600" height="200">
					</picture>

					<h2 class="title is-size-4-mobile">8 Player Multiplayer</h2>
					<p>Play solo or with up to 8 players simultaneously online, with cross platform play between PC storefronts planned. Save and resume games at anytime and discover a never-ending selection of games to be played with friends or strangers across the world.</p>

					<picture class="ttp-demo">
						<source type="video/mp4" srcset="https://tabletop-playground.com/wp-content/uploads/tile2.mp4" alt="Tabletop Playground Card Hands">
						<source type="video/webm" srcset="https://tabletop-playground.com/wp-content/uploads/tile2.webm" alt="Tabletop Playground Card Hands">
						<img data-src="https://tabletop-playground.com/wp-content/uploads/tile2.gif" alt="Tabletop Playground Card Hands" width="600" height="200">
					</picture>

					<h2 class="title is-size-4-mobile">Modern and Satisfying Controls</h2>
					<p>Featuring powerful physics and responsive, snappy controls, every move and action is as satisfying to do as it is in real life. Whether through a screen, or through virtual reality with and without motion controllers, experience more responsive and fluid gameplay than ever before.</p>

					<picture class="ttp-demo">
						<source type="video/mp4" srcset="https://tabletop-playground.com/wp-content/uploads/tile3.mp4" alt="Tabletop Playground Multistate Objects">
						<source type="video/webm" srcset="https://tabletop-playground.com/wp-content/uploads/tile3.webm" alt="Tabletop Playground Multistate Objects">
						<img data-src="https://tabletop-playground.com/wp-content/uploads/tile3.gif" alt="Tabletop Playground Multistate Objects" width="600" height="200">
					</picture>

					<h2 class="title is-size-4-mobile">Powerful In-Game Editor</h2>
					<p>Adjust the rules and enjoy tabletop favorites exactly how you want, or quickly forge your own ideas into original games. The easy to use and powerful in-game editor, coupled with JavaScript scripting to allow for complex rules and actions, means you’re only limited by your creativity.</p>

					<picture class="ttp-demo">
						<img data-src="https://tabletop-playground.com/wp-content/uploads/tile4.jpg" alt="Tabletop Playground War-Gaming Demo" width="600" height="200">
					</picture>

					<h2 class="title is-size-4-mobile">Specialized Tools For Niche Games</h2>
					<p>Built from the ground up with greater functionality for war-gaming and niche games in mind. Utilize specialized tools to create formations, measure distances/angles, access movement/dice roll history and use custom measure units. Digital war-gaming will never be the same again!</p>

					<picture class="ttp-demo">
						<img data-src="https://tabletop-playground.com/wp-content/uploads/tile1.jpg" alt="Tabletop Playground Cyberpunk Background" width="600" height="200">
					</picture>

					<h2 class="title is-size-4-mobile">Realistic Graphics and More Customization</h2>
					<p>Through the use of Unreal Engine 4, experience the ultimate immersive game sessions you can have playing tabletop games online. Personalize your game space with beautiful and cozy 3D locations and lose yourself in the detailed game pieces and realistic graphics.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="hero is-medium is-white" style="background: #fff !important;">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="content">
					<h2 class="title is-size-4-mobile">Trailer &amp; Screenshots</h2>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent">
						<a href="https://www.youtube.com/embed/LsOVQkrQ-bI" class="tile tile-trailer is-child box" style="background: url(https://tabletop-playground.com/wp-content/uploads/video2.jpg) no-repeat center center; background-size: cover; padding: 0; border-radius: 0;" target="_blank">
							<figure class="image is-16by9">
								<span class="button is-danger is-large" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
									<span class="icon is-medium" style="padding: 5px;">
										<svg class="fas fa-play" aria-label="Play" style="fill: currentColor;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-play"></use></svg>
									</span>
								</span>
							</figure>
						</a>
					</div>
					<div class="tile is-3 is-vertical is-parent">
						<a href="https://tabletop-playground.com/wp-content/uploads/screen1.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen1.jpg" alt="Tabletop Playground">
							</figure>
						</a>
						<a href="https://tabletop-playground.com/wp-content/uploads/screen10.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen10.jpg" alt="Tabletop Playground">
							</figure>
						</a>
					</div>
					<div class="tile is-3 is-vertical is-parent">
						<a href="https://tabletop-playground.com/wp-content/uploads/screen3.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen3.jpg" alt="Tabletop Playground">
							</figure>
						</a>
						<a href="https://tabletop-playground.com/wp-content/uploads/screen4.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen4.jpg" alt="Tabletop Playground">
							</figure>
						</a>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-3 is-parent">
						<a href="https://tabletop-playground.com/wp-content/uploads/screen5.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen5.jpg" alt="Tabletop Playground">
							</figure>
						</a>
					</div>
					<div class="tile is-3 is-parent">
						<a href="https://tabletop-playground.com/wp-content/uploads/screen6.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen6.jpg" alt="Tabletop Playground">
							</figure>
						</a>
					</div>
					<div class="tile is-3 is-parent">
						<a href="https://tabletop-playground.com/wp-content/uploads/screen7.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen7.jpg" alt="Tabletop Playground">
							</figure>
						</a>
					</div>
					<div class="tile is-3 is-parent">
						<a href="https://tabletop-playground.com/wp-content/uploads/screen9.jpg" class="tile tile-screenshot is-child box">
							<figure class="image is-16by9">
								<img src="https://tabletop-playground.com/wp-content/uploads/thumb-screen9.jpg" alt="Tabletop Playground">
							</figure>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="buy" class="hero is-dark">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="content">
					<h2 class="title is-size-4-mobile">Buy now</h2>
					<p class="has-text-centered">Tabletop Playground is available to purchase now on PC and VR from <a href="https://store.steampowered.com/app/838410/Tabletop_Playground/" style="text-decoration: underline;" target="_blank">Steam</a> and <a href="https://www.humblebundle.com/store/tabletop-playground" style="text-decoration: underline;" target="_blank">Humble</a> (grab the <a href="https://www.humblebundle.com/store/tabletop-playground-4-pack" style="text-decoration: underline;" target="_blank">4-pack</a>).</p>
				</div>

				<iframe src="https://store.steampowered.com/widget/838410/" frameborder="0" width="646" height="190"></iframe>
				<!--
				<br><br>
				<iframe src="https://www.humblebundle.com/widget/v2/product/tabletop-playground/fKAR6svZBh?theme=light" width="646" height="329" style="border: none;" scrolling="no" frameborder="0"></iframe>
				<a href="https://plasticitystudios.itch.io/tabletop-playground" style="text-decoration: underline;" target="_blank">itch.io</a>
				<br><br>
				<iframe frameborder="0" src="https://itch.io/embed/523840" width="646" height="190"></iframe>-->
			</div>
		</div>
	</section>

	<footer id="footer" class="footer">
		<div class="content has-text-centered has-text-white">
			<p>❤ Tabletop Gaming since Chess. Find us on <a href="https://store.steampowered.com/app/838410/Tabletop_Playground/" target="_blank">Steam</a>, <a href="https://www.humblebundle.com/store/tabletop-playground" target="_blank">Humble</a><!--, <a href="https://plasticitystudios.itch.io/tabletop-playground" target="_blank">itch.io</a>-->, <a href="https://tabletopplayground.mod.io" target="_blank">Mod.io</a>, <a href="https://www.indiedb.com/games/tabletop-playground" target="_blank">IndieDB</a>, <a href="https://discord.gg/tabletop-playground" target="_blank">Discord</a>, <a href="https://tabletopplayground.fandom.com/wiki/Tabletop_Playground_Wiki" target="_blank">Community Wiki</a>, <a href="https://www.facebook.com/TabletopPlayground" target="_blank">Facebook</a>, <a href="https://twitter.com/TabletopPG" target="_blank">Twitter</a> or <a href="mailto:contact@tabletop-playground.com">email us</a>.</p>
			<p>Copyright &copy; 2020, Plasticity Studios. Read our <a href="https://tabletop-playground.com/privacy-policy/">Privacy Policy</a> and <a href="https://tabletop-playground.com/site-notice/">Site Notice</a>.</p>

			<div style="position: relative; max-width: 540px; margin: 2rem auto 0; padding: 0 1rem;">
				<a href="https://www.moddb.com" style="position: absolute; left: 0; top: 0; bottom: 0; width: 40%;" target="_blank" alt="Presented by ModDB"></a>
				<a href="https://www.indiedb.com" style="position: absolute; left: 40%; top: 0; bottom: 0; width: 35%;" target="_blank" alt="Presented by IndieDB"></a>
				<a href="https://modularity.games" style="position: absolute; left: 75%; top: 0; bottom: 0; width: 25%;" target="_blank" alt="Published by Modularity"></a>
				<img src="https://tabletop-playground.com/wp-content/uploads/logos.png" alt="Partners">
			</div>
		</div>
	</footer>
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none;"><symbol id="icon-steam" viewBox="0 0 448 512"><path d="M395.5 177.5c0 33.8-27.5 61-61 61-33.8 0-61-27.3-61-61s27.3-61 61-61c33.5 0 61 27.2 61 61zm52.5.2c0 63-51 113.8-113.7 113.8L225 371.3c-4 43-40.5 76.8-84.5 76.8-40.5 0-74.7-28.8-83-67L0 358V250.7L97.2 290c15.1-9.2 32.2-13.3 52-11.5l71-101.7c.5-62.3 51.5-112.8 114-112.8C397 64 448 115 448 177.7zM203 363c0-34.7-27.8-62.5-62.5-62.5-4.5 0-9 .5-13.5 1.5l26 10.5c25.5 10.2 38 39 27.7 64.5-10.2 25.5-39.2 38-64.7 27.5-10.2-4-20.5-8.3-30.7-12.2 10.5 19.7 31.2 33.2 55.2 33.2 34.7 0 62.5-27.8 62.5-62.5zm207.5-185.3c0-42-34.3-76.2-76.2-76.2-42.3 0-76.5 34.2-76.5 76.2 0 42.2 34.3 76.2 76.5 76.2 41.9.1 76.2-33.9 76.2-76.2z"/></symbol><symbol id="icon-play" viewBox="0 0 448 512"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"/></symbol></svg>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/scrollreveal"></script>
	<script>
	$(document).ready(function() {
		lazyLoad = function(e) {
			$(e).find("img").attr("src", $(e).find("img").data("src"));
		};

		var slidespeed = 1000;
		window.sr = ScrollReveal();
		sr.reveal('.ttp-demo', { origin: 'bottom', duration: slidespeed*2, beforeReveal: lazyLoad });

		$(".tile-trailer").on("click", function(){
			if(youtubeParser($(this).attr("href"))) {
				$(".modal").addClass("is-active").find(".modal-content").html('<iframe width="640" height="360" src="//www.youtube.com/embed/'+youtubeParser($(this).attr("href"))+'?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
				return false;
			} else {
				return true;
			}
		});

		$(".tile-screenshot").on("click", function(){
			img = $(this).find("img").clone().click(function(){
				img = $(this);
				next = false;

				$(".tile-screenshot").each(function(){
					if(next) {
						img.attr("src", $(this).attr("href"));
						next = false;
					} else if($(this).attr("href") == img.attr("src")) {
						next = true;
					}
				});

				if(next) {
					img.attr("src", $(".tile-screenshot:eq(0)").attr("href"));
				}
			});
			$(".modal").addClass("is-active").find(".modal-content").html(img.addClass("modal-image").attr("src", $(this).attr("href")));
			return false;
		});

		$(".modal").on("click", ".modal-close,.modal-background", function(){
			$(".modal.is-active").removeClass("is-active");
			$(".modal img,.modal iframe").remove();
			return false;
		});

		$(document).keyup(function(e) {
			if(e.keyCode === 27) {
				$(".modal.is-active").removeClass("is-active");
				$(".modal img,.modal iframe").remove();
			}
		});
	});

	youtubeParser = function(url) {
		var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
		var match = url.match(regExp);
		return (match&&match[7].length==11)? match[7] : false;
	};
	</script>
</body>
</html>
