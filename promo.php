<?php
	include 'data_area.php';
	include 'data_promo.php';
	
	$response = array();
	
	if (isset($_GET['apikey']) && isset($_GET['area'])) {
	
		$apikey = "test123";
		$area = $_GET['area'];
		$list = "list";
		
		// Periksa Validasi API-Key 
		if ($apikey == $_GET['apikey']) {
			// Periksa Validasi Kode Area
			if (in_array($area, $area_code) || $area == $list) {
			
				$response["success"] = 1;
				$response["message"] = "Success !";
				
				switch ($area) {
					case 'list':
						$response["results"] = $all_area;
						break;
					case 'aa':
						$response["results"] = $all_promo;
						break;
					case 'mt':
						$response["results"] = $area1;
						break;
					case 'sy':
						$response["results"] = $area2;
						break;
					case 'kn':
						$response["results"] = $area3;
						break;
					case 'bm':
						$response["results"] = $area4;
						break;
					case 'pi':
						$response["results"] = $area5;
						break;
					case 'km':
						$response["results"] = $area6;
						break;
					case 'kg':
						$response["results"] = $area7;
						break;
					case 'gd':
						$response["results"] = $area8;
						break;
					case 'ta':
						$response["results"] = $area9;
						break;
					case 'md':
						$response["results"] = $area10;
						break;
					case 'hr':
						$response["results"] = $area11;
						break;
					case 'mp':
						$response["results"] = $area12;
						break;
					case 'dm':
						$response["results"] = $area13;
						break;
					case 'gg':
						$response["results"] = $area14;
						break;
					case 'pl':
						$response["results"] = $area15;
						break;
					default:
				}
				echo json_encode($response);
				
			} else {
				$response["success"] = 0;
				$response["message"] = "Invalid Area-Code";
				echo json_encode($response);
			}
			
		} else {
			$response["success"] = 0;
			$response["message"] = "Invalid API-Key";
			echo json_encode($response);
		}
		
	} else {
		$response["success"] = 0;
		$response["message"] = "Access Denied, because there is no API-Key or Area-Code !";
		echo json_encode($response);
	}
?>