$(document).ready(init);

function init () {
	//$("#div-step2,#div-step3,#div-step4,.form-alert").hide();
	$("#div-step2,#div-step3,#div-step4,.form-alert,#photo-url,#cv-url").hide();

	$("input").focus(function(){
		$('.alert').html('&nbsp;');
		$('.alert').hide();
	});
	
	// step 1 next
	$("#div-step1 button.btn-next").click(function(){

		var required_fields = ['firstname', 'lastname', 'email', 'email2', 'phone', 'skype'];
		var err_msg = submit_check(required_fields);
		if (err_msg) {
			console.log($('#div-step1 .alert'));
			$('#div-step1 .alert').html(err_msg);
			$('#div-step1 .alert').show();

		} else if (!$('#agree').prop("checked")) {
			$('#div-step1 .alert').html('Agreement to "Terms of Employment" is required');
			$('#div-step1 .alert').show();
		} else {
			$('#div-step1').fadeOut("fast", function() {
				$('#div-step2').fadeIn("fast");
			});
		}

	});


	// step 2 next
	$("#div-step2 button.btn-next").click(function(){
		var required_fields = ['hometown', 'location', 'ugra_school', 'ugra_subject', 'ugra_degree', 'ugra_degree', 'ugra_year', 'job'];
		var err_msg = submit_check(required_fields);
		if (err_msg) {
			console.log($('#div-step2 .alert'));
			$('#div-step2 .alert').html(err_msg);
			$('#div-step2 .alert').show();

		} else {
			$('#div-step2').fadeOut("fast", function() {
				$('#div-step3').fadeIn("fast");
			});
		}
	});

	// step 2 prev
	$("#div-step2 button.btn-prev").click(function(){
		$('#div-step2').fadeOut("fast", function() {
			$('#div-step1').fadeIn("fast");
		});
	});

	// step 3 next
	$("#div-step3 button.btn-next").click(function(){
		var required_fields = ['photo-url', 'cv-url', 'blog1', 'blog2'];
		var err_msg = submit_check(required_fields);
		if (err_msg) {
			console.log($('#div-step3 .alert'));
			$('#div-step3 .alert').html(err_msg);
			$('#div-step3 .alert').show();

		} else {
			document.forms['mentorApplyForm'].submit();
		}
	});

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

function submit_check(fieldscheckarr) {
	var err_msg = '';

	for (var i = 0; fieldscheckarr[i]; i++) {
		var field_obj = $('#' + fieldscheckarr[i]);
		if(!field_obj || field_obj.val() == '') {
			//console.log(field_obj.html());
			var label_obj = field_obj.siblings("label")[0] ? field_obj.siblings("label")[0] : field_obj.parent().siblings("label")[0];
			var label = label_obj.innerHTML;

			err_msg = err_msg + label + " is required";
			break;
		}
	}

	return err_msg;
}
