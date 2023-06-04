<?php

$url = 'https://gencbis.gsb.gov.tr/OkulTemsilcisi/OkulTemsilcisiYOKSorgula';
$cookie = '_ga=GA1.3.1920586556.1683443980; _ga_JQS5K7ZTKD=GS1.1.1684341183.4.0.1684341518.0.0.0; SLG_G_WPT_TO=tr; SLG_GWPT_Show_Hide_tmp=1; SLG_wptGlobTipTmp=1; GSB_SessionId=p4hbmvujktneyhcsw2cs2uwx; __RequestVerificationToken=2o7R0JR7EPAh7HC6yNS2pw9V6caDGC3n8ZnAM--vqTfE1KMSXiD5Zpjx1A7QhJ3qivroxt1-9H24h61JLiJj0Tp-9fpqMhWXscZTYAPMBFk1; TS01b3c1fd=0156dce4c8aae2167fedd3bf7e6ad5830d6f31caddca17e84806ed38289fab6eeca18127ece009f0e0060f8f2aae4b209951669170; .AspNet.ApplicationCookie=bmIk82eQjpT3jyG3_auYmvqEDFP7SBDqw5T9--AqC31rONehpdX3wqXUHEkcJGdIAH-1t1-PCOCG2Ptx5doJDnm77ih2YE3YsQm-P7q-X0tk-WWuEfbtl0-IMpj6AzjyLD01l_eDiaBhpHGEtsgishFcN268EIxgzUnKCw8kG1VnFw3NB2Rg5NP4XoQ-05F5hV4Hk1S9jlT7G5p84nWP__5iGX7i1Hmz7GXMFqhVd6D0lsF93Nt2RfwCBLXqHAYQVzbLlCGVZPrrln-pm8g1LrBhWzAamR6wZ78K2Gt-fOExvT1clggbO3lprfVohENFE3-vP6pMoGXu_OmK3rGqPTnNZ82ypUtUXZxhlmQ-mAZdRRTj-ACgi_cd5hrgwwdORR151TTzmHGn1vMlEX2sz4BsLLuch9iPJxrVn3xtIWVlw_mRPq49T0x2ptuq5T7aL3mXgVYhJaVAdQET4199yJsEbxOC4OYtsSR0q7SCzJIbW_lstO7Fc-HVnz_aYSuOw0ugZzEGYgblwmDlyJeNzKFM18DwqjnnsXZJvjL3OvAfk08NGjW-Y49qvN-Zh3IB6XgCSHDgC0ewbyy9t9HkevbWrjFV5cK5JZdfKqanjmcYilc9iNd67L85647sTe0inS-75oVCmnJyXGkRtQrlMw; dcjq-accordion=1%2C7%2C9; TS5b5ae552027=08ac3e3a4fab2000c6df6551252eb98ba31235ef0fdbd0fcb76b0f6c0dc4adc109c980a03b0904c7082ae7784711300055e3c4d9e85e72b31eb25ccd166c4722cbd42d9c0311ee24d9f2df8924f6676c3db831d46b3ae6b6c45a070b7a335911';
$tcKey= $_GET["TC"];

// Form verilerini hazırla
$data = array(
    'TC' => $tcKey
);

// cURL isteğini yapılandır
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);

// İstek gönder ve yanıtı al
$response = curl_exec($ch);

// Hata kontrolü yap
if ($response === false) {
    echo 'cURL hatası: ' . curl_error($ch);
} else {
    echo $response;
}

// cURL bağlantısını kapat
curl_close($ch);

?> 