var app = angular.module("mem_app", []);
app.controller("controller", function($scope, $http) {
   $scope.btnName = "Register";
      $scope.btnLogin = "Login";
    $scope.icon = "glyphicon glyphicon-floppy-disk";
    $scope.btnClass = "btn btn-primary";
    
    $scope.insert = function() {
        if ($scope.fullname == null) {
            alert("Please input fullname");
        } 
        else if ($scope.email == null) {
            alert("Please input email");
        }  
		else if ($scope.telephone == null) {
            alert("Please input telephone");
        } 
        else {
            $http.post(
                "action.php", {
                    'fullname': $scope.fullname,
                    'email': $scope.email,
                    'telephone': $scope.telephone,
                    'btnName': $scope.btnName,
                    'user_id': $scope.user_id,
                }
            ).success(function(data) {
                alert(data);
                $scope.fullname = null;
                $scope.email = null;
                $scope.telephone = null;
                $scope.btnName = "Register";
                $scope.icon = "glyphicon glyphicon-floppy-disk";
                $scope.btnClass = "btn btn-primary";
                $scope.showdata();
            });
        }
    }
  
    $scope.enter = function(keyEvent) {
        if (keyEvent.which === 13){
            insert();
        }
    }
	   $scope.login = function() {
        if ($scope.email == null) {
            alert("Please input email");
        }  
		
        else {
            $http.post(
                "action2.php", {
                    'email': $scope.email,
                    'btnLogin': $scope.btnLogin,
                    'user_id': $scope.user_id,
                }
            ).success(function(data) {
                alert(data);          
                $scope.email = null;
                $scope.btnLogin = "Login";
                $scope.icon = "glyphicon glyphicon-floppy-disk";
                $scope.btnClass = "btn btn-primary";
                $scope.showdata();
            });
        }
    }
  
    $scope.enter = function(keyEvent) {
        if (keyEvent.which === 13){
            login();
        }
    }
	
 
  
});
