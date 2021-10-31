<?php

$connection = null;

$connection = new PDO(
    'pgsql:dbname=postgres;host=pgsql.mdocker;port=5432',
    'postgres',
    'pgsql424258541'
);

$stmt = $connection->query(/** @lang PostgreSQL */'SELECT * FROM cars', PDO::FETCH_ASSOC);
$stmt->execute();


var_dump($stmt->fetchAll());