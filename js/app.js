$(function(){
	//Inputs for shapeInputs template for dynamically rendering inputs based on the type 
	//of shape selected by user
	var shapeInputs = {
		'circle' : { 	labelName: 'Diameter :', 
						inputPlaceholder: 'diameter', 
						inputName : 'diameter'
					},
		'square' : { 
						labelName: 'Width :', 
						inputPlaceholder: 'width', 
						inputName : 'width'
					},
		'elipse' : [
	   					{ 
	   						labelName: 'Height :', 
	   						inputPlaceholder: 'height', 
	   						inputName : 'height'
	   					},
	   					{ 
	   						labelName: 'Width  :', 
	   						inputPlaceholder: 'width', 
	   						inputName : 'width'
	   					}
	   				],
		'rectangle' : [
	   					{ 
	   						labelName: 'Height :', 
	   						inputPlaceholder: 'height', 
	   						inputName : 'height'
	   					},
	   					{ 
	   						labelName: 'Width  :', 
	   						inputPlaceholder: 'width', 
	   						inputName : 'width'
	   					}
	   				]
	};

	//Step1 button click event
	$('#btnStep1').click(function(e){
		var selected_shape	 = $("input[name='shapes']:checked"). val();
		
		$('.steps').hide();
		$('#shape_type').val(selected_shape);
		$('.shape_name').html(selected_shape);

		dna.empty('shapeInputs', { fade: false });
		dna.clone('shapeInputs', shapeInputs[selected_shape]);
		$('#step2').show();
	});

	//Step2 button click event
	$('#btnStep2').click(function(e){
		e.preventDefault();
		$('.steps').hide();

		var shapeParameters = {};
		var selected_shape = $("input[name='shapes']:checked"). val();

		if ( selected_shape == 'circle') {
		   	shapeParameters = { content: 'a Diameter of ' + $('input[name="diameter"]').val() };
		}
		if ( selected_shape == 'square') {
		   	shapeParameters = { content: 'a Width of ' + $('input[name="width"]').val() };
		}
		if ( selected_shape == 'elipse' || selected_shape == 'rectangle') {
		   	shapeParameters = { content: 'a Width of ' + $('input[name="width"]').val() + ' and Height of ' + $('input[name="height"]').val() };
		}

		dna.empty('shapeParameters', { fade: false });
		dna.clone('shapeParameters', shapeParameters);


		//Do ajax to fetch the calculated Shape area
		var req = $.ajax({
				url : $('#shapeForm').attr('action'),
				method : "POST",
				data : $('#shapeForm').serialize(),
			});

		req.done(function(resp){
			$('#calculatedArea').html(resp);
		});

		$('#step3').show();
	});

	//Step3 button click event
	$('#btnStep3').click(function(e){
		$('.steps').hide();
		$('#step1').show();
	});
	//Cancel button click event on step 2
	$('.cancelForm').click(function(e){
		e.preventDefault();
		$('.steps').hide();
		$('#step1').show();			
	})
})