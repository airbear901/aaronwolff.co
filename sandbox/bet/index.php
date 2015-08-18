<?php 
// $page_style_href = '../css/style.css';
$page_style_href = 'css/style.css';
include 'includes/header.php';


?>
<div class="container">
	<div class="row">
		<form class="form-horizontal" action="insert.php" method="post">




			<fieldset>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">First Name</label>  
			  <div class="col-md-5">
			  <input id="name" name="firstname" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">Email</label>  
			  <div class="col-md-5">
			  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="passwordinput">Password</label>
			  <div class="col-md-5">
			    <input id="passwordinput" name="password" type="password" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			  	<input type="submit">
			    <button id="submit" name="submit" class="btn btn-success">Submit</button>
			  	</input>
			  </div>
			</div>

			</fieldset>
		</form>
	</div>
</div> <!-- container -->
