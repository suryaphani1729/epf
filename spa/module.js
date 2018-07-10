var app = angular.module("myapp",[]);

app.controller('myCtrl', function($scope) {
	
	$scope.empData = empData;
	
	$scope.getDaysAdjusted = function(emp){
	   
	   return $scope.calcSalary(emp);
	   
	}
	
	$scope.calcSalary = function(emp){
	    
		emp.daysAdjusted = angular.copy(emp.daysWorked);
		
		if(emp.currentSalary == emp.daysAdjustedSalary)
		  return emp.daysAdjusted;
		 else if(emp.currentSalary < emp.daysAdjustedSalary){
			 emp.daysAdjusted -= 0.5;
		     $scope.calcSalary(emp);
		 }
		 else if(emp.currentSalary > emp.daysAdjustedSalary){
			 return emp.daysAdjusted; 
		 }
		
		
	}
	
	$scope.getAdjustedSalary = function(emp){return (parseInt(emp.basicNew)+parseInt(emp.hraNew)+parseInt(emp.waNew));}
	$scope.getESI = function(emp){ return (parseFloat((emp.basicNew * 1.75)/100) + parseFloat((emp.hraNew * 1.75)/100)).toFixed(0);}
});