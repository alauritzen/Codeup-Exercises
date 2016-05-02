<?php
require_once "Log.php";
require_once "File.php";

    $error1=new Log("log");
    $info1=new Log("log");
    $error2=new Log();
    $info2=new Log();

    $error1->error();
    $info1->info();
    $error2->error();
    $info2->info();


    $file= new File("file.txt");
    $file->append("Hello Joshua");
    $file->close();
?>