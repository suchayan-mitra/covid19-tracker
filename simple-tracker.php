<?php
    $api_url = 'https://disease.sh/v3/covid-19/all';
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);
    
    $total_cases = $response_data->cases;
    $total_deaths = $response_data->deaths;
    $total_recovered = $response_data->recovered;

    echo "Total cases: " . $total_cases . "\n";
    echo "Total deaths: " . $total_deaths . "\n";
    echo "Total recovered: " . $total_recovered . "\n";
?>
