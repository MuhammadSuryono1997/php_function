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

// var_dump(GetDataBulan($data, "February"))

function GetDataByName($data, $name)
{
	for ($i=0; $i < count($data) ; $i++) { 
		if (strtolower($data[$i]->customer->name) == strtolower($name))
		{
			$items = $data[$i]->items;
			$sum = 0;
			foreach ($items as $item) 
			{
				$sum += $item->price;
			}

			$result[] = (object)[
				$data[$i],
				'grand_total'=>$sum

			];
		}
	}

	return $result;
}

var_dump(GetDataByName($data, "Ari"))



?>