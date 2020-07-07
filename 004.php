<?php 

function GetData()
{
	$data = file_get_contents("data_primary.json");
	$data = json_decode($data);
	return $data;
}


function GetDataCategory($data)
{
	if ($data->category == 'fruits') 
	{
		return true;
	}	
}

function GetDataRange($data)
{
	if ($data->price >= 20 and $data->price <=100) 
	{
		return true;
	}
}

$data_category = json_encode(array_filter(GetData(), "GetDataCategory"), JSON_PRETTY_PRINT);
file_put_contents("data_category.json", $data_category);

$data_range_price = json_encode(array_filter(GetData(), "GetDataRange"), JSON_PRETTY_PRINT);
file_put_contents("data_range_price.json", $data_range_price);

 ?>