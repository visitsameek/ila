					<div class="inner-sections" id="inner-sections">
					<!-- Course Shedule Form -->
						<div class="shedule-form">
							<div class="select-center">
								<div class="container">
									<h5>Select your Centre</h5>
									<div class="select-center-fields">
										<div class="dropdown-wrapper inp-field">
											<input class="select-input" type="text" readonly="true" name="course" value="<?php echo !empty($course_name) ? $course_name : ''; ?>" />
											<label>Select Course</label>
											<ul class="dropdown">
											<?php 
												if(!empty($course_list)){
													foreach ($course_list as $course){ ?>
														<li><a href="<?php echo base_url('centers/'.$course->id); ?>"><?php echo $course->course_title; ?></a></li>
											<?php } } ?>
											</ul>
											<span class="bar"></span>
										</div>
										<div class="dropdown-wrapper inp-field">
											<input class="select-input" type="text" readonly="true" name="city" value="<?php echo !empty($city_name) ? $city_name : ''; ?>" />
											<label>Select City</label>
											<ul class="dropdown">
											<?php 
												if(!empty($city_list)){
													foreach ($city_list as $city){ ?>
														<li><a href="<?php echo base_url('centers/'.$city->id); ?>"><?php echo $city->city_name; ?></a></li>
											<?php } } ?>
											</ul>
											<span class="bar"></span>
										</div>
										<div class="dropdown-wrapper inp-field">
											<input class="select-input" type="text" readonly="true" name="center" value="<?php echo !empty($center_name) ? $center_name : ''; ?>" />
											<label>Select Training Center</label>
											<ul class="dropdown">
											<?php 
												if(!empty($center_list)){
													foreach ($center_list as $center){ ?>
														<li><a href="<?php echo base_url('centers/'.$center->id); ?>"><?php echo $center->title; ?></a></li>
											<?php } } ?>
											</ul>
											<span class="bar"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="schedule-info-field">
								<div class="dropdown-wrapper inp-field">
										<input class="select-input" type="text" readonly="true" name="level" value="<?php echo !empty($level_name) ? $level_name : ''; ?>" />
										<label>Select Level</label>
										<ul class="dropdown">
										<?php 
											if(!empty($level_list)){
												foreach ($level_list as $level){ ?>
													<li><a href="<?php echo base_url('centers/'.$level->id); ?>"><?php echo $level->title; ?></a></li>
										<?php } } ?>
										</ul>
										<span class="bar"></span>
								</div>
								<div class="dropdown-wrapper inp-field">
									<input class="select-input" type="text" readonly="true" name="level" value="<?php echo !empty($time_name) ? $time_name : ''; ?>" />
									<label>Select your Time</label>
									<ul class="dropdown">
										<?php 
											if(!empty($time_list)){
												foreach ($time_list as $time){ ?>
													<li><a href="#"><?php echo $time->time_period; ?></a></li>
										<?php } } ?>
									</ul>
									<span class="bar"></span>
								</div>
								<div class="dropdown-wrapper inp-field">
									<input class="select-input" type="text" readonly="true" name="status" value="<?php echo !empty($status_name) ? $status_name : ''; ?>" />
									<label>Select Status</label>
									<ul class="dropdown">
										<li><a href="#">Brand New</a></li>
										<li><a href="#">Next Class</a></li>
									</ul>
									<span class="bar"></span>
								</div>
							</div>
						</div>
						<!-- Course shedule blocks -->
						<div class="shedule-blocks bg-light-blue">
							<div class="container">
							<?php
							  if(!empty($schedule_list)) {
								  foreach($schedule_list AS $rec) {
							 ?>
								<div class='shedule-block'>
									<table class="schedule-table" cellpadding="0" cellspacing="0">
										<tr>
											<td>Class Code</td>
											<td><?php echo $rec->class_code;?></td>
										</tr>
										<tr>
											<td>Weeks</td>
											<td><?php echo $rec->weeks;?></td>
										</tr>
										<tr>
											<td>Hours</td>
											<td><?php echo $rec->hours;?></td>
										</tr>
										<tr>
											<td>Days</td>
											<td><?php echo $rec->days;?></td>
										</tr>
										<tr>
											<td>Time</td>
											<td><?php echo $rec->class_time_from.' - '.$rec->class_time_to;?></td>
										</tr>
										<tr>
											<td>Start Date</td>
											<td>
											<?php
								                $start_date = explode('-', $rec->start_date);
												echo $start_date[2].'/'.$start_date[1].'/'.$start_date[0];?>
											</td>
										</tr>
										<tr>
											<td>Fee (VND)</td>
											<td><?php echo $rec->fee;?></td>
										</tr>
										<tr>
											<td>Status</td>
											<td><?php echo $rec->status;?></td>
										</tr>
									</table>
									<div class="btn-wrapper">
										<a href="#" class="btn-blue btn-common">Register</a>
									</div>
								</div>
							<?php } } ?>
							</div>
						</div>
					</div>
				</div>