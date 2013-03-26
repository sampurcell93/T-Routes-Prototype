<!DOCTYPE html>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript"
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoS1bfOyPBTbYH1GhtD4xRs9XrT17nGwg&sensor=true">
		</script>
		<script type="text/javascript" src='main.js'></script>
  	  	<title>Handicap Stops</title>
	  	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	  	<link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	  	<link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
	  	<!--[if IE]>
	    	<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	  	<![endif]-->
	</head>
	<body>
		<div class='fixed pane' id='routes'>
			<div class='fixed hidden pane' id='delete-home'>
				Are you sure you want to delete the route "Home to Work"?
				<button class='inline fr close'>Yes</button>			
			</div>
			<div class='fixed hidden pane' id='delete-sam'>
				Are you sure you want to delete the route "Sam's to Nelly's"?
				<button class='inline fr close'>Yes</button>	
			</div>

			<div class='fixed hidden pane' id='update-home'>
				<input type='text' placeholder='Change Start Name' value='Home'/>
				<input type='text' placeholder='Change Start Loc' value='012 Houston Hall Medford MA 02155'/>
				<input type='text' placeholder='Change End Name' value='Work'/>
				<input type='text' placeholder='Change End Loc' value='1 Rogers Street, Cambridge, MA, 02145'/>
				<button class='inline fr close'>Update</button>			
			</div>
			<div class='fixed hidden pane' id='update-sam'>
				<input type='text' placeholder='Change Start Name' value="Sam's"/>
				<input type='text' placeholder='Change Start Loc' value='10 Winthrop Ave, Medford MA 02155'/>
				<input type='text' placeholder='Change End Name' value="Nelly's"/>
				<input type='text' placeholder='Change End Loc' value='1234 Southie by the Water, 03456'/>
				<button class='inline fr close'>Update</button>	
			</div>

			<h2>Your routes</h2>
			<ul class='your-routes'>
				<li>Home to Work <span class='delete fr' data-pane='delete-home'>Delete</span><span data-pane='update-home' class='update fr'>Update</span></li>
				<li>Sam's to Nelly's <span class='delete fr' data-pane='delete-sam'>Delete</span><span data-pane='update-sam' class='update fr'>Update</span></li>
			</ul>
		</div>
		<div class='fixed hidden pane' id='route-data'>
			<h2>Route Data</h2>
		</div>
		<div class='fixed hidden pane' id='accessibility'>
			<h2>Accessibility</h2>
			<h3>Voice Controls</h3>
			<section>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				<input type='checkbox' class='hidden' name='voice-switch' id='voice-switch' />
				<button class='switch'>
					<div class='mask'></div>
					<label for='voice-switch'>On Off</label>
				</button>
			</section>
			<h3>Audio Impairment</h3>
			<section>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				<input type='checkbox' class='hidden' name='audio-switch' id='audio-switch'/>
				<button class='switch'>
					<div class='mask'></div>
					<label for='audio-switch'>On Off</label>
				</button>
			</section>
			<button class='close fr'>Save Settings</button>
		</div>
		<div class='wrap'>
			<div class='fixed bar'>
				<input type='text' placeholder='My location'/>
				<input type='text' placeholder='Destination' />
				<button class='fr'>+</button>			
				<button class='inline'>Map Route</button>			
			</div>
			<div id='map-canvas'></div>
			<div class='fixed bar'>
				<nav>
					<ul>
						<li data-pane='route-data' data-info="This Route's Data">a</li>
						<li data-pane='routes' data-info='Your Routes'>h</li>
						<li data-pane='accessibility' data-info='Settings'>e</li>
					</ul>
				</nav>
			</div>
		</div>
	</body>
</html>