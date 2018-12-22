<?php 
if(!isset($_SESSION ["AUTH"]["tmsUser"] ['isLoggedIn'])  ){
	 header('Location:login'); die();
}
?>
<body ng-app="authApp" ng-controller="AuthCtrl"></body>
</html>