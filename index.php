<?php    

    function my_function() {
        echo "Hello!";
    };

    $my_function = function($name) {
        echo "Hello! $name!\n";
    };

    $my_function("Roberta");

    $fetch_data_real = function() {
        echo "Fetching data...\n";
    };

    // $environment = 'dev';
    $environment = 'prod';

    $fetch_data_fake = function() {
        return [
            'name' => 'Jane',
            'job' => 30,
        ];
    };

    $fetch_data = ($environment === 'dev'
    ? $fetch_data_fake
    : $fetch_data_real);

    // print_r($fetch_data());
    $fetch_data();
?>

