<?php
return [
    "code" => "free_shipping",
    "data" => [
        "name" => getCoreConfig("ecommerce/free-shipping/titulo"),
        "enabled" => getEnabled(),
        "time" => getCoreConfig("ecommerce/free-shipping/dias"),
        "price" => 0,
        "html" => "<p>* Tiempo expresado en dias habiles</p>"
    ]
    ];