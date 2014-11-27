$(document).ready(function() {

	$('#btnGenerate').hide();
	$('#btnRegresar').hide();
	$('#card').hide();
	$('#results').hide();

	$('#btnPreview').click(function() {

		if ( $("#frm_name").val() == "" ||
			$("#frm_jobtitle").val() == "") {

			$('#results').slideDown('fast', function() {
				$("#results").html("Oops! it seems you are missing some fields");

				setTimeout(function() {
					$('#results').slideUp("slow");
				}, 2500);	
			});

		} else {

			$('#btnGenerate').show();

			if ( $('#card').is(':hidden') ) {
				$('#logo-main').fadeOut('slow', function() {
					$('#card').fadeIn('slow');
					$('#btnDownload').fadeIn('slow');
				});	
			}


			if ($("#frm_cellphone").val() != "") {

				var phone = [ $("#frm_phone").val().slice(0, 3), '.', $("#frm_phone").val().slice(3)  ].join('');

				var cellphone = [  $("#frm_cellphone").val().slice(0, 3), '.', $("#frm_cellphone").val().slice(3)  ].join('');
				cellphone = [  cellphone.slice(0, 7), '.', cellphone.slice(7)  ].join('');

				if(phone.indexOf("+511") != -1) {
    				$('#cellphone').html("<span class=\"bolder\">T. </span> "+ phone+" <span class=\"bolder\">C. </span> (+511) "+cellphone);	
				} else {
					$('#cellphone').html("<span class=\"bolder\">T. </span> (+511) " + phone+" <span class=\"bolder\">C. </span> (+511) "+cellphone);	
				}

				
			}

			$('#name').html($("#frm_name").val());
			$('#jobtitle').html($("#frm_jobtitle").val());
			$('#mail').html("<span class=\"bolder\">M. </span>" + $("#frm_mail").val());
			$('#address').html($("#frm_address").val());

			$( ".wrapper2" ).css("padding-top", "250px");
		}

	});

	$('#btnGenerate').click(function() {
		convertToHTMLCanvasAndSave();
	});


	function convertToHTMLCanvasAndSave() {
		
		var id = document.getElementById("card");	
			
			html2canvas(id, {
	        proxy: "https://html2canvas.appspot.com/query",
	        onrendered: function(canvas) {
		
				var cur_path = "../cards_uploads"
	            var img = canvas.toDataURL("image/png");
	            var output = img.replace(/^data:image\/(png|jpg);base64,/, "");
	            var output = encodeURIComponent(img); 
	
	            var Parameters = "image=" + output + "&filedir=" + cur_path;

	            $.ajax({
	                type: "POST",
	                url: "controller/processorImage.php",
	                data: Parameters,
	                success : function(data) {

	                	$('body').html(
	                		"<a class=\"btnDownload\" href=\"controller/pro.php?img="+data+"\">DOWNLOAD</a>"
	                		+
	                		"<a id=\"btnRegresar\" class=\"btnRegresar\" href=\"./\">BACK</a>"
							
	                	);
	                }
	            }).done(function() {});
			}
	    });		
	}
});