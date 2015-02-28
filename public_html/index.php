<?php 
$page_title = 'Aaron Wolff';
$page_style_href = 'css/style.css';
$page_script_src = 'js/script.js';
include 'includes/header.php'; 
?>

 <script>
 //  $(function() {
 //    $( document ).tooltip({
 //      items: "img, [data-geo], [title]",
 //      content: function() {
 //        var element = $( this );
 //        if ( element.is( "[data-geo]" ) ) {
 //          var text = element.text();
 //          return "<img class='map' alt='" + text +
 //            "' src='http://maps.google.com/maps/api/staticmap?" +
 //            "zoom=11&size=350x350&maptype=terrain&sensor=false&center=" +
 //            text + "'>";
 //        }
 //        if ( element.is( "[title]" ) ) {
 //          return element.attr( "title" );
 //        }
 //        if ( element.is( "img" ) ) {
 //          return element.attr( "alt" );
 //        }
 //      }
 //    });
 //  });
 </script>

<div class="container">
	<div class="row" style="margin-top: 35px;margin-bottom: 30px;">
		<div class="col-xs-4" id="header-image">
			<img src="/img/logo.png" class="img-responsive" id="logo">
		</div>
		<div class="col-xs-8" id="header-text">
			<div id="header-content">
				<h1 id="name" style="margin-top:10px;">Aaron Wolff</h1>
				<h3 id="sub-name">Entrepreneur | Teacher | Leader | Mountaineer | Lifelong Learner</h3>
			</div>
		</div>
	</div>
</div>
<div class="flip" id="chalkfly">
	<div  style="padding:0px" class="hero wrap">
		<img src="/img/team-standing.png" style="width:100%;" >
		<div class="text_over_image">
			<h1>CHALKFLY</h1>
		</div>
	</div>
</div>
<div class="panel" id="chalkfly-panel">
	<h2>Co-founder | Senior Vice President of Operations</br>2012 - 2015</h2>
	<ul>
		<li>Grew Chalkfly from founding to 20+ employees, more than $10M in revenue, one of <a href="http://www.businessinsider.com/the-15-best-startups-to-work-for-2013-10?#chalkfly-1">"Business Insider’s Best Startups To Work For In America,”</a> and a successful acquisition</li>
		<li>Lead finance, accounting, pricing, tax, billing, invoicing, and collections</li>
		<li>Facilitated the donation of over $100,000 in school supplies to teachers across the United States</li>
		<li>Responsible for data warehouse and utilizing data to improve company sales and efficiency</li>
		<li>Point of contact for lead investor, prepared financial investor documents</li>
		<li>Direct supervisor of eight team members</li>
		<li>Analyzed, tracked, and improved margin</li>
		<li>Oversaw Chalkfly.com frontend and backend development and UX</li>
		<li>Directly responsible for recruiting, hiring, and onboarding of 26 team members</li>
	</ul>
</div>

<div class="flip" id="teachforamerica">
	<div  style="padding:0px" class="hero wrap">
			<img src="/img/tfa_class.png" style="width:100%; margin-top:10px;" >	
			<div class="text_over_image" id="tfa">
				<h1>TEACH FOR AMERICA</h1>
			</div>
	</div>
</div>
<div class="panel" id="tfa-panel">
	<h2>Corps Member | 8th Grade Math Teacher</br>2010 - 2012</h2>
	<ul>
		<li>Selected as one of 50,000+ applicants to join Teach for America and the movement to achieve educational equity</li>
		<li>Ranked in the 94th percentile of teacher effectiveness out of 8,500 teachers in Charlotte Mecklenburg School District</li>
		<li>Led classes to attaining highest passing percentage in school history – 100% in Algebra 1, 95% in 8th Grade Math</li>
		<li>Founded, designed, and implemented a school-wide plan to quadruple the size of the Algebra 1 program</li>
	</ul>
</div>


<div class="flip" id="travel">
	<div  style="padding:0px" class="hero wrap">
		<img src="/img/travel.png" style="width:100%; margin-top:10px;" >
		<div class="text_over_image">
			<h1>TRAVEL</h1>
		</div>	
	</div>
</div>
<div class="panel" id="travel-panel">
	<h2>Israel, Jordan, Ukraine | 2015</h2>
	<h2><a class="test-popup-link" href="https://vimeo.com/88222227">New Zealand (Video) | 2014</a></h2>
	<h2><a class="patagonia-popup" href="img/patagonia-popup.jpg">Patagonia | 2013</a></h2>
	<h2>Panama | 2012</h2>
	<h2>India | 2008</h2>
	
</div>

<div class="flip" id="education">
	<div  style="padding:0px" class="hero wrap">
		<img src="/img/msu.png" style="width:100%; margin-top:10px;" >	
		<div class="text_over_image">
			<h1>EDUCATION</h1>
		</div>	
	</div>
</div>
<div class="panel" id="education-panel">
	<h2>B.A. International Relations | Michigan State University | 2010</h2>	
	<h2>Study Abroad: Golbalization in South Asia | Chennai, India | 2008</h2>
	<h2>Emergency Medical Technician | Lansing Community College | 2010</h2>
	<h2>Patagonia Mountaineering | The National Outdoor Leadership School | 2012</h2>
</div>


<div class="container-fluid" id="footer" style="margin-top:40px;">
	<div class="col-xs-12">
		<div class="row"><a name="contact"></a>
			<h3 style="margin-bottom: 25px; text-align:center;">
				<a href="mailto:wolffaar@gmail.com" target="_blank">EMAIL </a>|<a href="http://www.linkedin.com/in/aaronmwolff" target="_blank"> LINKEDIN</a>
			</h3>    
		</div>
		
	</div>
</div> 

<!-- <div class="ui-widget photo">
  <div class="ui-widget-header ui-corner-all">
    <a href="http://maps.google.com/maps?q=vienna,+austria&amp;z=11" data-geo="">Vienna, Austria</a>
  </div>
</div> -->

<script src="../../js/jquery.magnific-popup.js"></script>
<script>

$('body').flowtype({
   minimum   : 300,
   maximum   : 1100,
   minFont   : 12,
   maxFont   : 30,
   fontRatio : 30
});

$('h3').flowtype({
   minimum   : 300,
   maximum   : 1500,
   minFont   : 18,
   maxFont   : 30,
   fontRatio : 30
});

$('#tfa').flowtype({
   minimum   : 300,
   maximum   : 1100,
   minFont   : 11,
   maxFont   : 30,
   fontRatio : 40
});

// $('ul li').flowtype({
//    minimum   : 300,
//    maximum   : 1500,
//    minFont   : 16,
//    maxFont   : 20,
//    fontRatio : 30
// });

$('#name').flowtype({
   minimum   : 300,
   maximum   : 1500,
   minFont   : 20,
   maxFont   : 120,
   fontRatio : 10
});

$('#sub-name').flowtype({
   minimum   : 300,
   maximum   : 1500,
   minFont   : 12,
   maxFont   : 100,
   fontRatio : 30
});

$(document).ready(function() {
  $('.iframe-link').magnificPopup({type:'iframe'});
});

$('.test-popup-link').magnificPopup({ 
  type: 'iframe'
	// other options

});

$(document).ready(function() {
  $('.image-link').magnificPopup({type:'image'});
});

$('.patagonia-popup').magnificPopup({ 
  type: 'image'
	// other options

});


</script>

</body>
</html>
