<?php
    require "header.php";
    include 'config.php';
?>
			<!-- Responsive Tabs -->
			<div class="container">
				
                    
				 <div class="row">
					<div class="col-md-12 animate-box">
						
						<h2 style="float:right;" >   : نتيجة بحثك </h2>
					<br><br><br>
				
					<div    class="col-md-6 animate-box">
						<div  class="panel-group fh5co-accordion" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default ">
				    <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				      <h4 class="panel-title">
				      	
				        <a class="accordion-toggle">
				          ******************
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
						#############
						###############
						#######
						####################
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				      <h4 class="panel-title">
				      	
				        <a class="accordion-toggle">
				          ********** ********************* </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
           #####################
		   ###################
		   #############
		   #####################
					  </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				      <h4 class="panel-title">

				        <a  href="org.php"  class="accordion-toggle">*****************</a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
						##########
						###########
						#################
						#########3
				      </div>
				    </div>
				  </div>
				</div>
				</div>
					
					
					
					
                    <!--
                    <div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">About us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima delectus dolorem fugit totam, commodi ad.</p>
						<p><a href="#" class="btn btn-outline btn-sm">I'm a button</a></p>
					</div>
                    !-->
                    
                    <!--
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">Links</h3>
						<ul class="fh5co-footer-links">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Our Careers</a></li>
							<li><a href="#">Support &amp; FAQ's</a></li>
							<li><a href="#">Sign up</a></li>
							<li><a href="#">Log in</a></li>
						</ul>
					</div>
                    !-->



	</body>
</html>

<?php
    mysqli_close($conn);
    require "footer.php";
    ?>
