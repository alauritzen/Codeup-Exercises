<?php

function parseContacts($filename)
{
    $contacts=array();
    // todo - read file and parse contacts
    $handle=fopen($filename, 'r');
    $contents=fread($handle, filesize($filename));
    $contacts=explode("\n", $contents);
    
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
