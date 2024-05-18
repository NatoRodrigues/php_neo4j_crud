<?php 

require '../vendor/autoload.php';

while (true) {
    menu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            echo "Digite o título do filme: ";
            $title_name = trim(fgets(STDIN));
            echo "Digite a data de lançamento do filme: ";
            $release_date = trim(fgets(STDIN));
            create_movie($client, $title_name, $release_date);
            break;
        case '2':
            echo "Digite o título do filme: ";
            $title_name = trim(fgets(STDIN));
            read_movie($client, $title_name);
            break;
        case '3':
            echo "Digite o título do filme: ";
            $title_name = trim(fgets(STDIN));
            echo "Digite o novo título do filme: ";
            $new_title_name = trim(fgets(STDIN));
            echo "Digite a nova data de lançamento do filme: ";
            $new_release_date = trim(fgets(STDIN));
            update_movie($client, $title_name, $new_title_name, $new_release_date);
            break;
        case '4':
            echo "Digite o título do filme: ";
            $title_name = trim(fgets(STDIN));
            delete_movie($client, $title_name);
            break;
        case '5':
            list_movies($client);
            break;
        case '0':
            exit("Saindo...\n");
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
}