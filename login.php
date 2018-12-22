<?php 
if(isset($_SESSION ["AUTH"]["tmsUser"] ['isLoggedIn'])  ){
	header('Location:index'); die();
}
?>
<body ng-app="authApp" ng-controller="AuthCtrl" class="bg-dark">
	<div class="login-content">
		<div ng-repeat="facade in facades">
			<div ng-init="facade.facade = false">					
				<div class="login-form">
				<h1 class="login-title">Mibox</h1>		
				<h2>Login in to your account!</h2>						
					<form ng-submit="submit(facade.formaction);" >
						<div class="alert alert-danger" ng-show="LoginErrorMsg" ng-bind="LoginErrorMsg"></div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon1"><span class="fa fa-user"></span></span>
								<input autocomplete="off" ng-if="facade.id == '1'" class="form-control" ng-model="carrierUser.username" type="text" name="user" placeholder="Username" value="" />
								<input autocomplete="off" ng-if="facade.id == '2'" class="form-control" ng-model="brokerUser.username" type="text" name="user" placeholder="Username" value="" />
								<input autocomplete="off" ng-if="facade.id == '3'" class="form-control" ng-model="customerUser.username" type="text" name="user" placeholder="Username" value="" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon1"><span class="fa fa-lock"></span></span>

								<input autocomplete="off" ng-if="facade.id == '1'" class="form-control" ng-model="carrierUser.password" type="password" name="pass" placeholder="Password" value="" />
								<input autocomplete="off" ng-if="facade.id == '2'" class="form-control" ng-model="brokerUser.password" type="password" name="pass" placeholder="Password" value="" />
								<input autocomplete="off" ng-if="facade.id == '3'" class="form-control" ng-model="customerUser.password" type="password" name="pass" placeholder="Password" value="" />
							</div>
						</div>
						<div class="form-group">
							<div class="login_options">	
								<label class="checkbox-inline"><input type="checkbox"> Remeber me!</label>
							</div>
						</div>						
						   <button type="submit" class="btn btn-success btn-block">Login</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
