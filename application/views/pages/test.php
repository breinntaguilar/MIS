<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4">
     		<div class="sidebar-nav">
				<div class="well" style="width:300px; padding: 8px 0;">
				<ul class="nav nav-list"> 
		  			<li class="nav-header">Dashboard</li>        
		  			<li class="active"><a href="<?php echo site_url('pages/user_dashboard'); ?>"><i class="icon-home"></i> Dashboard</a></li>
		  			<li><a href="<?php echo site_url('user/userprofile'); ?>"><i class="icon-user"></i> Profile</a></li>
		  			<li><a href="<?php echo site_url('user/searchprofile'); ?>"><i class="icon-search"></i> Search Profile</a></li>
		  			<li><a href="#"><i class="icon-list-alt"></i> Billing Statement</a></li>
		  			<li><a href="#"><i class="icon-shopping-cart"></i> Payment History</a></li>
				</ul>
				</div>
			</div>
    	</div>
    	<div class="span8">
    		<div class="profileheader">
    			<h3>John Doe (JD)</h3>
    		</div>
    		<div class="prof_basicinfo">
      		<div class="span6">
      				<div class="prof_basicinfo_header">
      					<h5>Basic Information</h5>
      				</div>
      				<div class="prof_basicinfo_body">
      					<div>
      						<div class="age_info">
      							<div class="age">Age</div>
								<div class="age_figure">27</div>
							</div>
						</div>
					</div>
      				</div>
      		<div class="span6">
      		<div>
      			<h5>Dorm Info</h5>
      		</div>
      		</div>
    </div>
	</div>
</div>




<div class="span8">
    	<!-- <div class="alert alert-success">
    		<a class="close">×</a>
    		<strong>Success</strong>
    		"You successfully read this important alert message."
    	</div> -->
    	<div class="span8">
			<div class="well">
				<h3 class="text-warning">Current Billing</h3>
				<p><span class="label label-warning">Billing Statement</span></p>
				<div class="example">
					<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Detail</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Rental: </td>
							<td></td>
						</tr>
						<tr>
							<td>Water: </td>
							<td></td>							
						</tr>
						<tr>
							<td>Electric: </td>
							<td></td>				
						</tr>
						<tr>
							<td>Total: </td>
							<td></td>				
						</tr>
					</tbody>
					</table>
				</div>
				<p><a class="btn btn-warning btn-large" href="#"><i class="icon-shopping-cart icon-white"></i> Pay Now</a></p>
			</div>
		</div>
		<div class="span4">
			<div class="well">
				<h3 class="text-info"><? echo date('F'); ?> Celebrants</h3>
				<p><span class="label label-success">Today's celebrants!</span></p>
				<ul>
					<li>Occupant #1</li>
					<li>Occupant #2</li>
					<li>Occupant #3</li>
				</ul>          
				<p>Greetings! Happy birthday guys! Enjoy your day! Woohoo!</p>
			</div>
		</div>
		<div class="span12">
			<div class="well">
				<h1 class="text-info">S P A C E</h1>
			</div>
		</div>
    </div>