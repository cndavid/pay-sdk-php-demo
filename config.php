<?php

//基础配置

//$config = [
//    //平台商户ID
//    'mch_id'     =>  '100001',
//    //商户key
//    'mch_key'    =>  '772ae1d32322f49508307b2f31a0107f',
//    //商户数据私钥 后台设置需要填写 公钥
//    'private_key'   =>  'MIIEowIBAAKCAQEAtJKWdvG8MDILqwcoR721+pTT8ClC+5vq60pfXQAFsoIt8E6oQsDgMIdvp6FP2YjCeTJrr9MjQoC7t8yXO+liau70bMNbds/wg8arh+8jIHYDNIu4nFHlDTdk9y72xWAQixnGT3F/zSoLWv8LvrmfOHDSByD+/RPeiS04/GwVr/SLlbxSp+Rf7ano//5CD9XjD6jVz7IwBcurmqrqenRujNBDAZOncKbKhWfs3AdWhj4iQZeptYtHo3NXc+s3ehdqgEt6qukAENBApx1ROYAyZG6O2b4okzWW+rrJeDWdNKeixyw4nQjtINR/t82cH8xMTSky41N3N7L2eB0tAc/PhQIDAQABAoIBAAZjtX1J+n2+F5marDs1pE3UnFdALoWWs85VmGBDEvCJGLULI3sRNh2hfTryQ1AQPclqFlNnZjUBNyM+0w8kp/3erLl4hDEFFJ6lFga+WIDajCx80TB+2VsJXcI9YDAFwTAa3mCLRJlu5m323mSGTvMBUv07lqo/3Lz/46dS78WFE3uCmaRn8JOAz8wLGWTO1YtEd8yxQR035L9/+eDhi9HuibqBWInRKn8EkljsvlDFzeZM/fqNwO/DDVlAp1zELon+729w5cfHTnpIjlPo8mOIGOHpCrxYMvUKMlY3eStlDYhxpShfny81Sm4dI6kE3V6SIRgAfL/GDOKaCkUaXhUCgYEA4bP46VUHX7QgdinjrsVOlKiS8oDCm/+62bE47ukbqy4s7pGSkyOyqiSKVWCe3pq4cZ7yDSgYeFtYpKoZWLvWn5Rz0MtL5lATHZXLfaNH6a1PwbzQv2cP70ukSJjHJUspflfHFHzlQhB+a+81I1KoLuFlr7b2M+JoYl9I6pyJMxcCgYEAzM/CnzHKrX3v+FEXqCphElaGexSIRbQLFVF3IR3wlfIVLpFx5UFlIjwY8Ulj6nNKqo1aZ0h7lkMjS/q5L0iDxGN0mA8LsHlqbL6hyyVCE3QO+CpLEAsJXHr3OIUmx/YNjM+/fG/6NaADw7RUt0QWDV2wV1VBeLv6eKXO+YVUY8MCgYEAqvAmTXmzev0uNLAnG3+dsyM1H+r6+TEmb6c0amUsKmpvZ0PjUgMQVqIUDvN9fzSJCqyJwAMk/UqZiSS2y6h/tR621GSUGFt/DsIbew0F8unq5N0+8Cd7Pw3332+uLAWP6HtMcKzi6TUaul5RzW3VqKPW4szcDJGl4xMtY1qo4oMCgYARgPwQIPBCbY3xufR8ocqUB6MMp8+RrXZ5BvJYeTeTiRH4XePPBQzApUQ4ct5ALkRGWThNtWsih3Bf0Pi8qsTgJuPTDw4fsfC/hHdNZkzEXtncqbiqkVbmeXfhc7fBxSyZSTQDTYqjxJ4tvp6y3vXHhKdKf3XN/LrGTt1mg9eXgwKBgAtkhdV7pGBJFwdcGuBetkI/bDD+HkdUZLQNYUeUihb5RdhpSYR/GWkjjNbKPvtYnBJ41KlVw/Adi+vkNvE7csSzwtq8aBOQrRkCsjrtNt2bdq0UACO4ze4F+bTiJBI5uOrCqi5HzGHjlxjo6h23iWN52/ddMfbFHVLbK6CG3HuI',
//    //支付平台公钥
//    'cm_public_key'    =>  'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxV1hB4NP1NFgEM0mrx34z8gJMPBIhvDjAJcnMozk3jmUY9PkB7lZyfD6Fb+Xq21jIPX5zF4ggeYoK5keUH6TW9eJEr5JOqDl2YgKAdLfxLuJ4r8X1S3wflVp2/BURIbP1VGh6qNAxS3o8miL7x5BZ+jOhs4/LCq8YkncZioui5eAQ+/BoE++uM5IeSWZEVf8JsGo+MrOG2E/eOqetrB08Tm68igM6OMbKr05HKupcZm63zzDIHRJGKRjvdFjVoVznGsAC3phyh3bzYrjxykH00mLyw39/77MiBMp/uWVMh6wwiAjY2B25IKXXGCd0JSYvlpJWtCKbxlcAGDWSWkS0wIDAQAB',
//    'notify_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/notify.php',
//    'return_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/return.php'
//];

$config = [
    //平台商户ID
    'mch_id'     =>  '100013',
    //商户key
    'mch_key'    =>  'bfc31903de7923691e31d44a1225ef77',
    //商户数据私钥 后台设置需要填写 公钥
    'private_key'   =>  'MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBANrXBFMRZ/HOL/WO
RVcQ7OjxCu95dvDjD2HMlCbWiWdFhoIM7uY5q2k3jt2vZmZzxnsisGCCElupTKm8
lb8bumWAAZ1o3rfLTxHewjmS9PfFmf5y2jOsnNbzSC2H57iV12Ibv2lp2N8LEX0d
skta61fOU5HKyDMQkBYZ9JKjLeFDAgMBAAECgYA0Pqz7n+Yu5kiw2PxY4uOMYS95
KIhqzep4ML0V4JYBH6oTFj9am13+ypLC/gL2ZqF1+Dwfbi4vz+VLiIg/jcEb1QT5
Z3afGqfeiPL02XLmCg6tH1PNuyfWGmPVkJ/Eo0ZMzQfth9w6PsEGk3C6bFG0PTnj
CC9zVsCSby2+eFGikQJBAP0PRNCI7fXvwmBL4cxTSVT18pRpiJbnj9FFlRcckaKL
rHqzBFKdeXUfPeBT3NeWx06sWXOXDrVuclfNuAxYOZUCQQDdYfX1LDg5MoZLGAkZ
yZSSh/uKIL0qXTJqM0of4MMXowQUWx6jr/2jYAOspFUaHtruOcEHE172HSMXddr7
GWl3AkEA9l8wMwqtCjzD9DbMfb40begJpR5d4fVOGoNxFJA25ZawdMDnG3u/LR0e
g9GB988O+fRoHlZZ9p+x6PQbFMGsRQJBANylcUY+H39qiwy3VQK9tfXh0GQYQ1HA
96l/myZwlyGs2TkMpFoS42J9JMxiMWvKSvxa1beep+v2mG4eifXwmvsCQEU6FVM7
HdOLynGZHAMDqUgo/X5M+LuNRUNQH4slqIXddAZkH9ccw9HXFvQ54xE3L+FEyZ3L
IevVf3vXQMROWzA=',
    //支付平台公钥
    'cm_public_key'    =>  'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxV1hB4NP1NFgEM0mrx34z8gJMPBIhvDjAJcnMozk3jmUY9PkB7lZyfD6Fb+Xq21jIPX5zF4ggeYoK5keUH6TW9eJEr5JOqDl2YgKAdLfxLuJ4r8X1S3wflVp2/BURIbP1VGh6qNAxS3o8miL7x5BZ+jOhs4/LCq8YkncZioui5eAQ+/BoE++uM5IeSWZEVf8JsGo+MrOG2E/eOqetrB08Tm68igM6OMbKr05HKupcZm63zzDIHRJGKRjvdFjVoVznGsAC3phyh3bzYrjxykH00mLyw39/77MiBMp/uWVMh6wwiAjY2B25IKXXGCd0JSYvlpJWtCKbxlcAGDWSWkS0wIDAQAB',
    'notify_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/notify.php',
    'return_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/return.php'
];
