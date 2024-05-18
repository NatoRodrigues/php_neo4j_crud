<?php 

function create_movie($client, $title_name, $release_date) {
    $query = 'CREATE (m:Movie {title: $title_name, released: $release_date}) RETURN m';
    $result = $client->run($query, ['title_name' => $title_name, 'release_date' => $release_date]);
    if ($result->first()) {
        echo "Filme criado com sucesso.\n";
    } else {
        echo "Falha ao criar o filme.\n";
    }
}

?>