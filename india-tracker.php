<?php
    $api_url = 'https://disease.sh/v3/covid-19/countries/India';
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);
    
    $country = $response_data->country;
    $total_cases = $response_data->cases;
    $cases_today = $response_data->todayCases;
    $total_deaths = $response_data->deaths;
    $deaths_today = $response_data->todayDeaths;
    $total_recovered = $response_data->recovered;
    $recovered_today = $response_data->todayRecovered;
    $active_cases = $response_data->active;
    $critical_cases = $response_data->critical;
    $cases_per_million = $response_data->casesPerOneMillion;
    $deaths_per_million = $response_data->deathsPerOneMillion;

    echo "Country: " . $country . "\n";
    echo "Total cases: " . $total_cases . "\n";
    echo "Cases today: " . $cases_today . "\n";
    echo "Total deaths: " . $total_deaths . "\n";
    echo "Deaths today: " . $deaths_today . "\n";
    echo "Total recovered: " . $total_recovered . "\n";
    echo "Recovered today: " . $recovered_today . "\n";
    echo "Active cases: " . $active_cases . "\n";
    echo "Critical cases: " . $critical_cases . "\n";
    echo "Cases per million: " . $cases_per_million . "\n";
    echo "Deaths per million: " . $deaths_per_million . "\n";
?>
