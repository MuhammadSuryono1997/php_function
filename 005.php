<?php
    $csv = array_map('str_getcsv', file("file.csv"));
    
    array_walk($csv, function(&$data) use ($csv) 
    {
      $data = array_combine(array_map('strtolower',$csv[0]), $data);
    });
    array_shift($csv);
    print_r($csv);
?> 


