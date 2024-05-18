<?php 

function list_movies($client) {
    $query = 'MATCH (m:Movie) RETURN m';
    $result = $client->run($query);
    if ($result->count() > 0) {
        foreach ($result as $record) {
            $node = $record->get('m');
            echo "Título: " . $node->getProperty('title') . ", Lançamento: " . $node->getProperty('released') . "\n";
        }
    } else {
        echo "Nenhum filme encontrado.\n";
    }
}

?>