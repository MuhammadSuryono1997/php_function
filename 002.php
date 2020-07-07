<?php 
$lagu = "Aku ingin begini
Aku ingin begitu
Ingin ini itu banyak sekali

Semua semua semua
Dapat dikabulkan
Dapat dikabulkan
Dengan kantong ajaib

Aku ingin terbang bebas
Di angkasa
Hei… baling baling bambu

La... la... la...
Aku sayang sekali
Doraemon

La... la... la...
Aku sayang sekali";

function count_words($string, $kata)
{
	$kata = strtolower($kata);
	$string = strtolower($string);
	$string = preg_replace('/\s+/', ' ', trim($string));
	$string = explode(" ", $string);
	$hitung = 0;
	foreach ($string as $word) {
		if ($word == $kata) 
		{
			$hitung++;
		}
	}
	return $hitung;
}

echo count_words($lagu, "Aku")."\n";
echo count_words($lagu, "Ingin")."\n";
echo count_words($lagu, "Dapat")."\n";
 ?>