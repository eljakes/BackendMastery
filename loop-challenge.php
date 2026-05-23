<?php

$services = ["Plumbing", "Electrical", "Painting", "Carpentary", "Cleaning"];

foreach ($services as $index => $service) {

    $number = $index + 1;

    echo "$number. $service <br>";

}
