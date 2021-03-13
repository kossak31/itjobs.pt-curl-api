<?php

# An HTTP GET request example

$url = 'https://api.itjobs.pt/job/list.json?api_key=5b39c7f95aa2801daee3c54f3fffaca2&location=14&limit=200';
$empresas = json_decode(file_get_contents($url));
//print_r($empresas);
//var_dump($empresas->results[1]->company->email);

foreach ($empresas->results as $x) {

    //http://emailregex.com/
    if (preg_match('/(?:[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/', $x->body, $match)) :
        echo   $x->ref . "-> ";
        echo $match[0] . "<br>";
    endif;
}
