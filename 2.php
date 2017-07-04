<?
class GeoIp{
    public function get_po_ip($ip_adres){
        if (filter_var($ip_adres, FILTER_VALIDATE_IP)) {  //проверяем валидность ip адреса
            $client = new SoapClient('http://www.webservicex.net/geoipservice.asmx?WSDL');
            $result = $client->GetGeoIP(array('IPAddress' => $ip_adres));//получаем информацию по SOAP
            return $result;
        }
        return false;
    }
}
?>