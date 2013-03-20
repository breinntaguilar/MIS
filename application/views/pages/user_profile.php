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
    		<div class="offset1"><h3>John Doe (JD)</h3></div>
    		<hr>
    		<div class="row-fluid">
    			<div class="span5 offset1"><h4 id="userprofile">Basic Information</h4>
    				<table class="table-hover">
					<thead>
						<tr></tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Age:</strong></td>
							<td> 27</td>
						</tr>
						<tr>
							<td><strong>Gender:</strong></td>
							<td> M</td>							
						</tr>
						<tr>
							<td><strong>Birthday:</strong></td>
							<td> <?php echo date('F'); ?></td>				
						</tr>
						<tr>
							<td><strong>Birthplace:</strong></td>
							<td> Cebu City</td>				
						</tr>
						<tr>
							<td><strong>Civil Status:</strong></td>
							<td> Single</td>				
						</tr>
						<tr>
							<td><strong>Siblings:</strong></td>
							<td> 3</td>				
						</tr>
						<tr>
							<td><strong>Order of Birth:</strong></td>
							<td> Eldest</td>				
						</tr>
						<tr>
							<td><strong>Religion:</strong></td>
							<td> Roman Catholic</td>				
						</tr>
					</tbody>
					</table>
    			</div>
    			<div class="span5 offset1"><h4 id="dormdetails">Dorm Details</h4>
    				<table class="table-hover">
      				<thead><tr></tr></thead>
      				<tbody>
      					<tr>
							<td><strong>Room #:</strong></td>
							<td> 2</td>
						</tr>
						<tr>
							<td><strong>Date of Occupancy:</strong></td>
							<td> <?php echo date('F'); ?></td>							
						</tr>
						<tr>
							<td><strong>Payment Status:</strong></td>
							<td> Unpaid</td>				
						</tr>
      				</tbody>
      				</table>
    			</div>
  			</div>
  			<hr>
  			<div class="row-fluid">
    			<div class="span5 offset1"><h4 id="dormdetails">Education</h4>
    				<div>University of St Moriah</div>
    			</div>
    			<div class="span5 offset1"><h4 id="dormdetails">Work</h4>
    				<div>Lemonade Corporation</div>
    			</div>    			
  			</div>
  			<hr>
  			<div class="row-fluid">
    			<div class="span10 offset1"><h4 id="dormdetails">Contact Information</h4>
    				<table class="table-hover">
      				<thead><tr></tr></thead>
      				<tbody>
      					<tr>
							<td><strong>Mobile #:</strong></td>
							<td> 09231234567</td>
						</tr>
						<tr>
							<td><strong>Email Address:</strong></td>
							<td> johndoe@gmail.com</td>							
						</tr>
						<tr>
							<td><strong>Contact Person:</strong></td>
							<td> Johnny Doe</td>				
						</tr>
						<tr>
							<td><strong>Home Address:</strong></td>
							<td> Cebu City</td>				
						</tr>
      				</tbody>
      				</table>
    			</div>
  			</div>
    	</div>
    </div>	
</div>