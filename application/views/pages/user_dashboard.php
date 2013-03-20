<div class="container-fluid">
	<div class="row-fluid">
    	<div class="span4">
     		<div class="sidebar-nav">
				<div class="well" style="width:300px; padding: 8px 0;">
					<ul class="nav nav-list"> 
		  			<li class="nav-header">Dashboard</li>        
		  			<li class="active"><a href="<?php echo site_url('user/userdashboard'); ?>"><i class="icon-home"></i> Dashboard</a></li>
		  			<li><a href="<?php echo site_url('user/userprofile'); ?>"><i class="icon-user"></i> Profile</a></li>
		  			<li><a href="<?php echo site_url('user/searchprofile'); ?>"><i class="icon-search"></i> Search Profile</a></li>
		  			<li><a href="#"><i class="icon-list-alt"></i> Billing Statement</a></li>
		  			<li><a href="#"><i class="icon-shopping-cart"></i> Payment History</a></li>
					</ul>
				</div>
			</div>
    	</div>
    	<div class="span8">
  			<div class="row-fluid">
    			<div class="span5 offset1">
    				<h3 class="text-warning">Current Billing</h4>
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
								<td>Rental </td>
								<td></td>
							</tr>
							<tr>
								<td>Water </td>
								<td></td>							
							</tr>
							<tr>
								<td>Electric </td>
								<td></td>				
							</tr>
							<tr>
								<td>Total </td>
								<td></td>				
							</tr>
						</tbody>
						</table>
					</div>
					<p><a class="btn btn-warning btn-large" href="#"><i class="icon-shopping-cart icon-white"></i> Pay Now</a></p>
    			</div>
    			<div class="span5 offset1"><h3><? echo date('F'); ?> Celebrants</h3>
    				<p><span class="label label-success">Today's celebrants!</span></p>
					<ul>
						<li>Occupant #1</li>
						<li>Occupant #2</li>
						<li>Occupant #3</li>
					</ul>          
					<p>Greetings! Happy birthday guys! Enjoy your day! Woohoo!</p>
    			</div>    			
  			</div>
  			<div class="row-fluid">
    			<div class="span10 offset1">
    				<h3>SPACE FOR OTHER ANNOUNCEMENTS</h3>
    			</div>
  			</div>
		</div>
	</div>
</div>