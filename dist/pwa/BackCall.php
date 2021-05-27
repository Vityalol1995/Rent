<?php

/**
 * @param $to String кто получает сообщения
 */

$to = "ek.krymfinance@gmail.com";


function response($msg, $code = 200)
{
    http_response_code($code);
    exit($msg);
}

function mailWithHTML($to, $msg)
{
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($to, 'Космополит ОБРАТНЫЙ ЗВОНОК', $msg, $headers);
}

$phone = htmlspecialchars(@trim($_REQUEST['phone']));
$name = htmlspecialchars(@trim($_REQUEST['name']));

$nameL = strlen($name);
if ($nameL < 2 || $nameL > 50) {
    response(json_encode(array('msg' => 'Invalid name', 'reject' => 1, 'field' => 'name')), 409);
}

$phoneL = strlen($phone);
if ($phoneL < 9 || $phoneL > 25) {
    response(json_encode(array('msg' => 'Invalid phone', 'reject' => 1, 'field' => 'phone')), 409);
}

$tpl = "
    <table>
        <tr><td>Источник</td><td>Космополит</td></tr
        <tr><td>Действие</td><td>ОБРАТНЫЙ ЗВОНОК</td></tr
        <tr><td>Имя</td><td>$name</td></tr
        <tr><td>Телефон</td><td>$phone</td></tr>
    </table>
";

mailWithHTML($to, $tpl);

response(json_encode(array('success' => 1)));
