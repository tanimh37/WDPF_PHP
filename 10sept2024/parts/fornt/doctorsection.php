<section id="doctor" class="section-padding bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Our<span> Specialities</span></h3>
                        <span class="line"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="team-slider owl-carousel owl-theme">
					<?php 
					include_once ("admin/dbconfig.php");
					$sql = $db->query("SELECT * FROM doctors");
					while($row = $sql->fetch_assoc()) {

					?>
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php echo $row['photo'] ?>" alt="" />
						<div class="single-doctor-info">
							<h4><?php echo $row['doctorName'] ?></h4>
							<span><h4><?php echo $row['specilization'] ?></h4></span> 
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<h5>About Doctor</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
								<ul>
								   <li><a href="#">Get Appointment</a></li>
								</ul>
							</div>
						</div>
					</div>

					<?php } ?>
					<!-- end single doctor -->	

				
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>