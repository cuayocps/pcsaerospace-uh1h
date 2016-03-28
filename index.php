<?php
$url = array(
		strtolower(preg_replace('/^([^\/]+).*$/', '$1', $_SERVER['SERVER_PROTOCOL'])) . ':/',
		$_SERVER['SERVER_NAME'],
		str_replace('/', '', $_SERVER['REQUEST_URI'])
);
$absolute_url = implode('/', array_filter($url));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, user-scalable=no">

		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>UH-1H</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href='https://fonts.googleapis.com/css?family=Exo+2:400,300,200,100,500,600,700' rel='stylesheet' type='text/css'/>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'/>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
		<link href="css/uh1h.css" rel="stylesheet"/>
  </head>
	<!-- NAVBAR
	================================================== -->
  <body>
    <nav class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-uh1h navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
              </a>
              <a class="navbar-brand" href="<?php echo $absolute_url; ?>">UH-1H</a>
							<div class="dropdown pull-left" style="display: none">
								<a class="btn btn-uh1h dropdown-toggle flag flag-us" type="button" id="choosecountry" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									United States
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="choosecountry">
									<li><a href="#" class="flag flag-us">United States</a></li>
									<li><a href="#" class="flag flag-cl	">Chile</a></li>
								</ul>
							</div>
            </div>
            <div id="navbar" class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#technical_features">Technical Features</a></li>
                <li><a href="#engine">Engine</a></li>
                <li><a href="#upgrades">Upgrades</a></li>
                <li><a href="#contact" data-toggle="modal">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </nav>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <h1>The perfect addition to your fleet</h1>
              <p class="lead">a high performance option for the UH-1H</p>
              <p>
								<a class="btn btn-lg btn-primary" href="#contact" role="button" data-toggle="modal">More Information</a><br/>
								<small>PCS Aerospace Technology LLC</small>
							</p>
            </div>
          </div>
        </div>
			</div>
		</div>

		<div class="container">
			<h2>The amazing performance</h2>
		</div>
		<div id="performance">
			<img src="./images/uh-1h_1.jpg" alt="uh-1h 1" class="img-rounded">
			<img src="images/uh-1h_2.jpg" alt="uh-1h 2" class="img-rounded">
			<img src="images/uh-1h_3.jpg" alt="uh-1h 3" class="img-rounded">
			<img src="images/uh-1h_4.jpg" alt="uh-1h 4" class="img-rounded">
		</div>

		<div class="container" id="technical_features">
			<h2>Full technical features for UH-1H</h2>
			<div id="features">
				<div class="row">
					<div class="col-md-2 hidden-xs hidden-sm"></div>
					<div class="col-md-4 col-sm-12 p">
						<h4>Optional main rotor blades</h4>
						High performance new built composite blades will be available in mid-late 2007 and will provide a dramatic performance improvement over any other blade on the UH-1H.
					</div>
					<div class="col-md-1 hidden-xs hidden-sm"></div>
					<div class="col-md-4 col-sm-12 p">
						<div class="row spacer-80"></div>
						Tailboom is upgraded with the BLR Strake kit with FAA approved  performance enhancement. Requires less tail rotor input for improved power to the main rotor.
					</div>
				</div>
				<div class="row spacer-120 hidden-xs hidden-sm"></div>
				<div class="row">
					<div class="col-md-3 col-sm-12 p">
						<div class="row">
							<div class="col-md-1 hidden-xs hidden-sm"></div>
							<div class="col-md-10 col-sm-12 p">
								<h4>Optional Upgraded cockpit</h4>
								Fully integrated sagen glass cockpit withoptional 2-axis autopilot.
							</div>
						</div>
					</div>
					<div class="col-md-6 hidden-xs hidden-sm"></div>
					<div class="col-md-3 col-sm-12">
						<div class="row spacer-80 hidden-xs hidden-sm"></div>
						<div class="row">
							<div class="col-md-2 hidden-xs hidden-sm"></div>
							<div class="col-md-10 col-sm-12 p">
								Tailboom BLR Fast fin is installed for improved tail rotor performance. This improvement is gained by “un-shading” the tail rotor.
							</div>
						</div>
					</div>
				</div>
				<div class="row spacer-50 hidden-xs hidden-sm"></div>
				<div class="row">
					<div class="col-md-4 hidden-xs hidden-sm"></div>
					<div class="col-md-3 col-sm-12 p">
						Engine is upgraded from T53-13 of 1400SHP to T53-703 of 1800SHP for hot temperature and high altitude performance.
					</div>
					<div class="col-md-1 hidden-xs hidden-sm"></div>
					<div class="col-md-3 col-sm-12 p">
						Tailboom 42º gearbox upgraded to bell 212 unir for improvedsafety and a TBO of 5000 Hours.
					</div>
				</div>
			</div>
		</div>

		<div id="engine">
			<div class="row">
				<div class="col-md-6 engine">
					<img src="images/engine.png" alt="Honeywell T53-L-703 Engine">
				</div>
				<div class="col-md-6 rip-top">
					<div class="area">
						<h2>Honeywell T53-L-703 Engine</h2>
						<div id="width"></div>
						<p>Honeywell, the manufacturer of the T53 series engines, estimates that the T53 series engine has operated safely and reliably for over 70,000,000 flight hours.</p>
						<p>Many authorities believe this to be the most reliable helicopter turbine engine ever developed. The original equipment T53-L-13B at 1400 horsepower, while extremely reliable, has proven to be underpowered at high elevations and hot temperatures.</p>
						<p>The upgraded T53-L-703 at 1800 horsepower, solves this problem.</p>
						<p>The additional 400 horsepower provides the needed power at high altitudes yet still maintains the extraordinary reliability of the proven T53 engine in the Bell UH-1H Plus.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="upgrades">
			<h2>Upgrades for your UH-1H</h2>
			<div class="row">
				<div class="col-md-5 hidden-xs hidden-sm">
					<span class="avionic-upgrade-1 img-rounded"></span>
				</div>
				<div class="col-md-7">
					<h3>Avionics Upgrades <span class="label label-success">NEW</span></h3>
					<p>The Uh-1H Plus can receive a tremendous technological upgrade with the introduction of an integrated "Glass Cockpit". Flight instruments may be integrated into two separated and redundant display that easy pilot work load and provide many features not available with the old analog gauges.</p>
					<p class="text-center hidden-md hidden-lg"><span class="avionic-upgrade-1 img-rounded"></span></p>
				</div>
			</div>
			<div class="row spacer-30"></div>
			<div class="row">
				<div class="col-md-7">
					<h3>Improved Vertical Spar Fin</h3>
					<p>Another important upgrade Northwest Helicopter incorporates into all of their performance enhanced UH-1H Plus aircraft is the installation of the Global Helicopter Technology Improved Vertical Fin Spar.</p>
					<p>The Global Spar eliminates the problems associated with the original equipment “laminated” spar that was prone to cracking. This spar is indestructible and adds to the already phenomenal safety and reliability record of the UH-1H Plus.</p>
					<p class="text-center hidden-md hidden-lg"><span class="avionic-upgrade-3 img-rounded"></span></p>
				</div>
				<div class="col-md-5 hidden-xs hidden-sm">
					<span class="avionic-upgrade-3 img-rounded"></span>
				</div>
			</div>

			<div class="row spacer-120"></div>
			<div class="row text-center">
				<a class="btn btn-lg btn-primary" href="#contact" role="button" data-toggle="modal">More Information</a><br/>
				<small>PCS Aerospace Technology LLC</small>
			</div>
		</div>


		<div id="contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
						<h3 id="contactLabel">Contact us</h3>
					</div>
					<div class="modal-body clearfix">
						<div class="col-sm-5">
							<p><b>Address:</b><br/>19301 SW 106TH AV UNIT 14<br/>Cutler Bay, FL 33157</p>
							<p><b>Phone:</b><br/>786 732 6068</p>
							<p><b>Cell:</b><br/>786 512 5725</p>
							<p><b>E-mail:</b><br/>psolis@grupoarcano.com</p>
						</div>
						<form class="form-horizontal col-sm-7" action="contactus.php">
							<div class="form-group">
								<label>Name</label>
								<input name="name" class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"/>
							</div>
							<div class="form-group">
								<label>E-Mail</label>
								<input name="email" class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"/>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input name="phone" class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"/>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea name="message" class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
							</div>
							<div class="form-group">
								<div class="g-recaptcha" id="captcha"></div>
							</div>
							<div class="form-group">
								<div class="alert alert-danger hide" id="form-error">The form is not valid.</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Send</button>
						<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/uh1h.js"></script>
		<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' defer="defer"></script>
		<script>
			(function (i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
								m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-24657063-3', 'auto');
			ga('send', 'pageview');

		</script>

	</body>
</html>
