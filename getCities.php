<?php
if (isset($_GET['country'])) {
    $country = $_GET['country'];

   
    $cities = [];

    if ($country == "Nepal") {
        $cities = ["Kathmandu", "Pokhara", "Dharan", "Butwal"];
    } elseif ($country == "USA") {
        $cities = ["New York", "Los Angeles", "Chicago", "Texas"];
    } elseif ($country == "India") {
        $cities = ["Mumbai", "Chennai", "Delhi", "Kerala"];
    }

    
    echo json_encode($cities);
}
?>
