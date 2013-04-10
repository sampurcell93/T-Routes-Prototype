<!DOCTYPE html>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript"
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoS1bfOyPBTbYH1GhtD4xRs9XrT17nGwg&sensor=true">
		</script>
		<script type="text/javascript" src='infobox.js'></script>
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
		<div class='wrap'>
		<div class='fixed hidden pane' id='routes'>
			<div class='fixed hidden pane' id='delete-home'>
				<p>Are you sure you want to delete the route "Home to Work"?</p>
				<button class='inline fr close'>Yes</button>	
				<button class='inline fr close'>No</button>			
			</div>
			<div class='fixed hidden pane' id='delete-sam'>
				<p>Are you sure you want to delete the route "Sam to Nelly"?</p>
				<button class='inline fr close'>Yes</button>	
				<button class='inline fr close'>No</button>	
			</div>

			<div class='fixed hidden pane' id='update-home'>
				<input type='text' placeholder='Change Start Name' value='Home'/>
				<input type='text' placeholder='Change Start Loc' value='012 Houston Hall Medford MA 02155'/>
				<input type='text' placeholder='Change End Name' value='Work'/>
				<input type='text' placeholder='Change End Loc' value='1 Rogers Street, Cambridge, MA, 02145'/>
				<button class='inline fr close'>Update</button>			
				<button class='inline fr close'>Cancel</button>			
			</div>
			<div class='fixed hidden pane' id='update-sam'>
				<input type='text' placeholder='Change Start Name' value="Sam"/>
				<input type='text' placeholder='Change Start Loc' value='10 Winthrop Ave, Medford MA 02155'/>
				<input type='text' placeholder='Change End Name' value="Nelly"/>
				<input type='text' placeholder='Change End Loc' value='1234 Southie by the Water, 03456'/>
				<button class='inline fr close'>Update</button>			
				<button class='inline fr close'>Cancel</button>	
			</div>

			<h2>Your routes</h2>
			<ul class='your-routes'>
				<li><a href='#'>Home to Work</a> <span class='delete fr' data-pane='delete-home'>X</span><span data-pane='update-home' class='update fr'>Update</span></li>
				<li><a href='#'>Sam to Nelly</a> <span class='delete fr' data-pane='delete-sam'>X</span><span data-pane='update-sam' class='update fr'>Update</span></li>
			</ul>
		</div>
		<div class='fixed pane hidden' id='route-data'>
			<h2>Route Data</h2>
			<table >
				<tr>
					<td>Number of Stops</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Est. Time</td>
					<td>12 Minutes</td>
				</tr>
				<tr>
					<td>Closest Station</td>
					<td>1.012 miles</td>
				</tr>
				<tr>
					<td>Fare</td>
					<td>$1.25</td>
				</tr>
				<tr>
					<td>CharlieCard Balance</td>
					<td>$10.00</td>
				</tr>
				<tr>
					<td>Line changes</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Closing time</td>
					<td>12:30AM</td>
				</tr>
				<tr>
					<td>Accidental Deaths/yr</td>
					<td>12</td>
				</tr>
				<tr>
					<td>Pets allowed</td>
					<td>No</td>
				</tr>
				<tr>
					<td>Bikes Allowed</td>
					<td>Yes</td>
				</tr>
			</table>
			<div style='padding:10px 5px;'>Stations: Davis, Porter, Harvard, Central</div>
			<h3>Directions to Davis:</h3>
			<ul class='dir'>
				<li>Take a left on Winthrop Street (.4 miles)</li>
				<li>Take a left on Broadway Ave. (.2 miles)</li>
				<li>Take a right on Sommer Street (.2 miles)</li>
				<li>Take a left on Elm Street(.1 mile)</li>
				<li>Davis Square Station is on the right</li>
			</ul>
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
			<div class='fixed bar' id='search'>
				<input type='text' placeholder='My location (optional)'/>
				<input type='text' placeholder='Destination' />
				<button class='fr'>+</button>			
				<button class='inline'>Map Route</button>			
			</div>
			<div class='fixed hidden' id='pulldown'>^</div>
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