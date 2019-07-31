<?php

if ( !function_exists('currencyFormat') ) {
    function currencyFormat($amount,$currency_format)
    {
		$fmt = json_decode(preg_match('~\{.*?\}~', $currency_format, $out) ? $out[0] : '{"d" : 2,"dp" : ".","s" : ","}');
        return preg_replace('/\{.*?\}/', number_format($amount, $fmt->{'d'} , $fmt->{'dp'}, $fmt->{'s'}) , $currency_format);
    }
}

/*
  switch($site['currency']) {
            case "AED":
                $price = "$" . number_format($amount,2);
            break;
            case "ARS":
                $price = "$" . number_format($amount,2);
            break;
            case "AUD":
                $price = "$" . number_format($amount,2);
            break;
            case "BOB":
                $price = "$" . number_format($amount,2);
            break;
            case "BRL":
                $price = "$" . number_format($amount,2);
            break;
            case "CAD":
                $price = "$" . number_format($amount,2);
            break;
            case "CHF":
                $price = "$" . number_format($amount,2);
            break;
            case "CLP":
                $price = "$" . number_format($amount,2);
            break;
            case "COP":
                $price = "$" . number_format($amount,2);
            break;
            case "CRC":
                $price = "$" . number_format($amount,2);
            break;
            case "EUR":
                $price = "$" . number_format($amount,2);
            break;
            case "GBP":
                $price = "$" . number_format($amount,2);
            break;
            case "HKD":
                $price = "$" . number_format($amount,2);
            break;
            case "IDR":
                $price = "$" . number_format($amount,2);
            break;
            case "INR":
                $price = "$" . number_format($amount,2);
            break;
            case "JPY":
                $price = "$" . number_format($amount,2);
            break;
            case "MXN":
                $price = "$" . number_format($amount,2);
            break;
            case "MYR":
                $price = "$" . number_format($amount,2);
            break;
            case "NZD":
                $price = "$" . number_format($amount,2);
            break;
            case "PEN":
                $price = "$" . number_format($amount,2);
            break;
            case "PHP":
                $price = "$" . number_format($amount,2);
            break;
            case "PYG":
                $price = "$" . number_format($amount,2);
            break;
            case "QAR":
                $price = "$" . number_format($amount,2);
            break;
            case "SGD":
                $price = "$" . number_format($amount,2);
            break;
            case "USD":
                $price = "$" . number_format($amount,2);
            break;
            case "UYU":
                $price = "$" . number_format($amount,2);
            break;
            case "VEF":
                $price = "$" . number_format($amount,2);
            break;
            case "ZAR":
                $price = "$" . number_format($amount,2);
            break;
            default:
                $price = $amount;
            break;    
        } 


JS
const regex = "/(\d*)(\.\d{2})?/";

const str = `100.00`;
const subst = `USD$1$2`;
const result = str.replace(regex, subst);
console.log('Substitution result: ', result);

function number_format (number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

PHP
$re = '/(\d*)(\.\d{2})?/';
$str = '100.00';
$subst = 'USD$1$2';
$result = preg_replace($re, $subst, $str, 1);

AED AED 124.96
ARS $624,96
AUD $124.96
BOB Bs 166
BRL R$ 104,13
CAD $45.79
CHF CHF45.79
CLP $12.498
COP $62.458
CRC ₡12,499
EUR 33,29 €
GBP £31.21
HKD HK$249.96
IDR Rp. 414.583
INR Rs 2,083
JPY ￥4,167
MXN $416.63
MYR RM 124.96
NZD $45.79
PEN S/. 62
PHP ₱ 1,249.96
PYG Gs. 125.000
QAR QAR137
SGD S$45.79
USD $29.13
UYU $708
VEF Bs. 208,29
ZAR R 354.13

*/