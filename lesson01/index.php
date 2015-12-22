<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angular</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body ng-app="gettingStart">

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="list-group">
				<div class="list-group-item" ng-controller="StoreController as item">
					<h1>{{item.product.product_name}}</h1>
					<h1>{{item.product.price}}</h1>
					<h1>{{item.product.description}}</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>	
</body>
</html>