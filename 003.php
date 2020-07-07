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



?>