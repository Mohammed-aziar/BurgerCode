<!DOCTYPE html>
<html>
<head>
	<title>Burger Code </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>-->

	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Holtwood+One+SC">
</head>
<body>
<!--Start work-->

<!-- Start Container -->
<div class="container site">

	<h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
		<!-- Start Nav -->
		<nav>
			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="#1" data-toggle="tab">Menus</a></li>
				<li role="presentation"><a href="#2" data-toggle="tab">Burgers</a></li>
				<li role="presentation"><a href="#3" data-toggle="tab">Snacks</a></li>
				<li role="presentation"><a href="#4" data-toggle="tab">Salades</a></li>
				<li role="presentation"><a href="#5" data-toggle="tab">Boissons</a></li>
				<li role="presentation"><a href="#6" data-toggle="tab">Desserts</a></li>
			</ul>
		</nav>
		<!-- End Work -->

		<!-- Start tab-content -->
		<div class="tab-content">
			<!--start tab-pane 1-->
			<div class="tab-pane active" id="1">
				<!--Start row -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m1.png" alt="...">
							<div class="price">8.90 dh</div>
							<div class="caption">
								<h4>MENU CLASSIC</h4>
								<p>SANDWICH : BURGER, SALADE , TOMATE , CORNICHE + FRITES + BISSON</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m2.png" alt="...">
							<div class="price">9.50 dh</div>
							<div class="caption">
								<h4>MENU BACON</h4>
								<p>SANDWICH : BURGER, FORMAGE , TOMATE + FRITES + BOISSON</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m3.png" alt="...">
							<div class="price">10.90 dh</div>
							<div class="caption">
								<h4>MENU BIG</h4>
								<p>SANDWICH :DOUBLE BURGER, FROMAGE , TOMATE + FRITES + BOISSON</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m4.png" alt="...">
							<div class="price">9.90 dh</div>
							<div class="caption">
								<h4>MENU CHICKEN</h4>
								<p>SANDWICH :POULIT FRIT, TOMATE , SALADE , MOYENNAIS + FRITES + BOISSON</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m5.png" alt="...">
							<div class="price">10.90 dh</div>
							<div class="caption">
								<h4>MENU FISH</h4>
								<p>SANDWICH :POISSON , SALADE , MAYONNAIS , CORNICHON + FRITES + BOISSON</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m6.png" alt="...">
							<div class="price">11.90 dh</div>
							<div class="caption">
								<h4>MENU DOUBLE STEAK</h4>
								<p>SANDWICH :DOUBLE BURGER, FROMAGE , SALADE ,TOMATE + FRITES + BOISSON</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

				</div>
				<!--End row-->
			</div>
			<!--End tab-pane -->


			<!--start tab-pane 2-->
			<div class="tab-pane" id="2">
				<!--Start row -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b1.png" alt="...">
							<div class="price">5.90 dh</div>
							<div class="caption">
								<h4>CLASSIC</h4>
								<p>SANDWICH : BURGER, SALADE , TOMATE , CORNICHE </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b2.png" alt="...">
							<div class="price">6.50 dh</div>
							<div class="caption">
								<h4>BACON</h4>
								<p>SANDWICH : BURGER, FORMAGE , TOMATE</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b3.png" alt="...">
							<div class="price">6.90 dh</div>
							<div class="caption">
								<h4>BIG</h4>
								<p>SANDWICH :DOUBLE BURGER, FROMAGE , TOMATE </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b4.png" alt="...">
							<div class="price">5.90 dh</div>
							<div class="caption">
								<h4>CHICKEN</h4>
								<p>SANDWICH :POULIT FRIT, TOMATE , SALADE , MOYENNAIS</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b5.png" alt="...">
							<div class="price">6.50 dh</div>
							<div class="caption">
								<h4>FISH</h4>
								<p>SANDWICH :POISSON , SALADE , MAYONNAIS , CORNICHON </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b6.png" alt="...">
							<div class="price">7.50 dh</div>
							<div class="caption">
								<h4>DOUBLE STEAK</h4>
								<p>SANDWICH :DOUBLE BURGER, FROMAGE , SALADE ,TOMATE </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

				</div>
				<!--End row-->
			</div>
			<!--End tab-pane -->

			<!--start tab-pane 3-->
			<div class="tab-pane" id="3">
				<!--Start row -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s1.png" alt="...">
							<div class="price">3.90 dh</div>
							<div class="caption">
								<h4>FRITES</h4>
								<p>POMME DE TAERRE FRITES </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s2.png" alt="...">
							<div class="price">3.40 dh</div>
							<div class="caption">
								<h4>ONION RINGS</h4>
								<p>RONDELLES D'OIGNON FRITS</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s3.png" alt="...">
							<div class="price">5.90 dh</div>
							<div class="caption">
								<h4>NUGGETS</h4>
								<p>NUGGETS DE POULET FRITES</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s4.png" alt="...">
							<div class="price">3.50 dh</div>
							<div class="caption">
								<h4>NUGGETS FROMAGE</h4>
								<p>NUGGETS DE FROMAGE FRITES</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s5.png" alt="...">
							<div class="price">5.90 dh</div>
							<div class="caption">
								<h4>AILES DE POULET</h4>
								<p>AILES DE POULET BAREBECUE</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>


				</div>
				<!--End row-->
			</div>
			<!--End tab-pane -->

			<!--start tab-pane 4-->
			<div class="tab-pane" id="4">
				<!--Start row -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa1.png" alt="...">
							<div class="price">8.90 dh</div>
							<div class="caption">
								<h4>CÉSAR POULET PANÉ</h4>
								<p>POULET PANÉ, SALADE , TOMATE ET LA FAMEUSE SAUCE CÉSAR </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa2.png" alt="...">
							<div class="price">8.90 dh</div>
							<div class="caption">
								<h4>CÉSAR POULET GRILÉ</h4>
								<p>RPOULET GRILÉ, SALADE , TOMATE ET LA FAMEUSE SAUCE CÉSAR </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa3.png" alt="...">
							<div class="price">5.90 dh</div>
							<div class="caption">
								<h4>SALADE LIGHT</h4>
								<p>SALADE, TOMATE, CONCOMBRE? MAIS ET VINAIGRE BAISAMIQUE</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa4.png" alt="...">
							<div class="price">7.90 dh</div>
							<div class="caption">
								<h4>POULET PANÉ</h4>
								<p>NUGGETS DE FROMAGE FRITES</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa5.png" alt="...">
							<div class="price">5.90 dh</div>
							<div class="caption">
								<h4>AILES DE POULET</h4>
								<p>AILES DE POULET BAREBECUE</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>


				</div>
				<!--End row-->
			</div>
			<!--End tab-pane -->


			<!--start tab-pane 5-->
			<div class="tab-pane" id="5">
				<!--Start row -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo1.png" alt="...">
							<div class="price">1.90 dh</div>
							<div class="caption">
								<h4>Coca-Cola</h4>
								<p>Au choix :Petit , Moyen ou Grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo2.png" alt="...">
							<div class="price">1.90 dh</div>
							<div class="caption">
								<h4>Coca-Cola Light</h4>
								<p>Au choix :Petit , Moyen ou Grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo3.png" alt="...">
							<div class="price">1.90 dh</div>
							<div class="caption">
								<h4>Coca-Cola Zèro</h4>
								<p>Au choix :Petit , Moyen ou Grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo4.png" alt="...">
							<div class="price">1.90 dh</div>
							<div class="caption">
								<h4>Fanta</h4>
								<p>Au choix :Petit , Moyen ou Grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo5.png" alt="...">
							<div class="price">1.90 dh</div>
							<div class="caption">
								<h4>Sprite</h4>
								<p>Au choix :Petit , Moyen ou Grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo6.png" alt="...">
							<div class="price">1.90 dh</div>
							<div class="caption">
								<h4>Nestea</h4>
								<p>Au choix :Petit , Moyen ou Grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
				</div>
				<!--End row-->
			</div>
			<!--End tab-pane -->


			<!--start tab-pane 6-->
			<div class="tab-pane" id="6">
				<!--Start row -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d1.png" alt="...">
							<div class="price">4.90 dh</div>
							<div class="caption">
								<h4>Fordont au chocolat</h4>
								<p>Au choix :chocolat blanc ou au lait</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d2.png" alt="...">
							<div class="price">2.90 dh</div>
							<div class="caption">
								<h4>Muffin</h4>
								<p>Au choix :Au  fruits ou au chocolat</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d3.png" alt="...">
							<div class="price">2.90 dh</div>
							<div class="caption">
								<h4>Beignet</h4>
								<p>Au choix :Au Chocolat ou à la varille</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d4.png" alt="...">
							<div class="price">3.90 dh</div>
							<div class="caption">
								<h4>Milkshake</h4>
								<p>Au choix :Fraise, Vanille ou Chocolat</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d5.png" alt="...">
							<div class="price">4.90 dh</div>
							<div class="caption">
								<h4>Sundae</h4>
								<p>Au choix :Fraise Caramel ou Chocolat</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>

					
				</div>
				<!--End row-->
			</div>
			<!--End tab-pane -->
		</div>
		<!-- End tab-content -->
</div>
<!-- Start Container -->

<!--End work-->

</body>
</html>