$(document).ready(init);

function init () {
	//$("#div-step2,#div-step3,#div-step4,.form-alert").hide();
	$("#div-step2,#div-step3,#div-step4,.form-alert,#photo-url,#cv-url").hide();
	
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
	/*$("#div-step3 button.btn-next").click(function(){
		$('#div-step3').fadeOut("fast", function() {
			$('#div-step4').fadeIn("fast");
		});
	});*/

	// step 3 prev
	$("#div-step3 button.btn-prev").click(function(){
		$('#div-step3').fadeOut("fast", function() {
			$('#div-step2').fadeIn("fast");
		});
	});

	if ($("#photo-file").val() && $("#photo-file").val().length > 0) {
		$("#photo-url").show();
		$("#photo-url").val($("#photo-file").val());
	}
	$("#photo-file").change(function(){
		var value = $(this).val();
		if (value && value.length > 0) {
			$("#photo-url").show();
			$("#photo-url").val(value);
		}
	});

	if ($("#cv-file").val() && $("#cv-file").val().length > 0) {
		$("#cv-url").show();
		$("#cv-url").val($("#cv-file").val());
	}
	$("#cv-file").change(function(){
		var value = $(this).val();
		if (value && value.length > 0) {
			$("#cv-url").show();
			$("#cv-url").val(value);
		}
	});


	$("#languages_other_box").click(function() {
		if( $(this).prop("checked")) {
 			$("#languages_other").removeAttr("disabled"); 
		} else {
			$("#languages_other").attr("disabled","disabled");
			$("#languages_other").val('');
		}
	});

    $( "#dialog-message" ).dialog({
		modal: true,
		buttons: {
			Ok: function() {
				$( this ).dialog( "close" );
			}
      	},
		autoOpen: false,
		show: {
			effect: "blind",
			duration: 500
		},
		hide: {
			effect: "blind",
			duration: 300
		},
		width : 560,

	});

	$( "#agreement" ).click(function() {
		$( "#dialog-message" ).dialog( "open" );
	});
}