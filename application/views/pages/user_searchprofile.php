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
    	<div class="span12 offset1">
			<h3 id="searchprofile">Search Profile</h3>
			<form class="well form-search">
				<input type="text" class="input-medium search-query" id="searchprofile" placeholder="Looking for..." autofocus="autofocus">
				<button type="submit" class="btn">Search</button>
			</form>
			<hr>
		</div>
		<div class="span12 offset1">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Room No.</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Occupant #1</td>
						<td>1</td>
						<td><button type="submit" class="btn btn-primary">View</button></td>
					</tr>
					<tr>
						<td>Occupant #2</td>
						<td>2</td>
						<td><button type="submit" class="btn btn-primary">View</button></td>							
					</tr>
					<tr>
						<td>Occupant #3</td>
						<td>3</td>
						<td><button type="submit" class="btn btn-primary">View</button></td>				
					</tr>
				</tbody>
			</table>
		</div>
    </div>
  </div>
</div>