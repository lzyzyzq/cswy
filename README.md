<？PHP

函数getNetworkTime(){
$url='http://worldtimeapi.org/api/ip';

$response=file_get_contents($url)；

if($response){
$data=json_decode($response，true)；
if($data&&isset($data['datetime'])){
return$data['datetime']；
}
}

返回null；
}

$networkTime=getNetworkTime()；
if($networkTime){
echo"网络时间：".$networkTime；
}else{
echo”检索网络时间失败。”；
}

?>
