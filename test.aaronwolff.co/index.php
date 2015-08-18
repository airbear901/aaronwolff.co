<?php 
$page_title = 'Aaron Wolff';
$page_style_href = 'css/style.css';
include 'includes/header.php';

$price = array (
	'lillies' => 3.5,
	'roses' => 930
);
$color = array (
	'lillies' => "pink",
	'roses' => "red"
); 
?>


<!-- <div class="hero-image">
	<span>Some things I've done.</span>
</div> -->
<div class="container">
	<h1>Some things I've done.</h1>
	
	<div class="row">
		<div id="links" class="col-xs-12">
			<a href="/photos/patagonia" title="Patagonia">
				<img src="/img/home_patagonia.jpg" alt="">
			</a>
			<a href="/photos/newzealand" title="New Zealand">
				<img src="/img/home_new_zealand.jpg" alt="">
			</a>
			<a href="/photos/panama" title="Panama">
				<img src="/img/home_panama.jpg" alt="">
			</a>
		</div>
	</div>
	<div class="row">
		<div id="links" class="col-xs-12">
			<a href="/photos/patagonia" title="Patagonia">
				<img src="/img/home_india.jpg" alt="">
			</a>
			<a href="/photos/newzealand" title="New Zealand">
				<img src="/img/home_india2.jpg" alt="">
			</a>
			<a href="/photos/panama" title="Panama">
				<img src="/img/home_india3.jpg" alt="">
			</a>
		</div>
	</div>
				    

</div> <!-- container -->
</body>
</html>
