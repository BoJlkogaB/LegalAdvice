<?php

//
function request($query, $params, $DBconnect)
{
    $stmt = $DBconnect->prepare($query);
    return $stmt->execute($params);
}

function getFetch($query, $params, $DBconnect)
{
    $stmt = $DBconnect->prepare($query);
    $stmt->execute($params);
    return $stmt->fetch(PDO::FETCH_LAZY);
}

function getFetchAll($query, $params, $DBconnect)
{
    $stmt = $DBconnect->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_NAMED);
}