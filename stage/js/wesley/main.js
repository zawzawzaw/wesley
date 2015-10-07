$(document).ready(function(){

	var oilandgas = {
		"": "Sector",
		"Exploration & Production": "Exploration & Production",
	  	"Integrated Oil & Gas": "Integrated Oil & Gas",
	  	"Oil Equipment & Services": "Oil Equipment & Services",
	  	"Pipelines": "Pipelines",
	  	"Renewable Energy Equipment": "Renewable Energy Equipment",
	  	"Alternative Fuels": "Alternative Fuels"
	};

	var chemicals = {
		"": "Sector",
		"Commodity Chemicals": "Commodity Chemicals",
	  	"Specialty Chemicals": "Specialty Chemicals"		  	
	};

	var basicresources = {
		"": "Sector",
		"Forestry": "Forestry",
		"Paper": "Paper",
		"Aluminum": "Aluminum",
		"Nonferrous Metals": "Nonferrous Metals",
		"Iron & Steel": "Iron & Steel",
		"Coal": "Coal",
		"Diamonds & Gemstones": "Diamonds & Gemstones",
		"General Mining": "General Mining",
		"Gold Mining": "Gold Mining",
		"Platinum & Precious Metals": "Platinum & Precious Metals"
	};

	var construction = {
		"": "Sector",
		"Building Materials & Fixtures": "Building Materials & Fixtures",
		"Heavy Construction": "Heavy Construction"			
	};

	var industrial = {
		"": "Sector",
		"Aerospace": "Aerospace",
		"Defense": "Defense",		
		"Containers & Packaging": "Containers & Packaging",	
		"Diversified Industrials": "Diversified Industrials",			
		"Electrical Components & Equipment": "Electrical Components & Equipment",			
		"Electronic Equipment": "Electronic Equipment",			
		"Commercial Vehicles & Trucks": "Commercial Vehicles & Trucks",			
		"Industrial Machinery": "Industrial Machinery",			
		"Delivery Services": "Delivery Services",			
		"Marine Transportation": "Marine Transportation",			
		"Railroads": "Railroads",			
		"Transportation Services": "Transportation Services",			
		"Trucking": "Trucking",			
		"Business Support Services": "Business Support Services",			
		"Business Training & Employment Agencies": "Business Training & Employment Agencies",			
		"Financial Administration": "Financial Administration",			
		"Industrial Suppliers": "Industrial Suppliers",			
		"Waste & Disposal Services": "Waste & Disposal Services"
	};

	var automobiles = {
		"": "Sector",
		"Automobiles": "Automobiles",
		"Auto Parts": "Auto Parts",
		"Tires": "Tires"			
	};

	var food = {
		"": "Sector",
		"Brewers": "Brewers",
		"Distillers & Vintners": "Distillers & Vintners",
		"Soft Drinks": "Soft Drinks",		
		"Farming & Fishing": "Farming & Fishing",		
		"Food Products": "Food Products"
	};

	var personal = {
		"": "Sector",
		"Durable Household Products": "Durable Household Products",			
		"Nondurable Household Products": "Nondurable Household Products",			
		"Furnishings": "Furnishings",			
		"Home Construction": "Home Construction",			
		"Consumer Electronics": "Consumer Electronics",			
		"Recreational Products": "Recreational Products",			
		"Toys": "Toys",			
		"Clothing & Accessories": "Clothing & Accessories",			
		"Footwear": "Footwear",			
		"Personal Products": "Personal Products",			
		"Tobacco": "Tobacco"		
	};

	var healthcare = {
		"": "Sector",
		"Health Care Providers": "Health Care Providers",			
		"Medical Equipment": "Medical Equipment",			
		"Medical Supplies": "Medical Supplies",			
		"Biotechnology": "Biotechnology",			
		"Pharmaceuticals": "Pharmaceuticals"			
	};

	var retail = {
		"": "Sector",
		"Drug Retailers": "Drug Retailers",			
		"Food Retailers & Wholesalers": "Food Retailers & Wholesalers",			
		"Apparel Retailers": "Apparel Retailers",			
		"Broadline Retailers": "Broadline Retailers",			
		"Home Improvement Retailers": "Home Improvement Retailers",		
		"Specialized Consumer Services": "Specialized Consumer Services",
		"Specialty Retailers": "Specialty Retailers"			
	};

	var media = {
		"": "Sector",
		"Broadcasting & Entertainment": "Broadcasting & Entertainment",			
		"Media Agencies": "Media Agencies",			
		"Publishing": "Publishing"			
	};

	var travel = {
		"": "Sector",
		"Airlines": "Airlines",			
		"Gambling": "Gambling",			
		"Hotels": "Hotels",
		"Recreational Services": "Recreational Services",
		"Restaurants & Bars": "Restaurants & Bars",
		"Travel & Tourism": "Travel & Tourism"
	};

	var telecommunication = {
		"": "Sector",
		"Fixed Line Telecommunications": "Fixed Line Telecommunications",			
		"Mobile Telecommunications": "Mobile Telecommunications"			
	};

	var utilities = {
		"": "Sector",
		"Conventional Electricity": "Conventional Electricity",			
		"Alternative Electricity": "Alternative Electricity",
		"Gas Distribution": "Gas Distribution",			
		"Multiutilities": "Multiutilities",			
		"Water": "Water"			
	};

	var banks = {
		"": "Sector",
		"Banks": "Banks"	
	};

	var insurance = {
		"": "Sector",
		"Full Line Insurance": "Full Line Insurance",			
		"Insurance Brokers": "Insurance Brokers",
		"Property & Casualty Insurance": "Property & Casualty Insurance",			
		"Reinsurance": "Reinsurance",			
		"Life Insurance": "Life Insurance"			
	};

	var realestate = {
		"": "Sector",
		"Real Estate Holding & Development": "Real Estate Holding & Development",			
		"Real Estate Services": "Real Estate Services",
		"Industrial & Office REITs": "Industrial & Office REITs",			
		"Retail REITs": "Retail REITs",			
		"Residential REITs": "Residential REITs",
		"Diversified REITs": "Diversified REITs",
		"Specialty REITs": "Specialty REITs",
		"Mortgage REITs": "Mortgage REITs",
		"Hotel & Lodging REITs": "Hotel & Lodging REITs"
	};

	var financial = {
		"": "Sector",
		"Asset Managers": "Asset Managers",			
		"Consumer Finance": "Consumer Finance",
		"Specialty Finance": "Specialty Finance",			
		"Investment Services": "Investment Services",			
		"Mortgage Finance": "Mortgage Finance",
		"Equity Investment Instruments": "Equity Investment Instruments",
		"Nonequity Investment Instruments": "Nonequity Investment Instruments"			
	};

	var technology = {
		"": "Sector",
		"Computer Services": "Computer Services",			
		"Internet": "Internet",
		"Software": "Software",			
		"Computer Hardware": "Computer Hardware",			
		"Electronic Office Equipment": "Electronic Office Equipment",
		"Semiconductors": "Semiconductors",
		"Telecommunications Equipment": "Telecommunications Equipment"			
	};

	var categories = [
		oilandgas,
		chemicals,
		basicresources,
		construction,
		industrial,
		automobiles,
		food,
		personal,
		healthcare,
		retail,
		media,
		travel,
		telecommunication,
		utilities,
		banks,
		insurance,
		realestate,
		financial,
		technology
	];		


	// category and subcategory changes
	$("#category").on('change', function(e){
		e.preventDefault();

		var subcategoryKey = $(this)[0].selectedIndex - 1;
		
		if(subcategoryKey >= 0) {
			var newOptions = categories[subcategoryKey];			

			var $el = $("#subcategory");
			$el.empty();
			$.each(newOptions, function(value,key) {
			  	$el.append($("<option></option>").attr("value", value).text(key));
			});
		}

	});

	// category and subcategory changes
	$("#list-category").on('change', function(e){
		e.preventDefault();

		var subcategoryKey = $(this)[0].selectedIndex - 1;
		
		if(subcategoryKey >= 0) {
			var newOptions = categories[subcategoryKey];			

			var $el = $("#list-subcategory");
			$el.empty();
			$.each(newOptions, function(value,key) {
			  	$el.append($("<option></option>").attr("value", value).text(key));
			});
		}

	});
});