<?php
$str = "'军人','军属',''";
$ne = "";
var_dump(strpos($str,"'{$ne}'"));exit;

$x = '想';
var_dump(!$x);
$a = [
    
];
var_dump(array_shift($a));



try{
    $a = 1;
$b = 2;
    echo $a;
    throw new Exception("Value must be 1 or below");
} catch(\Exception $e){
    echo $b;
}

$a = $_GET['a']??0;
var_dump(date("Y-m-d H:i:s"));

if($a ==1) {
    $fp = getSignFileLock();
    // flock($fp,LOCK_EX);
    // if(flock($fp,LOCK_EX))
    // {
        var_dump(date("Y-m-d H:i:s"));
        var_dump("suo");
        // sleep(10);
        delSinFileLock($fp);
        // flock($fp,LOCK_UN);
    // }else{
    //     var_dump("lock");
    // }
    var_dump(date("Y-m-d H:i:s"));
    
} else{
    var_dump(22);
}

function getSignFileLock(){
    $file = "signLockFile.temp";
    // if(!file_exists($file)){

    // }
    $fp = fopen($file, "w+");
    flock($fp,LOCK_EX);
    return $fp;
}

function delSinFileLock($fp){
    flock($fp,LOCK_UN);
    fclose($fp); 
    return true;
}
var_dump(PHP_VERSION);
$max =1;
var_dump(strtotime(date('Y-m-d')));exit;

echo '<pre>';
$timeBucketSetJson = '[{"start":"08:30:00","end":"09:00:00"},
{"start":"09:30:00","end":"10:00:00"},{"start":"10:00:00","end":"17:30:00"}]';
$timeBucketSet = json_decode($timeBucketSetJson,true);
$nowtime = date('H:i:s');
$nowsstart = '';
$nowend = '';
$nextstart = '';
$nextend = '';

foreach ($timeBucketSet as $v) {
    $order = ++$max;
    var_dump($order);
    var_dump($max);
    if($v['start'] <= $nowtime && $nowtime <=$v['end']){
        $nowsstart = date('Y-m-d ').$v['start'];
        $nowend = date('Y-m-d ').$v['end'];
    }
    if($nextstart == '' && $v['start'] > $nowtime) {
        $nextstart = date('Y-m-d ').$v['start'];
        $nextend = date('Y-m-d ').$v['end'];
    }
}

var_dump($timeBucketSet);exit;

// $data = 'my data';

// //create new private and public key
// $new_key_pair = openssl_pkey_new(array(
//     "private_key_bits" => 1024,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// openssl_pkey_export($new_key_pair, $private_key_pem);

// $details = openssl_pkey_get_details($new_key_pair);
// $public_key_pem = $details['key'];

// //create signature
// openssl_sign($data, $signature, $private_key_pem, OPENSSL_ALGO_SHA256);
// var_dump($private_key_pem);
echo "\r\n";

$publicKey = "-----BEGIN PRIVATE KEY-----
MIICdQIBADANBgkqhkiG9w0BAQEFAASCAl8wggJbAgEAAoGBAJWsLsfeSXA++pfg
FNzRm0jKu7csTNx4Xlmmjjvhmk9vLE/jVo/hsY3JcGaFmPQh4ZTizAyGDCszBLuh
CqjOBDsw/wpCkSJod2+L56esv5kfvfQWI9wwfoe7cIjb7rg99qwUpaDZYX6YV98i
jf1RibN6cwe8Ca25+L3LaJW3dBrJAgMBAAECgYBw3fglFpaQw51bnEp/Pr14BhHK
juijNU4JExWdSIKCNlbXI5uqQssPHgHZ/hMavtYK3YB8TTWt+fout8F/DGSZSxIb
ULan7f0/mVgvPYxqyfYTkedsn3vSWBkTsScsPkujKFOUTrPg6iZaNqhLb1t4D3VF
kASMOWC+pvIm8W4Q9QJBAMdi7uWftWyVknuh7WAXX3jpVZE85L4aDGd0+TcirsqU
TtzzPPbu14eFE9HzXG9gWDksAcDffaY5jWH2FbvKGVsCQQDAK6HdjGBeCB1ava7K
eGmF7Dy4nTDGMnmee/QKfxDDLrj3M8RxdLYGfj6fCrkLCPut8lScnS1RDANnlV9G
DHGrAkAcTx6uOZvPu/jdVuNWJltm1nJQub2chCRIuCH+Qw1gM+hylJKOWOD/G9Tx
lUUFhz9fdrEVCmZTqI47X248iHhLAkAtEY6Ml/150BliUJ4PqhHFcNQE0AjCUtAn
FRb05zv9KpYCk8d8fEy8VRtGnXMsXVz5PJ4PZOVd3p1ly6hee0ilAkBp7iMTnAU/
/4ioYxZqqVgx0590znTcL+79+gkvsbFEHP+f0u8ajSTUwomnaw+961G3aH9Y082S
+8+DKvkWJ+kw
-----END PRIVATE KEY-----";

$publicKey = "-----BEGIN PRIVATE KEY-----
MIICdQIBADANBgkqhkiG9w0BAQEFAASCAl8wggJbAgEAAoGBAJWsLsfeSXA++pfg
FNzRm0jKu7csTNx4Xlmmjjvhmk9vLE/jVo/hsY3JcGaFmPQh4ZTizAyGDCszBLuh
CqjOBDsw/wpCkSJod2+L56esv5kfvfQWI9wwfoe7cIjb7rg99qwUpaDZYX6YV98i
jf1RibN6cwe8Ca25+L3LaJW3dBrJAgMBAAECgYBw3fglFpaQw51bnEp/Pr14BhHK
juijNU4JExWdSIKCNlbXI5uqQssPHgHZ/hMavtYK3YB8TTWt+fout8F/DGSZSxIb
ULan7f0/mVgvPYxqyfYTkedsn3vSWBkTsScsPkujKFOUTrPg6iZaNqhLb1t4D3VF
kASMOWC+pvIm8W4Q9QJBAMdi7uWftWyVknuh7WAXX3jpVZE85L4aDGd0+TcirsqU
TtzzPPbu14eFE9HzXG9gWDksAcDffaY5jWH2FbvKGVsCQQDAK6HdjGBeCB1ava7K
eGmF7Dy4nTDGMnmee/QKfxDDLrj3M8RxdLYGfj6fCrkLCPut8lScnS1RDANnlV9G
DHGrAkAcTx6uOZvPu/jdVuNWJltm1nJQub2chCRIuCH+Qw1gM+hylJKOWOD/G9Tx
lUUFhz9fdrEVCmZTqI47X248iHhLAkAtEY6Ml/150BliUJ4PqhHFcNQE0AjCUtAn
FRb05zv9KpYCk8d8fEy8VRtGnXMsXVz5PJ4PZOVd3p1ly6hee0ilAkBp7iMTnAU/
/4ioYxZqqVgx0590znTcL+79+gkvsbFEHP+f0u8ajSTUwomnaw+961G3aH9Y082S
+8+DKvkWJ+kw
-----END PRIVATE KEY-----";

var_dump($publicKey);
$str = '{"cardNo":"1559277278","cardType":"2","extendMap":{"deptName":"神经内科","waitingNum":"0","deptAddress":"北楼三楼","doctName":"由世浩","appoNo":""},"flowId":"293-40-20220819113212024","hospCode":"3702011035","hospitalId":293,"idNo":"370224197208302612","messageType":"40","operId":"00","patientId":"20220000174156","patientName":"陆方友","service":"yuantu.wap.notify.message","sign":"WSO2uShU/UcT5HZ2TBNB4641H+6Qv6HDPzuqscVtCaOwd2/PSB41FfiDWklAc4pzBqST3rlTNKCkFwqPu6APQOzEnRty0qWrlSAfPf6lupBIHlzXUPF3odd6z88TAD07Nrjkv6kGtTcAmJdRg255tpJ0ktSzlin5l3KCd6PfklU=","signType":"RSA","sourceCode":"HIS","tradeTime":"2022-08-19 11:32:12"}';
$arr = [
    "cardNo" => "1559277278",
    "cardType" => "2",
    "extendMap" => '{"deptName":"神经内科","waitingNum":"0","deptAddress":"北楼三楼","doctName":"由世浩","appoNo":""}',
    "flowId" => "293-40-20220819113212024",
    "hospCode" => "3702011035",
    "hospitalId" => 293,
    "idNo" => "370224197208302612",
    "messageType" => "40",
    "operId" => "00",
    "patientId" => "20220000174156",
    "patientName" => "陆方友",
    "service" => "yuantu.wap.notify.message",
    "sign" => "WSO2uShU/UcT5HZ2TBNB4641H+6Qv6HDPzuqscVtCaOwd2/PSB41FfiDWklAc4pzBqST3rlTNKCkFwqPu6APQOzEnRty0qWrlSAfPf6lupBIHlzXUPF3odd6z88TAD07Nrjkv6kGtTcAmJdRg255tpJ0ktSzlin5l3KCd6PfklU=",
    "signType" => "RSA",
    "sourceCode" => "HIS",
    "tradeTime" => "2022-08-19 11:32:12"
];
$extend = "{'deptName':'测试','createTime':'2022-09-19 15:00:00','deptAddress':'测试','currentAppoNo':'1100','waitingNum':1,'tradeTime':'2022-09-19 15:00:00','status':'0','passTime':'2022-09-19 15:00:00','doctorCallingTime':'2022-09-19 15:00:00','patientName':'测试','appoNo':'现金','preCallingTime':'2022-09-19 15:00:00','completeTime':'2022-09-19 15:00:00','modifyTime':'2022-09-19 15:00:00','parentDeptName':'测试2','doctName':'测试医生','diagRoomName':'测试诊室'}";
$extend2 = [
    'deptName'=>'测试',
    'createTime'=>'2022-09-19 15:00:00',
    'deptAddress'=>'测试',
    'currentAppoNo'=>'1100',
    'waitingNum'=>1,
    'tradeTime'=>'2022-09-19 15:00:00',
    'status'=>'0',
    'passTime'=>'2022-09-19 15:00:00',
    'doctorCallingTime'=>'2022-09-19 15:00:00',
    'patientName'=>'测试',
    'appoNo'=>'2222',
    'preCallingTime'=>'2022-09-19 15:00:00',
    'completeTime'=>'2022-09-19 15:00:00',
    'modifyTime'=>'2022-09-19 15:00:00',
    'parentDeptName'=>'测试2',
    'doctName'=>'测试医生',
    'diagRoomName'=>'测试诊室'
];
$type40 = [
    "patientName"=>"刘曾兰",
    "patientId"=>"121417",
    "cardType"=>"",
    "cardNo"=>"",
    "sign"=>"",
    "idNo"=>"370224193805122320",
    "extend" => $extend,
    "tradeTime"=>"2022-09-19 15:00:00",
    "sourceCode"=>"HIS",
    "messageType"=>"40",
    "hospitalId"=>"525",
    "hospCode"=>"3702051048",
    "service"=>"yuantu.wap.notify.message",
    "signType"=>"RSA",
    "flowId"=>"100004"
];
$arr2 = [
    "cardNo" => "100",
    "cardType" => "2",
    "service" => "yuantu.wap.notify.message",
    "sign" =>'',
    "signType" => "RSA",
    "sourceCode" => "HIS",
    "tradeTime" => "2022-09-15 11:32:00"
];
function formmate($arr) {
    $buff = '';
    ksort($arr);
    foreach($arr as $k=>$v){
        if($k =='sign' || $k =='signType' || $v ==null || $v=='') {
            continue;
        }
        $buff .= $k .'='.$v.'&';
    }
    $buff = trim($buff,'&');
    return $buff;
}
$t = formmate($arr2);
var_dump($t);


$signedStr = '';
// openssl_sign($t, $signedStr2, $publicKey, OPENSSL_ALGO_SHA256);
$prk = openssl_get_privatekey($publicKey);
openssl_sign($t, $signedStr, $prk, OPENSSL_ALGO_SHA1);
$sign = base64_encode($signedStr);

$arr2['sign'] = $sign;
var_dump($arr2);

openssl_sign($t, $signedStr, $publicKey, OPENSSL_ALGO_SHA1);
$sign = base64_encode($signedStr);

$arr2['sign'] = $sign;
var_dump($arr2);exit;


var_dump(json_encode($arr2));
$t2 = formmate($type40);
var_dump($t2);
$signedStr2 = '';
// openssl_sign($t, $signedStr2, $publicKey, OPENSSL_ALGO_SHA256);
openssl_sign($t2, $signedStr2, $publicKey, 'sha256WithRSAEncryption');
$sign2 = base64_encode($signedStr2);

$type40['sign'] = $sign2;
var_dump($type40);

var_dump(json_encode($type40,JSON_UNESCAPED_UNICODE));



// $sign2 = base64_encode($signedStr2);
// var_dump($sign);
// var_dump($sign2);
ini_set("display_errors", "On");
error_reporting(1);exit;
ini_set("display_errors", "On"); //打开错误提示

ini_set("error_reporting", E_ALL); //显示所有错误
function a()
{
    $a = ['aa' => 22];
    $b = !$a['aa'] ? 1 : $a['a'];
    return ['a', 'b'];
}

try {
    list($c, $d) = a();
    echo 1;
    echo "\n";
    echo $c;
    echo "\n";
    echo $d;
    echo "\n";
} catch (Exception $e) {
    echo 2;
}
// var_dump(date('Y-m-d H:i:s'));
