<?php

       $ch = curl_init();

       //$code=$_GET['busname'];//정류장id
header("Content-Type: text/html; charset=UTF-8");
$url = 'http://ws.bus.go.kr/api/rest/stationinfo/getStationByUid'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=umfGiqjtzOMarryKchlVrnqw7%2BGPqeV1bDPWigHtwAFpAB8d5lfQ8TXoBvRDCRecXTrmkbz24APGWQR0kPY3Ow%3D%3D';
$queryParams .= '&' . urlencode('arsId') . '=' . urlencode($data); /*정류소 ID*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);// 접속 url 정보 설정
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); // Request 에 대한 결과값을 받아오는지 체크 - exec 함수를 위한 반환값을 원격지 내용을 받는다.

curl_setopt($ch, CURLOPT_HEADER, 0); // 헤더정보를 가져오는가에 대한 체크 


curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // 받는방식



$response = curl_exec($ch); // 세션을 실행함 단순히 미리정의된 세션실행
var_dump($response); // 값전송


curl_close($ch); // 리소스를 비우고, 에러번호리턴, 핸들삭제 
$xml=simplexml_load_string($response) or die("Error: Cannot create object");

$name = $xml->msgBody->itemList->stNm;
$time1 = $xml->msgBody->itemList->arrmsg1;
$time2 = $xml->msgBody->itemList->arrmsg2;
$size1 = $xml->msgBody->itemList->vehId1;
$size2 = $xml->msgBody->itemList->vehId2;
$firstime = $xml->msgBody->itemList->firstTm;
$lastime = $xml->msgBody->itemList->lastTm;

$big = array("102025099","102025100","102025102");
$small = array("102025101","102025098","102025103");

$arrive="곧 도착";
$onetime="1";
$zero="0";
$arr1 =explode('분' , $time1);
$arr2 =explode('분' , $time2);

$time =date("H시i분");
$str1=strcmp($arr1[0],$arrive);
$str2=strcmp($arr1[0],$onetime);
$str1_1=strcmp($arr2[0],$arrive);
$str2_1=strcmp($arr2[0],$onetime);
$stat1 = explode('[',$time1);
$stat2 = explode('[',$time2);
$st1=strlen($stat1[1]);
$st2=strlen($stat2[1]);
if($st1==13){$stat_cut1= substr($stat1[1],0,2);}
if($st1==12){$stat_cut1= substr($stat1[1],0,1);}
if($st2==13){$stat_cut2= substr($stat2[1],0,2);}
if($st2==12){$stat_cut2= substr($stat2[1],0,1);}


$find1=substr($stat_cut1,0,1);
$find2=substr($stat_cut2,0,1);
$stat_res1=$stat_cut1."정류장 전" ;
$stat_res2=$stat_cut2."정류장 전" ;
$str3=strcmp($stat_cut1,$zero);
$str4=strcmp($stat_cut2,$zero);
$fir_min=substr($firstime,0,2);
$fir_sec=substr($firstime,2,4);

$res1 = $stat_res1.",  ".$arr1[0]."분 후 도착 합니다.";
$res2 = $stat_res2.",  ".$arr2[0]."분 후 도착 합니다.";

if(!$str2||!$str3||!$str1){$res1 ="곧 도착";}
if(!$str2_1||!$str4||!$str1_1){$res2 ="곧 도착";}

foreach($big as $value){
	if($size1==$value){$res_size1="큰 버스";}
	if($size2==$value){$res_size2="큰 버스";}
}
foreach($small as $value){
	if($size1==$value){$res_size1="작은 버스";}
	if($size2==$value){$res_size2="작은 버스";}
}
if($res_size1==NULL||$res_size2==NULL){
$res_size1="운행준비중";
$res_size2="운행준비중";
$res1="첫차는 " .$fir_min." 시 ".$fir_sec."분 입니다.";
$res2="첫차는 " .$fir_min." 시 ".$fir_sec."분 입니다.";
}


        ?>