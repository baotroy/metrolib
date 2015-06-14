<?php 
require_once('lib.php');
require_once('component.php');
require_once('phpQuery.php');
// $text=getPage('http://www.jetro.go.jp/j-messe/tradefair/NMW2015_43069');
// $ths = getElement($text, 'th');

// $ths = $ths[0];
		
// $tds = getElement($text, 'td');

// $tds = $tds[0];
// echo '<pre>';print_r($tds); exit;
// echo '<table>';
// echo '<meta charset="utf-8">';
// for($i=0; $i<count($ths); $i++){
// 	if($i%2==0) echo '<tr>';
// 	$tds[$i] = relToAbs($tds[$i], 'http://www.jetro.go.jp/');
// 	echo '<th>'.$ths[$i].'</th>';
// 	echo '<td>'.$tds[$i].'</td>';

// 	if($i%2==0) echo '</tr>';
// }

// exit;


//chuc nang ve alpha
//$url = 'http://www.metrolyrics.com/artists-a-1.html';

//$page = getPage($url);

/*
//lay so ca si trong 1 ký tự alpha
$num = getTotalRecordOfArtistCharacter($page);
//tính số trang của ký tự alpha
$pages = getNumOfPage($num);
//end
*///end function


//start lay cac alubm
/*
$url = 'http://www.metrolyrics.com/linkin-park-albums-list-4.html';

$page = getPage($url);
$data = get_albums_and_tracks($url);

//END LAY CAC ALBUM
*/
$url = 'http://www.metrolyrics.com/a-albums-list.html';
$page = getPage($url);
$cp = get_pager($page);
echo '<meta charset="utf-8">';
echo '<pre>';print_r($cp); exit;
exit;

foreach ($trs as $k => $tr) {
	for($i=1; $i< count($tr); $i++){
		$name = relToAbs($tr[$i], 'http://www.metrolyrics.com');
		echo '<pre>';print_r($name);
		//echo '<pre>';print_r($tr[$i]);

	}
}


 ?>