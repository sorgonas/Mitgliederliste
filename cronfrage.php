<?php
// Konfiguration
$sGuildName = 'Familia de Lux';
$sRealmName = 'Lothar';
$sGuildFields= 'members'; // Möglich sind: achievements, members
$iMaxEntries = 1; // Anzahl der maximalen Einträge pro Zeile
$sMemberFields = 'talents,professions,items';
$sCacheFile = 'cache.sth';
$iCacheTimeout = 1; // Cache-Timeout in Sekunden
$sAPIURL = 'http://eu.battle.net/api/wow/';
$aGuildData = array();

$sRawEncodedRealm = rawurlencode($sRealmName);
$sRawEncodedGuild = rawurlencode($sGuildName);
$sResponse = null;

if( !is_file($sCacheFile) || (time() - filemtime($sCacheFile)) > $iCacheTimeout || filesize($sCacheFile) == 0 ) {

// Auslesen der Gildendaten.
$sRequestURL = $sAPIURL . 'guild/'.$sRawEncodedRealm.'/'.$sRawEncodedGuild.'?locale=de_de&fields='.$sGuildFields;
$sResponse = @file_get_contents($sRequestURL, true);
if (strpos($http_response_header[0], '200')) {

$http_response_header = null;
$aRawData = json_decode($sResponse, true);
$aGuildData = $aRawData;
unset($aGuildData['members']);

foreach ($aRawData['members'] as $aMemberItem )
{
$sCharName = $aMemberItem['character']['name'];
$sCharResponse = @file_get_contents(
$sAPIURL . 'character/'.$sRawEncodedRealm.'/'.urlencode(html_entity_decode($sCharName, ENT_COMPAT, 'UTF-8')).'?locale=de_de&fields='.$sMemberFields
, true
);

// Prüfe Rückgabe
if (strpos($http_response_header[0], '200')) {

$aDecodeMember = json_decode($sCharResponse, true);
$aGuildData['members'][] = json_decode($sCharResponse, true);
}
}

//print_r(json_encode($aGuildData));
file_put_contents($sCacheFile, json_encode($aGuildData));

unset($aGuild, $decodeMember, $aRawData, $http_response_header, $sCharResponse, $sResponse);
}
}
?>