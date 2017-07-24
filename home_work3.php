<html>
	<head>
			<title>Home work_3</title>
	</head>
	<body>
		<h1>Домашнее задание №3</h1>
		<?php
			
			$animalStart = [
    'Africa' => ['Panthera leo', 'Panthera pardus', 'Elephantidae'],//1 пункт
    'Asia' => ['Panthera tigris', 'Acinonyx jubatus','Crocodilia'],
	'America' => ['Panthera onca', 'Puma'],
	'Australia' => ['Macropus', 'Struthio camelus'],
	];
	//echo '<pre>';
	//print_r($animalStart);
	$animalFinal =array();//2 пункт
	foreach($animalStart as $areaName => $animalArr){
		foreach($animalArr as $animalName){
			if (strpos($animalName, ' ') !== false){
				array_push($animalFinal, $animalName);
			}
		}
	}
	//echo '<pre>';
	//print_r($animalFinal);
	$res=implode(' ',$animalFinal);//3 пункт
	//echo $res;
	$n=str_shuffle($res);
	//echo $n;
	$Arr = explode(' ',$n);
	echo '<pre>';
	print_r($Arr);
		
	
		?>
		
	</body>
</html>