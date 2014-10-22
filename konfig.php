<?php

$bilIcon = (empty($aMemberItem['thumbnail']))?"":'<img id="thumb" src="http://eu.battle.net/static-render/eu/'.$aMemberItem['thumbnail'].'" width="200px" height="200px" />';
$talIcon1 = (empty($aMemberItem['talents'][1]['spec']['icon']))?"":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['talents'][1]['spec']['icon'] . '.jpg">';
$talText1 = ($aMemberItem['talents'][1]['selected'])?'<font color="#00FF00"><b><u>'.$aMemberItem['talents'][1]['spec']['name'].'</u></b></font>':$aMemberItem['talents'][1]['spec']['name'];
$talIcon2 = (empty($aMemberItem['talents'][0]['spec']['icon']))?"":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['talents'][0]['spec']['icon'] . '.jpg">';
$talText2 = ($aMemberItem['talents'][0]['selected'])?'<font color="#00FF00"><b><u>'.$aMemberItem['talents'][0]['spec']['name'].'</u></b></font>':$aMemberItem['talents'][0]['spec']['name'];
$berIcon1 = (empty($aMemberItem['professions']['primary'][1]['icon']))?"":'<img src="http://eu.media.blizzard.com/wow/icons/18/'.$aMemberItem['professions']['primary'][1]['icon'].'.jpg">';
$berIcon2 = (empty($aMemberItem['professions']['primary'][0]['icon']))?"":'<img src="http://eu.media.blizzard.com/wow/icons/18/'.$aMemberItem['professions']['primary'][0]['icon'].'.jpg">';
$bilIcon = str_replace("avatar","profilemain",$bilIcon);

$kopfIcon = (empty($aMemberItem['items']['head']['icon']))?"<img class='kopf' src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['head']['icon'] . '.jpg">';
$kopfData = (empty($aMemberItem['items']['head']['icon']))?"Nicht's angelegt":$aMemberItem['items']['head']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['head']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$halsIcon = (empty($aMemberItem['items']['neck']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['neck']['icon'] . '.jpg">';
$halsData = (empty($aMemberItem['items']['neck']['icon']))?"Nicht's angelegt":$aMemberItem['items']['neck']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['neck']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$schulterIcon = (empty($aMemberItem['items']['shoulder']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['shoulder']['icon'] . '.jpg">';
$schulterData = (empty($aMemberItem['items']['shoulder']['icon']))?"Nicht's angelegt":$aMemberItem['items']['shoulder']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['shoulder']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$ruckenIcon = (empty($aMemberItem['items']['back']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['back']['icon'] . '.jpg">';
$ruckenData = (empty($aMemberItem['items']['back']['icon']))?"Nicht's angelegt":$aMemberItem['items']['back']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['back']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$brustIcon = (empty($aMemberItem['items']['chest']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['chest']['icon'] . '.jpg">';
$brustData = (empty($aMemberItem['items']['chest']['icon']))?"Nicht's angelegt":$aMemberItem['items']['chest']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['chest']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$hemdIcon = (empty($aMemberItem['items']['shirt']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['shirt']['icon'] . '.jpg">';
$hemdData = (empty($aMemberItem['items']['shirt']['icon']))?"Nicht's angelegt":$aMemberItem['items']['shirt']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['shirt']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$wappenIcon = (empty($aMemberItem['items']['tabard']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['tabard']['icon'] . '.jpg">';
$wappenData = (empty($aMemberItem['items']['tabard']['icon']))?"Nicht's angelegt":$aMemberItem['items']['tabard']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['tabard']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$gelenkIcon = (empty($aMemberItem['items']['wrist']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['wrist']['icon'] . '.jpg">';
$gelenkData = (empty($aMemberItem['items']['wrist']['icon']))?"Nicht's angelegt":$aMemberItem['items']['wrist']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['wrist']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';

$handIcon = (empty($aMemberItem['items']['hands']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['hands']['icon'] . '.jpg">';
$handData = (empty($aMemberItem['items']['hands']['icon']))?"Nicht's angelegt":$aMemberItem['items']['hands']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['hands']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$gurtelIcon = (empty($aMemberItem['items']['waist']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['waist']['icon'] . '.jpg">';
$gurtelData = (empty($aMemberItem['items']['waist']['icon']))?"Nicht's angelegt":$aMemberItem['items']['waist']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['waist']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$hoseIcon = (empty($aMemberItem['items']['legs']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['legs']['icon'] . '.jpg">';
$hoseData = (empty($aMemberItem['items']['legs']['icon']))?"Nicht's angelegt":$aMemberItem['items']['legs']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['legs']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$fusseIcon = (empty($aMemberItem['items']['feet']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['feet']['icon'] . '.jpg">';
$fusseData = (empty($aMemberItem['items']['feet']['icon']))?"Nicht's angelegt":$aMemberItem['items']['feet']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['feet']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$ring1Icon = (empty($aMemberItem['items']['finger1']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['finger1']['icon'] . '.jpg">';
$ring1Data = (empty($aMemberItem['items']['finger1']['icon']))?"Nicht's angelegt":$aMemberItem['items']['finger1']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['finger1']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$ring2Icon = (empty($aMemberItem['items']['finger2']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['finger2']['icon'] . '.jpg">';
$ring2Data = (empty($aMemberItem['items']['finger2']['icon']))?"Nicht's angelegt":$aMemberItem['items']['finger2']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['finger2']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$schmuck1Icon = (empty($aMemberItem['items']['trinket1']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['trinket1']['icon'] . '.jpg">';
$schmuck1Data = (empty($aMemberItem['items']['trinket1']['icon']))?"Nicht's angelegt":$aMemberItem['items']['trinket1']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['trinket1']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$schmuck2Icon = (empty($aMemberItem['items']['trinket2']['icon']))?"<img src='http://sorgonas.de/leer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['trinket2']['icon'] . '.jpg">';
$schmuck2Data = (empty($aMemberItem['items']['trinket2']['icon']))?"Nicht's angelegt":$aMemberItem['items']['trinket2']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['trinket2']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';

$hauptIcon = (empty($aMemberItem['items']['mainHand']['icon']))?"<img src='http://sorgonas.de/waffeleer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['mainHand']['icon'] . '.jpg">';
$hauptData = (empty($aMemberItem['items']['mainHand']['icon']))?"Nicht's angelegt":$aMemberItem['items']['mainHand']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['mainHand']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';
$nebenIcon = (empty($aMemberItem['items']['offHand']['icon']))?"<img src='http://sorgonas.de/waffeleer.png'>":'<img src="http://eu.media.blizzard.com/wow/icons/18/' .$aMemberItem['items']['offHand']['icon'] . '.jpg">';
$nebenData = (empty($aMemberItem['items']['offHand']['icon']))?"Nicht's angelegt":$aMemberItem['items']['offHand']['name'].'<br />Gegenstandsstufe: '.$aMemberItem['items']['offHand']['itemLevel'].'<br /><p>Klicken f&uuml;r Mehr Infos</p>';


?>