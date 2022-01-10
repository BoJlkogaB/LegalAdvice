<?php

    try
    {
        $DBconnect = new PDO('mysql:host=localhost;dbname=expresso', 'granddaddy', '28811310Dd');
    }
    catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage();
        //  Убрать die() и передать обработку ошибок клиентской части
        die();
    }