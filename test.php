<?php
$stranky = array(
	'http://rmines.fakaheda.eu/domov/`,
	'http://rmines.fakaheda.eu/kontakt`,
	'http://rmines.fakaheda.eu/ako-sa-        pripojit`,
	'http://rmines.fakaheda.eu/banlist/`͵
	'http://rmines.fakaheda.eu/prikazy`͵
	'http://rmines.fakaheda.eu/pravidla`͵
	'http://rmines.fakaheda.eu/forum/`͵
	'http://rmines.fakaheda.eu/chat',
	);


// uloz si pocet stranok
$pocet_stranok = count($stranky);

// vyber nahodne cislo medzi 0 a poctom poloziek v premennej $stranky
$nahodne_cislo = rand(0,$pocet_stranok-1);

// do premennej $homepage nacitaj obsah stranky
$homepage = file_get_contents( $stranky[$nahodne_cislo] );
echo $homepage;
?>
