<?php

require __DIR__ . '/../../vendor/autoload.php';

use Laudis\Neo4j\ClientBuilder;
use Laudis\Neo4j\Authentication\Authenticate;

$url = 'neo4j://localhost:7687';
$auth = Authenticate::basic('neo4j', 'password'); // Substitua 'password' pela senha do Neo4j
$client = ClientBuilder::create()->withDriver('neo4j', $url, $auth)->build();

