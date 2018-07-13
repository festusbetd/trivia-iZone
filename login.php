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
					<h3>Login Form</h3>
					<hr>
					
				  	<div class="form-group">
				    	<label for="email">Email Address</label>
				    	<input type="text" class="form-control" id="email" name="email" ng-model="email" placeholder="Enter email">
				  	</div>
					
				  	<hr>
					   
				<button type="submit" class="{{btnClass}}" ng-click="login()"><span class="{{icon}}"></span>{{btnLogin}}</button>
					 	<hr>
						<p>Not a member? <a href="index.php">Sign Up</a>	</p>
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
              <p> <br />
			   <br />
			   <br />
			   <br />
			   <br />
			   <br />
			     <br />
				   <br />
				     <br />
					   <br />
					    <br />
					   <br />
					     <br />
					    
               </p>
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