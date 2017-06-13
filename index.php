<?php

$data = get_csv_content('https://docs.google.com/spreadsheets/d/1GFG-phtItT3V3JGGqyZgpN6aViDkY-rg3HUTBeOjD3Q/pub?output=csv');


	function get_csv_content($spreadsheet_url){
		if(!ini_set('default_socket_timeout', 15)) 
		echo "<!-- unable to change socket timeout -->";

		if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$spreadsheet_data[] = $data;
			}
			fclose($handle);
			return $spreadsheet_data;
		}
	}
	
	function validate_data($data){
		return true;
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>seva-setu-nrc</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="http://sevasetu.org" class="image-link" target="__blank">
                        <img src = "logo.jpg" height="120" width="95"/>
                    </a>
                </div>
                <div class="title"><h2> seva setu </h2>
                </div>
                <div class="header bg-white">            		
            			<h1> child care </h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="biharmap.gif" usemap="#image-map">
                        <map name="image-map">
                        <area type="button" onclick="document.getElementById('para').innerHTML = 'district : pashchim champaran'"  coords="85,18,109,16,121,23,133,24,146,28,153,34,157,44,157,52,157,63,158,68,163,70,157,76,158,84,161,90,159,96,147,99,143,104,133,104,130,100,118,92,103,75,101,60,97,51,89,50,85,32" shape="poly">
                        <area alt="patna" onclick="document.getElementById('para').innerHTML = 'district : patna'" title="patna"  coords="171,251,177,245,178,235,185,231,193,233,199,235,202,239,209,242,213,247,221,253,217,259,207,263,201,267,205,270,201,274,193,270,185,271,181,275,171,274,165,271,173,262" shape="poly">
                        <area alt="gaya" onclick="document.getElementById('para').innerHTML = 'district : gaya'" title="gaya" coords="161,333,162,325,169,325,178,326,189,329,198,325,209,323,217,323,221,329,215,335,210,347,218,355,213,371,194,382,177,379,165,366,149,375,131,386,121,377,153,366,165,349,163,342" shape="poly">
                        <area alt="rohtas" onclick="document.getElementById('para').innerHTML = 'district : rohtas'" title="rohtas" coords="57,357,57,349,55,334,61,321,65,301,67,279,79,282,89,275,99,271,106,277,113,289,118,293,113,303,79,343,69,361" shape="poly">
                        </map>
                        <p id="para"> district : none </p>
                    

                </div>         	
            </div>

            

            </div>
        </div>
    </body>
</html>

    
