<?php
	include 'data_area.php';
	
	$listpromo = array(
		"DCOST Promo Uang & Doa Makan di DCOST Bayar separo Uang & separo Doa",
		"Snowbay Promo Spesial - Diskon Fantastis 50%",
		"Papa Rons Great Deal - Promo Menu Hemat Papa Hey Hanya Rp. 25.000",
		"Senayan City Long Weekend Super Sale - Diskon Hingga 70%",
		"Samsung Erafone Promo Spesial - Harga Mulai Rp. 8.999.000 dan Gratis Voucher Panorama Tours",
		"Lotteria Promo Menu Hemat - Beli Menu Big Smile Cuma Rp. 11.818",
		"Wakai Kohai Long Weekend Promo - Beli 1 Gratis 1",
		"Imperial Kitchen dan Dimsum Promo Santap Hemat - Harga Spesial Hanya Rp. 19.999",
		"Gramedia.com Promo Long Weekend - Diskon hingga 60%",
		"Go Wet Waterpark Promo Super 4 - Harga Spesial Rp. 300.000 Untuk Berempat",
		"eStore Acceossories Special Offer - Gebyar Diskon dan Harga Spesial",
		"Circle K Promo Belanja Spesial - Diskon Hingga 20%",
		"Chatime Cafe Promo Late Night Sale - Beli 2 Gratis 1",
		"Baskin Robbins Promo Spesial Box Of Fun - Harga Mulai Rp. 100.000",
		"Blibli.com Promo Friday Deal - Voucher Cashback Rp. 300.000",
		"PaketWistaLiburan.com Special Promo - Paket Liburan Singapura",
		"Klik Indomaret Dancow Special Deal - Gratis Hadiah Langsung",
		"Lazada Elektronik Best Sale - Diskon hingga 75%",
		"Dunkin Donuts Special Membercard Deal - Gratis Hadiah Langsung Tumbler",
		"Cinemaxx Theater Penawaran Spesial - Upsize Minuman Cuma Rp. 10.000",
		"CGV Blitz Promo Long Weekend - Beli 1 Gratis 1 Tiket Nonton",
		"Carrefour Promo Festronik - Gebyar Diskon dan Harga Spesial",
		"Bath & Body Works BIG Deal - Gratis Hadiah Langsung",
		"XSML Fashion Mid Year Sale Promo - Gebyar Diskon dan Harga Spesial",
		"Waterbom Jakarta Promo Spesial Mandiri - Diskon 50%",
		"Traveloka Promo Spesial Long Weekend - Dison Hingga Rp. 135.000",
		"Sogo Department Store Sumer Travel Promo - Gratis E-Voucher",
		"Plaza Blok M Promo Eat and Treats - Gratis Ice Cream",
		"Mall Taman Anggrek Cinema XXI Deal Of The Day - Gratis Tiket Nonton",
		"rena Swimwear BIG Sale - Diskon Heboh Hingga 50%",
		"Women Secret Promo Mothers Day - Beli 1 Gratis 1",
		"Berrybenka Promo Tas Favorit - Diskon Sampai 70%",
		"Elevenia Mart Super Promo - Diskon hingga 61%",
		"Starbucks Promo Spesial Membercard - Beli 1 Gratis 1",
		"Pazia Shop Promo Spesial - iPhone6 Plus Harga Mulai Rp. 12.000.000",
		"Melandas Furniture Promo Mid Season Sale - Diskon hingga 50%",
		"Keny Rogers Roasters Exclusive Membercard Promo - Beli 1 Gratis 1",
		"ndomaret Promo Seru Belanja Berhadiah - Gratis Soft Drink dan Pop Mie",
		"Krispy Kreme Promo Spesial Tcash - Beli 1 Gratis 1",
		"Guardian Penawaran Spesial Mingguan - Gebyar Diskon dan Harga Spesial Rp. 1.000",
		"VipPlaza.com Super ItsMayDay Promo - Diskon 80% + 15%"
	);
	// SHOW ALL AREA
	$arr_length = count($area_name);
	for ($x = 0; $x<$arr_length; $x++) {
		$all_area[] = array('area-name'=> $area_name[$x], 'area-code'=> $area_code[$x]);
	}
	
	// SHOW ALL PROMO
	$all_promo = array('area'=> $area_name[0], 'promo'=> $listpromo); 
	
	// SHOW PROMO @Menteng
	$area1 = array('area'=> $area_name[1], 'promo'=> array(
		$listpromo[12], 
		$listpromo[20], 
		$listpromo[4], 
		$listpromo[9], 
		$listpromo[32]));
		
	// SHOW PROMO @Senayan
	$area2 = array('area'=> $area_name[2], 'promo'=> array(
		$listpromo[1], 
		$listpromo[3], 
		$listpromo[11], 
		$listpromo[37], 
		$listpromo[19], 
		$listpromo[25], 
		$listpromo[40]));
		
	// SHOW PROMO @Kuningan
	$area3 = array('area'=> $area_name[3], 'promo'=> array(
		$listpromo[17],
		$listpromo[29], 
		$listpromo[31]));
		
	// SHOW PROMO @Blok M
	$area4 = array('area'=> $area_name[4], 'promo'=> array(
		$listpromo[17],
		$listpromo[1], 
		$listpromo[13], 
		$listpromo[40], 
		$listpromo[22], 
		$listpromo[31]));
	
	// SHOW PROMO @Pondok indah
	$area5 = array('area'=> $area_name[5], 'promo'=> array(
		$listpromo[33],
		$listpromo[13], 
		$listpromo[8], 
		$listpromo[20]));
	
	// SHOW PROMO @Kemang
	$area6 = array('area'=> $area_name[6], 'promo'=> array(
		$listpromo[17],
		$listpromo[29], 
		$listpromo[6], 
		$listpromo[11], 
		$listpromo[39], 
		$listpromo[18], 
		$listpromo[30], 
		$listpromo[36]));
		
	// SHOW PROMO @Kelapa Gading
	$area7 = array('area'=> $area_name[7], 'promo'=> array(
		$listpromo[1],
		$listpromo[18], 
		$listpromo[7], 
		$listpromo[31], 
		$listpromo[5]));
		
	// SHOW PROMO @Gandaria
	$area8 = array('area'=> $area_name[8], 'promo'=> array(
		$listpromo[9],
		$listpromo[2], 
		$listpromo[37], 
		$listpromo[23]));
		
	// SHOW PROMO @Tanah Abang
	$area9 = array('area'=> $area_name[9], 'promo'=> array(
		$listpromo[24],
		$listpromo[17], 
		$listpromo[29], 
		$listpromo[3], 
		$listpromo[10], 
		$listpromo[21], 
		$listpromo[40]));
		
	// SHOW PROMO @Mangga Dua
	$area10 = array('area'=> $area_name[10], 'promo'=> array(
		$listpromo[17],
		$listpromo[7], 
		$listpromo[30], 
		$listpromo[12], 
		$listpromo[17], 
		$listpromo[40], 
		$listpromo[22], 
		$listpromo[15], 
		$listpromo[2], 
		$listpromo[31]));
		
	// SHOW PROMO @Harmoni
	$area11 = array('area'=> $area_name[11], 'promo'=> array(
		$listpromo[17],
		$listpromo[20], 
		$listpromo[13], 
		$listpromo[39], 
		$listpromo[40], 
		$listpromo[22]));
		
	// SHOW PROMO @Mampang
	$area12 = array('area'=> $area_name[12], 'promo'=> array(
		$listpromo[17],
		$listpromo[0], 
		$listpromo[31]));
		
	// SHOW PROMO @Daan Mogot
	$area13 = array('area'=> $area_name[13], 'promo'=> array(
		$listpromo[9],
		$listpromo[10], 
		$listpromo[15], 
		$listpromo[13], 
		$listpromo[40]));
		
	// SHOW PROMO @Green Garden
	$area14 = array('area'=> $area_name[14], 'promo'=> array(
		$listpromo[17],
		$listpromo[29], 
		$listpromo[18], 
		$listpromo[11], 
		$listpromo[27], 
		$listpromo[24]));
		
	// SHOW PROMO @Pluit
	$area15 = array('area'=> $area_name[15], 'promo'=> array(
		$listpromo[10],
		$listpromo[40], 
		$listpromo[2], 
		$listpromo[14], 
		$listpromo[28], 
		$listpromo[25], 
		$listpromo[31], 
		$listpromo[13]));
	
?>