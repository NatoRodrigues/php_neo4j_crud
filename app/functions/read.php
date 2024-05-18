<?php 

function read_movie($client, $title_name) {
    $query = 'MATCH (m:Movie {title: $title_name}) RETURN m';
    $result = $client->run($query, ['title_name' => $title_name]);
    $record = $result->first();

    if ($record) {
        $node = $record->get('m');
        echo "Título: " . $node->getProperty('title') . ", Lançamento: " . $node->getProperty('released') . "\n";
    } else {
        echo "Filme não encontrado.\n";
    }
}

?>