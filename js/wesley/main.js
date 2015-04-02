$(document).ready(function(){
	$("#category").on('change', function(e){
		e.preventDefault();

		var subcategoryKey = $(this).val();

		var categories = [
			oilandgas,
			chemicals
		];

		console.log(categories[0])

		var oilandgas = {
			"Exploration & Production": "Exploration & Production",
		  	"Integrated Oil & Gas": "Integrated Oil & Gas",
		  	"Oil Equipment & Services": "Oil Equipment & Services",
		  	"Pipelines": "Pipelines",
		  	"Renewable Energy Equipment": "Renewable Energy Equipment",
		  	"Alternative Fuels": "Alternative Fuels"
		};

		console.log(oilandgas)

		var chemicals = {
			"Commodity Chemicals": "Commodity Chemicals",
		  	"Specialty Chemicals": "Specialty Chemicals"		  	
		};

		// var $el = $("#subcategory");
		// $el.empty(); // remove old options
		// $.each(newOptions, function(value,key) {
		//   	$el.append($("<option></option>").attr("value", value).text(key));
		// });

	});
});