<?php

//include('function.php');
define('PRIVATE_KEY_BAOKIM', '-----BEGIN PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCpsgLQx4Wu/kPU
UIJqRfUSl2kvub9jY1yK9epObeT1I7mZY2S+hn42056Z7nVh6iaUFxaQ1olO1qYC
Y9LnspNxIAl7vRhIzLDVnR/lG7G5Dnq9vO/6UnmfT4LHuivEwLIe0UvSebRklz+u
EFuI0Ei+ooigWhhGHGg0xWxW7IWcOZmXBj0UBiCxmGVgAVNJiLPcqmzMRbFsDAXZ
XY5+HfJs9eXlGxFCRhzq2vq/t0xKSYm6GQ2n6NHvurga0FBby9Sj0fhvLTTEHSpu
f9xbLmXgQ0KA8MFSLyb7xAIMjtUCewiEa/M9qEWArOIysEHbySrnPH4P0YHA90Kr
cHUdzrdhAgMBAAECggEAe/aJLgEC/GHMJRYnHwE51Tn8Yhvb3vvfx7d7UY3f+t/9
HjtIhhHzs5OFwcc7wqptQjNXjbjbF1egcBCCKjX+lV4k71qkmdHFwFaGzTQc8SXN
rjuORxvmsuU/kS3D+XgW5oJYVEoJ6I3AvCRA6cHV0kUjb5hBMT5hNWOfECS6OfN9
O1KJoxNZX9W5kn0Z0yEARZE/SsI2m/mD3eNBaqVH2OV/oIxQl0poX7SV8uNFPUxs
UqqK7MMtpmRMV5zlT3WZBKCTx0kTzU4Ru0/GzfNDplBqucemYw5qttstM/VdLZ5t
oJY4tWkxN9GdkwJdYtTcd5siGH4fkIxW0Tpt5SCQQQKBgQDXbalnfJj9DIouOeTd
TBA3RnuAh/mWBgIn/r8VjdGgQu1vFJzpgpxMLmfZGAAZA3g5KheSkyADAB03Xtoz
CPaSt2kcwRka0YJiQIt4x52HF8zLeZe82gwmvQ9W7bfhzmNl7cYY4khzMkndoJd8
LRuI6SsRMOuFRxntkf0VH2Pf+QKBgQDJp3JmadMx0cCzCzCBj3OlL3Lw2BDqj6Ja
8LPavvMslosKl0x/+EkUdWPmIzsUPPQo0jt3+Ql0WbMlB3q811E0VFzK4+0adCBo
5Qll0YIXsjkgV969pXuGqxAroAQEFxijmrfKmxp8T8BQkWQpPI5E/uugibRmmtYX
HGgJws28qQKBgQCA55Z5XP3yVQGN/YhrvqrpWFxoIXUAByJdKjrOu+iWW9XVJOFr
fILnttDe/1R3ozLaCczHIRADm5rf2fr4lMFuMx9LXGQYPwsknXiXUeJ5xoz9qAla
sKKav4AhROdFz4h8olVp6GTvwUSfwAtE+3zBZLwncj1Lp6rlE/j7HahWiQKBgCjg
lbMm/pXZxCtHOGT7FGFG1hD2a69wwGOY6YyNKrQ+LB9QfkRuqznHdiG/wIkgtgnU
XBO82urICCWYd4vyRdbKxyilvXmgUrWQwC/woWN2UFg7F77v3bN118hQHqBJokf/
5APhHyRV8lEit+AYE2rvFgqr/3LRLlbu/jQEVjpJAoGAaSkPeZW3TWbfnEto6OLq
84YCyOD3TY4mnkR4a22CWu5x02HJDnkudEHCzurDNCFJVdVXTlrFYUX/oIsoxbTB
E+De78Law3PZl7JCXf/t5kSvh30V1NcMBMYQS6huXhjJf9i078t4PBtXKUx6/kOe
4n9x/gNqGoY6GcE5adlCjMg=
-----END PRIVATE KEY-----'); //thay
define('HTTP_USER', 'motgia.tk'); //thay
define('HTTP_PWD', 'KgOi5MmAFKLPCthzo'); //thay
//Phương thức thanh toán bằng thẻ nội địa
define('PAYMENT_METHOD_TYPE_LOCAL_CARD', 1);
//Phương thức thanh toán bằng thẻ tín dụng quốc tế
define('PAYMENT_METHOD_TYPE_CREDIT_CARD', 2);
//Dịch vụ chuyển khoản online của các ngân hàng
define('PAYMENT_METHOD_TYPE_INTERNET_BANKING', 3);
//Dịch vụ chuyển khoản ATM
define('PAYMENT_METHOD_TYPE_ATM_TRANSFER', 4);
//Dịch vụ chuyển khoản truyền thống giữa các ngân hàng
define('PAYMENT_METHOD_TYPE_BANK_TRANSFER', 5);
class Includebaokim extends CI_Model{

public function makeSignature($method, $url, $getArgs = array(), $postArgs = array(), $priKeyFile) {
    if (strpos($url, '?') !== false) {
        list($url, $get) = explode('?', $url);
        parse_str($get, $get);
        $getArgs = array_merge($get, $getArgs);
    }

    ksort($getArgs);
    ksort($postArgs);
    $method = strtoupper($method);
    $data = $method . '&' . urlencode($url) . '&' . urlencode(http_build_query($getArgs)) . '&' . urlencode(http_build_query($postArgs));
    $priKey = openssl_get_privatekey($priKeyFile);

    openssl_sign($data, $signature, $priKey, OPENSSL_ALGO_SHA1);

    return urlencode(base64_encode($signature));
    }

//	$uri = 'http://kiemthu.baokim.vn'; // link test
    public function load_bk() {
        $uri = 'https://www.baokim.vn'; // link thật
//
///include.php       
        $url = '/payment/rest/payment_pro_api/get_seller_info';
        $arrayGet = array('business' => 'ductan_nguyen92@yahoo.com'); //thay
        $signature = $this->makeSignature('GET', $url, $arrayGet, array(), PRIVATE_KEY_BAOKIM);

        $url_signature = $uri . $url . '?signature=' . $signature . '&business=' . $arrayGet['business'];


        $curl = curl_init($url_signature);

        curl_setopt_array($curl, array(
            CURLOPT_POST => false,
            CURLOPT_HEADER => false,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_TIMEOUT => 50,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPAUTH => CURLAUTH_DIGEST | CURLAUTH_BASIC,
            CURLOPT_USERPWD => HTTP_USER . ':' . HTTP_PWD,
        ));

        $data = curl_exec($curl);

        return $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        return $result = json_decode($data, true);
    }

}

?>