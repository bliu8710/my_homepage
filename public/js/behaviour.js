$(document).ready(init);

function init () {
	$("#div-step2,#div-step3,#div-step4,.form-alert").hide();
	
	// step 1 next
	$("#div-step1 button.btn-next").click(function(){
		$('#div-step1').fadeOut("fast", function() {
			$('#div-step2').fadeIn("fast");
		});
	});

	// step 2 next
	$("#div-step2 button.btn-next").click(function(){
		$('#div-step2').fadeOut("fast", function() {
			$('#div-step3').fadeIn("fast");
		});
	});

	// step 2 prev
	$("#div-step2 button.btn-prev").click(function(){
		$('#div-step2').fadeOut("fast", function() {
			$('#div-step1').fadeIn("fast");
		});
	});

	// step 3 next
	$("#div-step3 button.btn-next").click(function(){
		$('#div-step3').fadeOut("fast", function() {
			$('#div-step4').fadeIn("fast");
		});
	});

	// step 3 prev
	$("#div-step3 button.btn-prev").click(function(){
		$('#div-step3').fadeOut("fast", function() {
			$('#div-step2').fadeIn("fast");
		});
	});
}