<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="description" content="topofferedu.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo base_url()?>/public/js/behaviour.js"></script>
	<title>Mentor apply - Top Offer Edu</title>
</head>
<body>
	<!--<div class="banner"><p>GLOBAL MENTORING</p></div>-->
	<!--<div class="banner"><img src="<?php echo base_url()?>/public/img/banner.jpg" /></div>-->
	<?php echo validation_errors(); ?>

	<div class="left">
	<div class="logo">
		<img src="<?php echo base_url()?>/public/img/logo.jpg" /></div>
	</div>
</div>
	<div class="container">
		<form id="mentorApplyForm" class="form form-horizontal clearfix" method="post" action="<?php echo base_url()?>/mentor/apply_exec" enctype="multipart/form-data">

			<div id="div-step1" class="clearfix">
				<div class="span_left">
					<legend id="form-step1">Step 1/3 - Contact Information</legend>

					<fieldset class="well">
						<div class="control-group">
							<label><strong class="fc_red">*</strong><strong>First Name</strong></label>
							<input name="firstname" id="firstname" type="text" placeholder="Caroline" value="<?php echo set_value('firstname'); ?>">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong><strong>Last Name</strong></label>
							<input name="lastname" id="lastname" type="text" placeholder="Brown" value="<?php echo set_value('lastname'); ?>">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Primary Email Address</label>
							<input class="input-p-level" name="email" id="email" type="email"  placeholder="caroline.brown@gmail.com" value="<?php echo set_value('email'); ?>">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>University Email Address</label>
							<input class="input-p-level" name="email2" id="email2" type="email" placeholder="caroline.brown1@cam.ac.uk"  value="<?php echo set_value('email2'); ?>">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Cell Number</label>
							<input name="phone" id="phone" type="text" placeholder="01-204-389-7402" value="<?php echo set_value('phone'); ?>">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Skype Name</label>
							<input name="skype" id="skype" type="text" placeholder="Caroline Brown" value="<?php echo set_value('skype'); ?>">
						</div>
						<div class="control-group">
							<label>LinkedIn Profile Link</label>
							<input class="input-block-level" name="linkedin" id="linkedin" type="text" placeholder="http://www.linkedin.com/profile/..." value="<?php echo set_value('linkedin'); ?>">
						</div>
						<div class="control-group">
							<label>Facebook Page Link</label>
							<input class="input-block-level" name="facebook" id="facebook" type="text" placeholder="http://www.facebook.com/c.b..." value="<?php echo set_value('facebook'); ?>">
						</div>
						<div class="control-group">
							<label class="checkbox">
							<input id="agree" name="agree" value="" type="checkbox">
							I Agree <a href="" data-toggle="modal">"Terms of Employment"</a> </label>
						</div>
						<div class="alert alert-block form-alert"></div>
						<div class="form-actions">
							<button type="button" class="btn btn-success btn-large btn-next">Next &gt;</button>
						</div>
					</fieldset>
				</div>

				<div class="span_right">
					<h3><strong>What is TopOffer?</strong></h3>
					<article>
						<p> TopOffer is a global network of university/college students and
						alumni dedicated to helping college applicants with their
						admission applications.</p>
						<p>Our consultants provide applicants with admission guidance, 
						essay edits, resume building, interview preparation, and 
						scholarship advice.</p>
					</article>
					<br>
					<br>
					<h3><strong>Work part-time in TopOffer</strong></h3>
					<article>
						<p>We are inviting students and alumni from universities/colleges 
						all over the world to join our global network of part-time 
						consultants. You can mentor international applicants anywhere, 
						anytime with a commission-based payment.</p>
					</article>
					<br>
					<br>
					<h3><strong>Thanks!</strong></h3>
					<article>
						<p>Thanks for taking a moment to apply to join TopOffer!</p>
					</article>
				</div>

			</div> <!-- end of id="div-step1" -->

			<div id="div-step2" class="span offset2">
				<legend>Step 2/3 -TopOffer Consultant Profile</legend>
				<fieldset class="well">
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Hometown / Nationality</strong></label>
						<div class="controls">
							<input type="text" name="hometown" id="hometown" placeholder="Seattle/USA">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Current Location</strong></label>
						<div class="controls">
							<input name="location" id="location" type="text" placeholder="New York/USA">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Undergraduate School Name,<br>  Subject, Degree, Graduation Year</strong></label>
						<div class="controls">
							<input type="text" name="ugra_school" id="ugra_school" placeholder="Yale" style="width:120px">
							<input type="text" name="ugra_subject" id="ugra_subject" placeholder="Physics" style="width:140px">
							<input type="text" name="ugra_degree" id="ugra_degree" placeholder="B.S." style="width:35px">
							<input type="text" name="ugra_year" id="ugra_year" placeholder="2012" style="width:35px">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Graduate School Name, Subject,<br> Degree, Graduation Year</label>
						<div class="controls">
							<input type="text" name="gra_school" id="gra_school" placeholder="Penn U" style="width:120px">
							<input type="text" name="gra_subject" id="gra_subject" placeholder="History" style="width:140px">
							<input type="text" name="gra_degree" id="gra_degree" placeholder="Ph.D" style="width:35px">
							<input type="text" name="gra_year" id="gra_year" placeholder="2014" style="width:35px">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">What other universities (Undergraduate /<br> Graduate) were you admitted to?</label>
						<div class="controls">
							<input type="text" name="degree3" id="degree3" placeholder="Harvard, Princeton, Williams, UChicago" style="width:384px">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Work History(Previous Employers<br> and Positions)</strong></label>
						<div class="controls">
							<textarea type="text" name="job" id="job" placeholder="Summer Analyst, Goldman Sachs"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">University Activities / Extracurriculars</label>
						<div class="controls">
							<textarea type="text" name="activities" id="activities" placeholder="VP of Campus Investment Club, Member of Poetry Society, Football Team"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong> <strong>Languages that you are comfortable advising students in </strong></label>
						<div class="controls">
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Mandarin" checked="checked">
								Mandarin
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Cantonese">
								Cantonese
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="English">
								English
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Spanish">
								Spanish
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Arabic">
								Arabic
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Hindi">
								Hindi
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Russian">
								Russian
							</label>
							<label class="checkbox inline">
								<input name="languages[]" type="checkbox" value="Korean">
								Korean
							</label>
						</div>

						<div class="controls">
							<label class="checkbox inline">
								<input name="languages_other_box" id="languages_other_box" type="checkbox" value="1">
								Other
							</label>
							<input style="margin-top: 5px;" class="input-xlarge" name="languages_other" id="languages_other" type="text" disabled="disabled" placeholder="Input your language" value="">
						</div>
					</div>

					<div class="alert alert-block form-alert"></div>
					<div class="form-actions">
						<button type="button" class="btn btn-large btn-prev">&lt; Prev</button>
						&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-success btn-large btn-next">Next &gt;</button>
					</div>
				</fieldset>
			</div> <!-- end of id="div-step2" -->

			<div id="div-step3" class="span offset2">
				<legend>Step 3/3 - Required Application Materials</legend>
				<fieldset class="well">
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong>Headshot photo – a friendly photo with (semi)formal or graduation attire</label>
						<div class="controls">
							<span class="uploadify-button">SELECT FILES<input type="file" name="photofile" id="photo-file"/></span><br>
							<input name="photo-url" id="photo-url" class="input-xlarge" type="text" value="" disabled="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong>Your resume / CV (PDF&nbsp;file only)</label>
						<div class="controls">
							<span class="uploadify-button">SELECT FILES<input type="file" name="cvfile" id="cv-file"/></span><br>
							<input name="cv-url" id="cv-url" class="input-xlarge" type="text" value="" disabled="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">How did you hear about TopOffer? </label>
						<div class="controls">
							<select name="hearabout" id="hearabout">
								<option value="Email" selected="selected"> Email </option>
								<option value="Facebook"> Facebook </option>
								<option value="ChaseFuture Strategy Consultant"> TopOffer Consultant </option>
								<option value="Friend"> Friend </option>
							</select>
						</div>
						<div class="controls hidden" style="margin-top: 10px;">
							<input type="text" name="friend" id="friend" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">
							<strong class="fc_red">*</strong>Share one advice for an international student starting at your university<br>
							<font class="fc_main">(&lt; 100 words)</font>
						</label>
						<div class="controls">
							<textarea class="charlimit" data-charlimit="1200" type="text" name="blog1" id="blog1"></textarea>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">
							<strong class="fc_red">*</strong>Share one of your greatest insights on the university admissions process<br>
							<font class="fc_main">(&lt; 100 words)</font>
						</label>
						<div class="controls">
							<textarea class="charlimit" data-charlimit="1200" type="text" name="blog2" id="blog2"></textarea>
						</div>
					</div>

					<div class="alert alert-block form-alert"></div>
					<div class="form-actions">
						<button type="button" class="btn btn-large btn-prev">&lt; Prev</button>
						&nbsp;&nbsp;&nbsp;
						<button id="btn_submit" type="summit" class="btn btn-success btn-large btn-next">Submit</button>
					</div>
				</fieldset>
			</div> <!-- end of id="div-step2" -->

			<div id="div-step4" class="span offset2">
				<div class="alert alert-success">
					<h3>Thank you for applying to join TopOffer!!</h3>
					<a href="<?php echo base_url()?>/mentor/apply" class="btn btn-success">Back To Home Page</a><br>
					<br>
					<p>This message confirms that we have received your application. <br>
					<br>
					TopOffer looks forward to reviewing your application in the coming days. <br>
					<br>
					Very best,<br>
					<br>
					International Access Team!<br>
					TopOffer!<br>
					</p>
				</div>
			</div>

		</form>
	</div> <!-- end of id="container" -->
</body>
</html>
