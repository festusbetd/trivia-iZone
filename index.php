<html>
<head>
	<meta charset="UTF-8"> 
	<title>iZon Trivia</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>
<body>
<div class="container">
	<h1 class="page-header">iZone Trivia</h1>
	<div class="row">
		<div ng-app="mem_app" ng-controller="controller" >
			<div class="col-md-4">
				
			</div>
				<div class="col-md-5">
			
				<form ng-submit="myFunc()">
					<h3>Registration Form</h3>
					<hr>
					<div class="form-group">
				    	<label for="fullname">Full Name</label>
				    	<input type="text" class="form-control" id="fullname" name="fullname" ng-model="fullname" placeholder="Enter fullname">
				  	</div>
				  	<div class="form-group">
				    	<label for="email">Email Address</label>
				    	<input type="text" class="form-control" id="email" name="email" ng-model="email" placeholder="Enter email">
				  	</div>
					<div class="form-group">
				    	<label for="telephone">Telephone Number</label>
				    	<input type="number" class="form-control" id="telephone" name="telephone" ng-model="telephone" placeholder="Enter telephone">
				  	</div>
				  	<hr>
				  	<button type="submit" class="{{btnClass}}" ng-click="insert()"><span class="{{icon}}"></span>{{btnName}}</button>
					 	<hr>
						<p>	Already a member? <a href="login.php">Sign In</a>	</p>
				</form>
			</div>
			
		</div>
	</div>
	 <div class="row">

        

    </div
	<footer class="page-footer blue pt-4 mt-4">


    <div class="container-fluid text-center text-md-left">
        <div class="row">

   
            <div class="col-md-6">
              
            </div>
         
            <div class="col-md-6">
                <h5 class="title">Related Links</h5>
                <ul class="list-unstyled">
                    <li><a href="www.izoneafrica.net" target="_blank">iZone Africa</a></li>
                    <li><a href="https://www.coca-colacompany.com" target="_blank">Coca-Cola</a></li>
                    <li><a href="https://www.safaricom.co.ke" target="_blank">Safaricom</a></li>
                    <li><a href="africa.airtel.com/kenya" target="_blank">Airtel</a></li>
                </ul>
            </div>
     
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        <div class="container-fluid">
            © 2018 Copyright: <a href="#"> iZone Africa </a>
        </div>
    </div>
 
</footer>
</div>
<script src="myangular.js"></script>
</body
</html>