<?php 
if(!isset($_SESSION ["AUTH"]["tmsUser"] ['isLoggedIn'])  ){
	header('Location:logout'); die();
}
?>
<body ng-app="app" ng-cloak class="ng-cloak ">
	<div id="mainwrapper" ng-controller="appController" class="brokerfacade_header">
		<div id="page_header">
			<ul class="header_ul">
				<li class="home_icon"><a href="javascript: window.location = 'index';"><span class="flaticon-home"></span></a></li>
				<li <?php if($params[1]=='DASHBOARD' || $params[1]=='index'){ ?> class="active" <?php }?>>
					<a href="calendar">
						<span class="module_name_wrap">
							<span class="module_icon fa fa-calendar"></span>
							<span class="module_name active">Calendar</span> 
						</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" ng-click="runCommand('main/_quote/dashboard')" >
						<span class="module_name_wrap">
							<span class="module_icon flaticon-clipboard105"></span>
							<span class="module_name">Give a Quote</span> 
						</span>
					</a>
				</li>	
				<li>
					<a href="customers">
						<span class="module_name_wrap">
							<span class="module_icon flaticon-delivery42"></span>
							<span class="module_name">Customers</span> 
						</span>
					</a>

				</li>	
				<li>
					<a href="javascript:void(0);" ng-click="runCommand('main/_order/dashboard')">
						<span class="module_name_wrap">
							<span class="module_icon flaticon-box24"></span>
							<span class="module_name">Box Orders</span> 
						</span>
					</a>
					<ul class="as-dropdown">
						<li><a href="#">Box Orders Report</a></li>
						<li><a href="#">Work Orders from Box Orders</a></li>
						<li><a href="#">Work Orders Report</a></li>						
					</ul>
				</li>					
				<li>
					<a href="billing">
						<span class="module_name_wrap">
							<span class="module_icon flaticon-receipt12"></span>
							<span class="module_name">Billing</span> 
						</span>
					</a>

				</li>							
				<li>
					<a href="mi_box_status">
						<span class="module_name_wrap">
							<span class="module_icon flaticon-notebook87"></span>
							<span class="module_name">MI-BOX Status Page</span> 
						</span>
					</a>

				</li>			
				<li>
					<a href="set_up_reports">
						<span class="module_name_wrap">
							<span class="module_icon flaticon-bars42"></span>
							<span class="module_name">Set Up Reports</span> 
						</span>
					</a>
					<ul class="as-dropdown">
						<li><a href="#">Users List</a></li>
						<li><a href="#">MI-BOX's Report</a></li>
						<li><a href="#">Storage Rates Report</a></li>
						<li><a href="#">Storage Location Options Report</a></li>	
						<li><a href="#">torage Type</a></li>	
						<li><a href="#">Postal Zones Pricing Report</a></li>							
						<li><a href="#">Promotional Discounts</a></li>	
						<li><a href="#">Available MI-BOX Sizes Report</a></li>	
						<li><a href="#">Service Type</a></li>	
						<li><a href="#">Trucks</a></li>	
						<li><a href="#">Postal Codes Report</a></li>	
						<li><a href="#">Marketing Methods Report</a></li>												
					</ul>
				</li>						
				<li class="logout"><a href="#" ng-click="logout()"><span class="module_icon flaticon-arrow233 margin_r3"></span><span>Logout</span></a></li>		
				<li class="pull-right"><a href="javascript:void(0);" ng-click="userBasicInfoDialog();" data-hover="tooltip" title="" data-toggle="modal" data-original-title="Setting"> <span class="module_icon flaticon-gear39 margin_r3"></span>Admin</a></li>					
			</ul>			
		</div>
		<!-- End #header -->		
		<div id="wrapper" ng-click="mainNavClasses=''; mainNavLiClasses=''">

			<!--Body content-->
			<div id="content" class="clearfix">				
				<!-- Routing here -->
			   <div class="contentwrapper">
					<div id="DebugWindow">
						<div id="resultContainer" class="divContainerClass"></div>
					</div>
					<!-- End .row-fluid -->
				</div>
				
			</div>
			<!-- End #content -->	
		</div>		
	</div>	

</body>

</html>
