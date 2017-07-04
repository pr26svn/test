<?
//простейшее применение данного класса, бположил рядом файл
//пример действия тут http://u8369jhp12080.edem.cameta.in.net/test/?clear_cache=Y
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
require($_SERVER["DOCUMENT_ROOT"]."/test/ip.php");
$ip=new GeoIp;
$arIP=$ip->get_po_ip($_SERVER['REMOTE_ADDR']);
if($arIP!=false)
    print_r($arIP);
else
    echo "Введен не верный ip";
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>