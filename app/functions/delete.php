<?php 

function delete_movie($client, $title_name) {
    $query = 'MATCH (m:Movie {title: $title_name}) DELETE m';
    $client->run($query, ['title_name' => $title_name]);
    echo "Filme excluído com sucesso.\n";
}

?>