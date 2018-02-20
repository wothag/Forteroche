
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Jean Forteroche</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Deconnection</a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>

<div class="tab-user-view">

<section class="col-sm-8 table-responsive">
<table class="table table-bordered table-striped table-condensed">
  <tr>
  <th>Pseudo</th><th>Prénom</th><th>Nom</th>
  
  </tr>
<?php
   while($données=$result->fetch())
   {
    echo '<tr><td>',$données['username'],'</td><td>',$données['first_name'],'</td><td>',$données['last_name'],'</td></tr>';
   }
?>
</table>
</div>

