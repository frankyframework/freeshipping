<?php
function getEnabled()
{
    if(getCoreConfig("ecommerce/free_shipping/enabled") == 0) {
        return false;
    }
    $MyCarrito = getInfoCarrito();
    if($MyCarrito["totalItemsPlain"] < getCoreConfig("ecommerce/free_shipping/minimo")) {
        return false;
    }
    return true;
}
?>