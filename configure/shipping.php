<?php
return [
    [
    "code" => "free_shipping",
    "data" => [
        "name" => getCoreConfig("ecommerce/free_shipping/titulo"),
        "enabled" => getEnabled(),
        "time" => getCoreConfig("ecommerce/free_shipping/dias"),
        "price" => 0,
        "iva" => 0,
        "html" => "<p>* Tiempo expresado en dias habiles</p>"
        ]
    ]

];