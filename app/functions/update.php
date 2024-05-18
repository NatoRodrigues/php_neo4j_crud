<?php 

function update_movie($client, $title_name, $new_title_name, $new_release_date) {
    $query = 'MATCH (m:Movie {title: $title_name}) SET m.title = $newTitleName, m.released = $newReleaseDate RETURN m';
    $result = $client->run($query, ['title_name' => $title_name, 'newTitleName' => $new_title_name, 'newReleaseDate' => $new_release_date]);
    if ($result->first()) {
        echo "Filme atualizado com sucesso.\n";
    } else {
        echo "Filme não encontrado.\n";
    }
}

?>