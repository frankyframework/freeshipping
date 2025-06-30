<?php
function getEnabled()
{
    if(getCoreConfig("ecommerce/free-shipping/enabled") == 0) {
        return false;
    }
    $MyCarrito = getInfoCarrito();
    if($MyCarrito["totalPlain"] < getCoreConfig("ecommerce/free-shipping/minimo")) {
        return false;
    }
    return true;
}
?>