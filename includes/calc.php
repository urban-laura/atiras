<?php
$year = $_POST['year'];
$teljesitmeny = $_POST['teljesitmeny'];
$or = $_POST['or'];
$barrel = $_POST['barrel'];

$n_year = (int)date('Y');

$c_year = $n_year - $year;


if($or == 'kW')
{
$kw = $teljesitmeny;
}

if($or == 'LE')
{
$kw = $teljesitmeny * 0.745;
}

$hatosagi_dijak[] = array('barrel'=>'<=1400',      'value'=>17000);
$hatosagi_dijak[] = array('barrel'=>'1401 - 2000', 'value'=>18500);
$hatosagi_dijak[] = array('barrel'=>'>=2001',      'value'=>20000);

foreach($hatosagi_dijak as $dij)
{
	if($barrel==$dij['barrel'])
	{
		$hatosagi_dij = $dij['value'];
		break;
	}
}


$v_illetekek[] = array('min_t'=>0,  'max_t'=>40,  'min_y'=>0, 'max_y'=>3, 'value'=>550);
$v_illetekek[] = array('min_t'=>0,  'max_t'=>40,  'min_y'=>4, 'max_y'=>8, 'value'=>450);
$v_illetekek[] = array('min_t'=>41, 'max_t'=>80,  'min_y'=>0, 'max_y'=>3, 'value'=>650);
$v_illetekek[] = array('min_t'=>41, 'max_t'=>80,  'min_y'=>4, 'max_y'=>8, 'value'=>550);
$v_illetekek[] = array('min_t'=>81, 'max_t'=>120, 'min_y'=>0, 'max_y'=>3, 'value'=>750);
$v_illetekek[] = array('min_t'=>81, 'max_t'=>120, 'min_y'=>4, 'max_y'=>8, 'value'=>650);

foreach ($v_illetekek as $illetek)
{
	if(($kw>=$illetek['min_t'] && $kw<=$illetek['max_t']) && ($c_year>=$illetek['min_y'] && $c_year<=$illetek['max_y']))
	{
		$v_illetek = $illetek['value'];
		break;
	}
}


$v_illetekek2[] = array('min_t'=>0, 'max_t'=>40,   'min'=>8, 'value'=>300);
$v_illetekek2[] = array('min_t'=>41, 'max_t'=>80,  'min'=>8, 'value'=>450);
$v_illetekek2[] = array('min_t'=>81, 'max_t'=>120, 'min'=>8, 'value'=>550);

foreach ($v_illetekek2 as $illetek)
{
	if(($kw>=$illetek['min_t'] && $kw<=$illetek['max_t']) && ($c_year>$illetek['min']))
	{
		$v_illetek = $illetek['value'];
		break;
	}
}

if(($kw > 120) && ($c_year >= 0 && $c_year <= 3))
{
$v_illetek = 850;
}

if(($kw > 120) && ($c_year >= 4 && $c_year <= 8))
{
$v_illetek = 750;
}

if($kw > 120 && $c_year > 8)
{
$v_illetek = 650;
}

$forgalmi = 6000;
$torzskonyv = 6000; 
$vagyonszerzesi = $v_illetek * $kw;
$sum = $hatosagi_dij + $forgalmi + $torzskonyv + $vagyonszerzesi;


$forgalmi2 = number_format($forgalmi, 0, '', ' ');
$torzskonyv2 = number_format($torzskonyv, 0, '', ' ');
$vagyonszerzesi2 = number_format($vagyonszerzesi, 0, '', ' ');
$sum2 = number_format($sum, 0, '', ' ');

$debug['forgalmi'] = $forgalmi2;
$debug['torzskonyv'] = $torzskonyv2;
$debug['vagyonszerzesi'] = $vagyonszerzesi2;
$debug['sum'] = $sum2;

