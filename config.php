<?php

//基础配置

$config = [
    'mch_id'     =>  '100001',
    'mch_key'    =>  '772ae1d32322f49508307b2f31a0107f',
    'private_key'   =>  'MIIEowIBAAKCAQEAtJKWdvG8MDILqwcoR721+pTT8ClC+5vq60pfXQAFsoIt8E6oQsDgMIdvp6FP2YjCeTJrr9MjQoC7t8yXO+liau70bMNbds/wg8arh+8jIHYDNIu4nFHlDTdk9y72xWAQixnGT3F/zSoLWv8LvrmfOHDSByD+/RPeiS04/GwVr/SLlbxSp+Rf7ano//5CD9XjD6jVz7IwBcurmqrqenRujNBDAZOncKbKhWfs3AdWhj4iQZeptYtHo3NXc+s3ehdqgEt6qukAENBApx1ROYAyZG6O2b4okzWW+rrJeDWdNKeixyw4nQjtINR/t82cH8xMTSky41N3N7L2eB0tAc/PhQIDAQABAoIBAAZjtX1J+n2+F5marDs1pE3UnFdALoWWs85VmGBDEvCJGLULI3sRNh2hfTryQ1AQPclqFlNnZjUBNyM+0w8kp/3erLl4hDEFFJ6lFga+WIDajCx80TB+2VsJXcI9YDAFwTAa3mCLRJlu5m323mSGTvMBUv07lqo/3Lz/46dS78WFE3uCmaRn8JOAz8wLGWTO1YtEd8yxQR035L9/+eDhi9HuibqBWInRKn8EkljsvlDFzeZM/fqNwO/DDVlAp1zELon+729w5cfHTnpIjlPo8mOIGOHpCrxYMvUKMlY3eStlDYhxpShfny81Sm4dI6kE3V6SIRgAfL/GDOKaCkUaXhUCgYEA4bP46VUHX7QgdinjrsVOlKiS8oDCm/+62bE47ukbqy4s7pGSkyOyqiSKVWCe3pq4cZ7yDSgYeFtYpKoZWLvWn5Rz0MtL5lATHZXLfaNH6a1PwbzQv2cP70ukSJjHJUspflfHFHzlQhB+a+81I1KoLuFlr7b2M+JoYl9I6pyJMxcCgYEAzM/CnzHKrX3v+FEXqCphElaGexSIRbQLFVF3IR3wlfIVLpFx5UFlIjwY8Ulj6nNKqo1aZ0h7lkMjS/q5L0iDxGN0mA8LsHlqbL6hyyVCE3QO+CpLEAsJXHr3OIUmx/YNjM+/fG/6NaADw7RUt0QWDV2wV1VBeLv6eKXO+YVUY8MCgYEAqvAmTXmzev0uNLAnG3+dsyM1H+r6+TEmb6c0amUsKmpvZ0PjUgMQVqIUDvN9fzSJCqyJwAMk/UqZiSS2y6h/tR621GSUGFt/DsIbew0F8unq5N0+8Cd7Pw3332+uLAWP6HtMcKzi6TUaul5RzW3VqKPW4szcDJGl4xMtY1qo4oMCgYARgPwQIPBCbY3xufR8ocqUB6MMp8+RrXZ5BvJYeTeTiRH4XePPBQzApUQ4ct5ALkRGWThNtWsih3Bf0Pi8qsTgJuPTDw4fsfC/hHdNZkzEXtncqbiqkVbmeXfhc7fBxSyZSTQDTYqjxJ4tvp6y3vXHhKdKf3XN/LrGTt1mg9eXgwKBgAtkhdV7pGBJFwdcGuBetkI/bDD+HkdUZLQNYUeUihb5RdhpSYR/GWkjjNbKPvtYnBJ41KlVw/Adi+vkNvE7csSzwtq8aBOQrRkCsjrtNt2bdq0UACO4ze4F+bTiJBI5uOrCqi5HzGHjlxjo6h23iWN52/ddMfbFHVLbK6CG3HuI', //商户数据私钥
    'cm_public_key'    =>  'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtJKWdvG8MDILqwcoR721+pTT8ClC+5vq60pfXQAFsoIt8E6oQsDgMIdvp6FP2YjCeTJrr9MjQoC7t8yXO+liau70bMNbds/wg8arh+8jIHYDNIu4nFHlDTdk9y72xWAQixnGT3F/zSoLWv8LvrmfOHDSByD+/RPeiS04/GwVr/SLlbxSp+Rf7ano//5CD9XjD6jVz7IwBcurmqrqenRujNBDAZOncKbKhWfs3AdWhj4iQZeptYtHo3NXc+s3ehdqgEt6qukAENBApx1ROYAyZG6O2b4okzWW+rrJeDWdNKeixyw4nQjtINR/t82cH8xMTSky41N3N7L2eB0tAc/PhQIDAQAB', //支付平台公钥
    'notify_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/notify.php',
    'return_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/return.php'
];