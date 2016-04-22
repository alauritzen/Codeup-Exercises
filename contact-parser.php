<?php

function parseContacts($filename)
{
    $contacts=array();
    // todo - read file and parse contacts
    $handle=fopen($filename, 'r');
    $contents=fread($handle, filesize($filename));
    $contacts=explode("\n", trim($contents));
    $details=array();
    foreach ($contacts as $key=>$value) {
        $details = explode("|", $value);
        $details["name"] = array_shift($details);
        $details["number"]=array_shift($details);
        $details["number"]=substr($details["number"], 0, 3) . "-" . substr($details["number"], 3, 3) . "-" . substr($details["number"], 6, 4);
        array_push($contacts, $details);
        array_shift($contacts);
        // var_dump($details);
    }
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
