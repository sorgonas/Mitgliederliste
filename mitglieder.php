<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>
    <title>Familia de Lux</title>
    <link rel="shortcut icon" href="css/images/logo.png" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="generator" content="Webocton - Scriptly (www.scriptly.de)" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="mitglieder.css" type="text/css" rel="stylesheet" />
</head>

<?php
$iMaxEntries = 1; // Anzahl der maximalen Einträge pro Zeile
$sCacheFile = 'cache.sth';
$aGuildData = array();
$zeit = filemtime ($sCacheFile);

$aClassNames = array('<img src="warrior.jpg" />', '<img src="paladin.jpg" />', '<img src="hunter.jpg" />', '<img src="rogue.jpg" />', '<img src="priest.jpg" />', '<img src="deathknight.jpg" />', '<img src="shaman.jpg" />', '<img src="mage.jpg" />', '<img src="warlock.jpg" />', '<img src="monk.jpg" />', '<img src="druid.jpg" />');
$aClassRaces = array('<img src="mensch.png" />', 'Orc', '<img src="zwerg.png" />', '<img src="nachtelf.png" />', 'Untoter', 'Taure', '<img src="gnom.png" />', 'Troll', 'Goblin', 'Blutelf', '<img src="draenei.png" />', '', '', '', '', '', '', '', '', '', '', '<img src="worgen.png" />', '', '', '<img src="panda.png" />');
$aClassColors = array('#ffffff','#C69B6D', '#F48CBA','#AAD372','#FFF468','#F0EBE0','#C41E3B','#2359FF','#68CCEF','#9382C9','#00FFBA','#FF7C0A');
$aClassText = array('#FFFFFF');



#138



if (file_exists($sCacheFile))
    $aGuildData = json_decode(file_get_contents($sCacheFile), true);


?>
<body>
<script type="text/javascript" src="wz_tooltip.js"></script>
<?php
if ( sizeof($aGuildData) ) {


    $sOutput .= '<div class="kopf" style="margin: auto;">';
    $sOutput .= '<table border="0" align="center">';
    $sOutput .= '<tr><td><h2><font color="#990000">Gildeninformationen</font></h2></td>';
    $sOutput .= "<td><p align='center'><img src='logo.png' width='50' height='50' /></p></td></tr>";
    $sOutput .= '<tr><td><b><font color="#000000">Gildenname:</b></td><td style="color: #000000;" align="center"> '.$aGuildData['name'].'</font><br /></td></tr>';
    $sOutput .= '<tr><td><b><font color="#000000">Realm:</b></td><td style="color: #000000;" align="center"> '.$aGuildData['realm'].'</font><br /></td></tr>';
    $sOutput .= '<tr><td><b><font color="#000000">Gildenstufe:</b></td><td style="color: #000000;" align="center"> '.$aGuildData['level'].'</font><br /></td></tr>';
    $sOutput .= '<tr><td><b><font color="#000000">Mitgliederanzahl:</b></td><td style="color: #000000;" align="center"> '.count($aGuildData['members']).'</font><br /></td></tr>';
    $sOutput .= '<tr><td><b><font color="#000000">Gildenerfolgspunkte:</b></td><td style="color: #000000;" align="center"> '.$aGuildData['achievementPoints'].'</font><br /></td></tr>';
    $sOutput .= '<tr><td colspan="2" style="background-color: #FF0000;" align="center">Letzte Aktualisierung: '. gmdate ( 'd M Y H:i:s', $zeit ).'</td></tr>';
    $sOutput .= '</table></div><br />';

    $counter=0;

    foreach ($aGuildData['members'] as $aMemberItem ) {

 include 'konfig.php';

$style = (($counter % 2 == 0)?'even':'odd');

$sOutput .= '<table class="member" cellspacing="0" cellpadding="0">';
  $sOutput .= '<tr>';
    $sOutput .= '<th class="name" colspan="3">'.htmlentities($aMemberItem['name'], ENT_COMPAT, 'UTF-8').'</th>';
    $sOutput .= '<th class="abstand" colspan="2" rowspan="2"></th>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['head']['id'].'" class="tooltip">'.$kopfIcon.'<span>'.$kopfData.'</span></a></td>';
    $sOutput .= '<td class="char" rowspan="8">'.$bilIcon.'</td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['hands']['id'].'" class="tooltip">'.$handIcon.'<span>'.$handData.'</span></a></td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['neck']['id'].'" class="tooltip">'.$halsIcon.'<span>'.$halsData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['waist']['id'].'" class="tooltip">'.$gurtelIcon.'<span>'.$gurtelData.'</span></a></td>';
    $sOutput .= '<td class="info">Level: </td>';
    $sOutput .= '<td class="daten">'.$aMemberItem['level'].'</td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['shoulder']['id'].'" class="tooltip">'.$schulterIcon.'<span>'.$schulterData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['legs']['id'].'" class="tooltip">'.$hoseIcon.'<span>'.$hoseData.'</span></a></td>';
    $sOutput .= '<td class="info">Klasse: </td>';
    $sOutput .= '<td class="daten">'.$aClassNames[$aMemberItem['class'] - 1].'</td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['back']['id'].'" class="tooltip">'.$ruckenIcon.'<span>'.$ruckenData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['feet']['id'].'" class="tooltip">'.$fusseIcon.'<span>'.$fusseData.'</span></a></td>';
    $sOutput .= '<td class="info">Talent-1: </td>';
    $sOutput .= '<td class="daten">'.$talIcon2.$talText2.'</td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['chest']['id'].'" class="tooltip">'.$brustIcon.'<span>'.$brustData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['finger1']['id'].'" class="tooltip">'.$ring1Icon.'<span>'.$ring1Data.'</span></a></td>';
    $sOutput .= '<td class="info">Talent-2: </td>';
    $sOutput .= '<td class="daten">'.$talIcon1.$talText1.'</td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['shirt']['id'].'" class="tooltip">'.$hemdIcon.'<span>'.$hemdData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['finger2']['id'].'" class="tooltip">'.$ring2Icon.'<span>'.$ring2Data.'</span></a></td>';
    $sOutput .= '<td class="info">Beruf-1: </td>';
    $sOutput .= '<td class="daten">'.$berIcon2.$aMemberItem['professions']['primary'][0]['rank'].'</td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['tabard']['id'].'" class="tooltip">'.$wappenIcon.'<span>'.$wappenData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['trinket1']['id'].'" class="tooltip">'.$schmuck1Icon.'<span>'.$schmuck1Data.'</span></a></td>';
    $sOutput .= '<td class="info">Beruf-2: </td>';
    $sOutput .= '<td class="daten">'.$berIcon1.$aMemberItem['professions']['primary'][1]['rank'].'</td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['wrist']['id'].'" class="tooltip">'.$gelenkIcon.'<span>'.$gelenkData.'</span></a></td>';
    $sOutput .= '<td class="rustung"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['trinket2']['id'].'" class="tooltip">'.$schmuck2Icon.'<span>'.$schmuck2Data.'</span></a></td>';
    $sOutput .= '<td class="abstand" colspan="2" rowspan="2"></td>';
  $sOutput .= '</tr>';
  $sOutput .= '<tr>';    
    $sOutput .= '<td class="waffen" colspan="3"><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['mainHand']['id'].'" class="tooltip">'.$hauptIcon.'<span>'.$hauptData.'</span></a><a target="_blank" href="http://eu.battle.net/wow/de/item/'.$aMemberItem['items']['offHand']['id'].'" class="tooltip">'.$nebenIcon.'<span>'.$nebenData.'</span></a>GS: '.$aMemberItem['items']['averageItemLevelEquipped'].'</td>';        
  $sOutput .= '</tr>';
$sOutput .= '</table>';


$sOutput .= '</body>';
$counter++;
    }

}
echo $sOutput;
unset($aGuildData, $aMemberItem, $aMemberItem, $sOutput);
?>