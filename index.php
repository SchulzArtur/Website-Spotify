<?php 
include("includes/config.php");

// if(isset($_SESSION['userLoggedIn'])) {
// 	$userLoggedIn = $_SESSION['userLoggedIn'];
// } else {
// 	header("Location: register.php");
// }



 ?>

 <html>
 	<head>
 		<title>Welcome to Spotify</title>
 		<link rel="stylesheet" href="assets/css/style.css">
 	</head>
	
	<body>
		
		<div id="nowPlayingBarContainer">
			<div id="nowPlayingBar">
				<div id="nowPlayingLeft">
					<div class="content">
						<span class="albumLink">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9p3MkMyTuBjEAz6gDrNoWOE0Juet8uI4k84Afw3AD8GsMb3Ud" class="albumArtwork" alt="">
						</span>

						<div class="trackInfo">
							<span class="trackName">
								<span>dada ada</span>
							</span>
						</div>

						<div class="trackInfo">
							<span class="artistName">
								<span>adasd asdasd</span>
							</span>
						</div>
					</div>
				</div>

				<div id="nowPlayingCenter">
					<div class="content playerControls">
						<div class="buttons">
							<button class="controlButton shuffle" title="Shuffle button">
								<img src="assets/images/icons/shuffle.png" alt="shuffle">
							</button>

							<button class="controlButton previous" title="Previous button">
								<img src="assets/images/icons/previous.png" alt="previous">
							</button>

							<button class="controlButton play" title="Play button">
								<img src="assets/images/icons/play.png" alt="play">
							</button>

							<button class="controlButton pause" title="Pause button" style="display: none;">
								<img src="assets/images/icons/pause.png" alt="pause">
							</button>

							<button class="controlButton next" title="Next button">
								<img src="assets/images/icons/next.png" alt="next">
							</button>

							<button class="controlButton repeat" title="Repeat button">
								<img src="assets/images/icons/repeat.png" alt="repeat">
							</button>
						</div>

						<div class="playbackBar">
							<span class="progressTime current">0.00</span>
							<div class="progressBar">
								<div class="progressBarBg">
									<div class="progress"></div>
								</div>
							</div>
							<span class="progressTime current">0.00</span>
						</div>

					</div>
					
				</div>

				<div id="nowPlayingRight">
					<div class="volumeBar">
						<button class="controlButton volume" title="Volume button">
							<img src="assets/images/icons/volume.png" alt="Volume">	
						</button>

						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>

	</body>

 </html>