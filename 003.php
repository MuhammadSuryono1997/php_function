<?php 

$data = file_get_contents("data_order.json");
$data = json_decode($data);

function GetDataBulan($data)
{
	if (date("F", strtotime($data->created_at)) == 'February') 
	{
		return true;
	}
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
				$sum += $item->price * $item->qty;
			}
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
			$sum += $item->price * $item->qty;
		}

		if ($sum < 300000) 
		{
			$result[] = $data[$i]->customer->name;
		}
	}

	return $result;
}

var_dump(array_filter($data, "GetDataBulan"));
var_dump(GetDataByName($data, "Ari"));
print_r(array_unique(GetDataByGrandLow($data)));



?>