<?php 

$data = file_get_contents("data_order.json");
$data = json_decode($data);

function GetDataBulan($data, $month)
{
	for ($i=0; $i < count($data) ; $i++) { 

		if (date("F", strtotime($data[$i]->created_at)) == $month) 
		{
			$result[] = $data[$i];
		}
	}

	return $result;
}


function GetDataByName($data, $name)
{
	$sum = 0;
	for ($i=0; $i < count($data) ; $i++) { 
		if (strtolower($data[$i]->customer->name) == strtolower($name))
		{
			$items = $data[$i]->items;
			foreach ($items as $item) 
			{
				$sum += $item->price;
			}

			// $result[] = (object)[
			// 	$data[$i],
			// 	'grand_total'=>$sum

			// ];
		}
	}
	return $sum;
}

function GetDataByGrandLow($data)
{
	for ($i=0; $i < count($data) ; $i++) { 
		$items = $data[$i]->items;
		$sum = 0;
		foreach ($items as $item) 
		{
			$sum += $item->price;
		}

		if ($sum < 300000) 
		{
			$result[] = $data[$i]->customer->name;
		}
	}

	return $result;
}

var_dump(GetDataBulan($data, "February"));
var_dump(GetDataByName($data, "Ari"));
print_r(array_unique(GetDataByGrandLow($data)));



?>