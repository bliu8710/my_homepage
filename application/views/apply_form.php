<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="description" content="topofferedu.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/public/css/style.css">
	<title>Mentor apply - Top Offer Edu</title>
</head>
<body>
	<div class="banner"><p>GLOBAL MENTORING</p></div>
	<!--<div class="banner"><img src="<?php echo base_url()?>/public/img/banner.jpg" /></div>-->

	<div class="container">
		<form id="mentorApplyForm" class="form form-horizontal clearfix" method="post" action="http://www.chasefuture.com/en/mentors/apply?step=2">

			<div id="div-step1" class="clearfix hidden"  style="display:none;">

				<div class="span_left">
					<legend id="form-step1">Step 1/3 - Contact Information</legend>

					<fieldset class="well">
						<div class="control-group">
							<label><strong class="fc_red">*</strong><strong>First Name</strong></label>
							<input name="firstname" id="firstname" type="text">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong><strong>Last Name</strong></label>
							<input name="lastname" id="lastname" type="text">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Primary Email Address</label>
							<input class="input-p-level" name="email" id="email" type="email">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>University Email Address</label>
							<input class="input-p-level" name="email2" id="email2" type="email">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Cell Number</label>
							<input name="phone" id="phone" type="text" placeholder="01-206-948-6353">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Skype Name</label>
							<input name="skype" id="skype" type="text">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>LinkedIn Profile Link</label>
							<input class="input-block-level" name="linkedin" id="linkedin" type="text">
						</div>
						<div class="control-group">
							<label><strong class="fc_red">*</strong>Facebook Page Link</label>
							<input class="input-block-level" name="linkedin" id="linkedin" type="text">
						</div>
						<div class="control-group">
							<label class="checkbox">
							<input id="agree" name="agree" value="" type="checkbox" checked="checked">
							I Agree <a href="http://www.chasefuture.com/en/mentors/apply#agreement" data-toggle="modal">"Terms of Employment"</a> </label>
						</div>
						<div class="alert alert-block form-alert"></div>
						<div class="form-actions">
							<button type="submit" class="btn btn-success btn-large btn-next">Next &gt;</button>
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
					<h3><strong>Work part-time in TopOffer</strong></h3>
					<article>
						<p>We are inviting students and alumni from universities/colleges 
						all over the world to join our global network of part-time 
						consultants. You can mentor international applicants anywhere, 
						anytime with a commission-based payment.</p>
					</article>
					<h3><strong>Thanks for taking a moment to apply to join TopOffer!</strong></h3>
				</div>

			</div> <!-- end of id="div-step1" -->

			<div id="div-step2" class="span offset2 hidden">
				<legend>Step 2/3 -TopOffer Profile 1</legend>
				<fieldset class="well">
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Hometown / Nationality:</strong></label>
						<div class="controls">
							<input type="text" name="hometown" id="hometown" placeholder="Seattle / USA">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Current Location:</strong></label>
						<div class="controls">
							<input name="location" id="location" type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Undergraduate Name,Subject / Degree and Year</strong> <font class="fc_main">(e.g., B.S. Yale | Statistics | 2012)</font></label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="degree" id="degree" placeholder="B.S. Yale | Statistics | 2012">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Graduate School Name,Subject / Degree and Year <font class="fc_main">(e.g., Ph. D. Stanford | Biology |2016)</font></label>
						<div class="controls">
							<input type="text" name="degree2" id="degree2" placeholder="Ph. D. Stanford | Biology | 2016" class="input-xlarge">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">What other universities (Undergraduate / Graduate) were you admitted to? <font class="fc_main">(e.g., Harvard, Princeton, Williams, UChicago)</font></label>
						<div class="controls">
							<input type="text" name="degree3" id="degree3" placeholder="Harvard, Princeton, Williams, UChicago" class="input-xlarge">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><strong class="fc_red">*</strong><strong>Work History → Previous Employer(s) and Position(s)</strong> <font class="fc_main">(e.g., Summer Analyst, JP Morgan)</font></label>
						<div class="controls">
							<textarea type="text" name="job" id="job" placeholder="Summer Analyst, JP Morgan"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">University Activities + Extracurriculars <font class="fc_main">(e.g., VP of Campus Investment Club, Member of Film Society, Baseball Team) </font> </label>
						<div class="controls">
							<textarea type="text" name="activities" id="activities" placeholder="VP of Campus Investment Club, Member of Film Society, Baseball Team"></textarea>
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
						<button type="submit" class="btn btn-success btn-large btn-next">Next &gt;</button>
					</div>
				</fieldset>
			</div> <!-- end of id="div-step2" -->


		</form>
	</div> <!-- end of id="container" -->
</body>
</html>
