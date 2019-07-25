<?php

if ( !function_exists('currencyFormat') ) {
    function currencyFormat($amount,$currency_format)
    {
		$fmt = json_decode(preg_match('~\{.*?\}~', $currency_format, $out) ? $out[0] : '{"d" : 2,"dp" : ".","s" : ","}');
		$price = preg_replace('/\{.*?\}/', number_format($amount, $fmt->{'d'} , $fmt->{'dp'}, $fmt->{'s'}) , $currency_format);
        return $price;
    }
}
