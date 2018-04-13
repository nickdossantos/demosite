<?php
include("header.html");
?>

<main>
	
<aside>
	<h2>Our Products</h2>
	<h4>Creatine</h4>
	<a href="products.html">
	<img src="images/sup1.png" alt="Creatine" height="75" width= "80" align="middle">
</a>
	<h4>Protein Shakes</h4>
	<a href="products.html">
	<img src="images/sup2.png" alt="Protein" height="75" width= "80" align="middle">
</a>	
	<h4>Energy</h4>
	<a href="products.html">
	<img src="images/sup3.png" alt="C4" height="75" width= "80" align="middle">
</a>
	<h4>Acessories</h4>
	<a href="products.html">
	<img src="images/sup4.png" alt="Blender Bottle" height="75" width= "80" align="middle">
</a>
</aside>

<section>
		<h2>Why United Fitness?</h2>
		<p> When you enter an United Fitness, you know what to expect. The state of the art facility and equipment are familiar and comfortable, but what we are most proud of are the people who are there to serve you. The people who warmly greet you, expertly train you, enthusiastically teach you. It is the entire team, our best resource, who is dedicated to making your fitness experience an exceptional one..</p>
		<p></p>
		<p>Fitness International, LLC, is one of the largest and fastest growing club chains in the fitness industry. Not only is it a great place to workout, it’s also a great place to work! We offer competitive pay, benefits and complimentary membership privileges. Plus, you could find yourself working beside some of the top professionals in the industry.</p>
	</section>

	 <!--  Outer wrapper for presentation only, this can be anything you like -->
	 <h3>Anyone Can GET BIG</h3>
      <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="img/arnold.jpg" title="Arnold Getting Big"></li>
          <li><img src="img/domj.jpg" title="Brad Hitting the Squats"></li>
          <li><img src="img/kali.jpg" title="Kali Muscle"></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->

      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true
          });

        });
      </script>

</main>

<?php
include("footer.html");
?>


