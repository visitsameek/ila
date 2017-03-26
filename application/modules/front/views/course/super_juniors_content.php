					<div class="inner-sections" id="inner-sections">
						<!-- BE THE PART OF VIETNAM EG Section-->
						<div class="video-wrapper clearfix">
							<div class="container">
								<h5>Take a look at our <span>Super Juniors Class</span></h5>
			            <div class="video-play-wrap video-blcok">
			            		<iframe src="https://www.youtube.com/embed/ICF3-a0ER3Y" frameborder="0" allowfullscreen></iframe>
			            </div>
			            <p>The core curriculum of Super Juniors covers the four language skills: speaking, listening, reading and writing, with a strong emphasis on speaking and listening.</p>
							</div>
						</div>
						<!-- age-category section-->
						<div class="age-categories">
						<?php
						  if(!empty($courses)) {
							  foreach($courses AS $rec) {
						 ?>
							<div class="age-cat-blcok">
								<div class="container">
									<h5><?php echo $rec->program_name;?></h5>
									<div clas="">
										<img src="<?php echo base_url(); ?>front/images/img-3to4year-kids.jpg" alt="<?php echo $rec->program_name;?>"/>
									</div>
									<div class="age-categories-container">
										<p>Each ILA Super Juniors level has a carefully constructed curriculum which takes into account the age and competencies of the students.</p>
										<div class="btn-common-wrapper">
											<a href="<?php echo base_url('super-juniors-levels/'.$rec->course_id.'/'.$rec->id); ?>" class="btn-blue btn-common">Know More</a>
											<a href="<?php echo base_url('schedules/'.$rec->course_id); ?>" class="btn-blue btn-common btn-black">View Schedule</a>
										</div>
									</div>
								</div>
							</div>
						<?php } } ?>
						</div>
						<!-- Super Juniors videos -->
						<div class="videos-section">
							<div class="ila-areas-video superjunior-class-video video-bg-green clearfix">
								<div class="container">
									<h5>Super Juniors Class <span>Virtual Tour</span></h5>
				            <div class="video-play-wrap video-blcok">
				            		<iframe src="https://www.youtube.com/embed/ICF3-a0ER3Y" frameborder="0" allowfullscreen></iframe>
				            </div>
				            <p>ILA teachers focus on encouraging students to communicate using fun yet effective activities.</p>
								</div>
							</div>
							<div class="ila-areas-video superjunior-parent-video video-bg-yellow clearfix">
								<div class="container">
									<h5>Meet Super Juniors Parents</h5>
				            <div class="video-play-wrap video-blcok">
				            		<iframe src="https://www.youtube.com/embed/ICF3-a0ER3Y" frameborder="0" allowfullscreen></iframe>
				            </div>
				            <p>Parents of Truong Nguyen Quynh Super Junior Level - Beginner</p>
				            <a href="<?php echo base_url('stories'); ?>" class="content-link">See All Testimonials</a>
								</div>
							</div>
						</div>
						
						<!-- Why Choose ILA Section-->
						<?php
						  $this->load->view('why_choose_ila');
						 ?>
					</div>