<?php
    $csv = array_map('str_getcsv', file("file.csv"));
    array_walk($csv, function(&$data) use ($csv) 
    {
      $data = array_combine(array_map('strtolower',$csv[0]), $data);
    });
    array_shift($csv);
    uasort($csv, function($a, $b)
    {
    	return $a['price'] - $b['price'];
    });


    print_r($csv);
?> 


