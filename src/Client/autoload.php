<?php


 function autoload_847d3eac22b0ce46b909f9c4b718de61($class)
{
    $classes = array(
        'SuusApi\Client\Service' => __DIR__ .'/Service.php',
        'SuusApi\Client\Auth' => __DIR__ .'/Auth.php',
        'SuusApi\Client\Shipment' => __DIR__ .'/Shipment.php',
        'SuusApi\Client\ArrayOfShipments' => __DIR__ .'/ArrayOfShipments.php',
        'SuusApi\Client\Event' => __DIR__ .'/Event.php',
        'SuusApi\Client\ShipmentEvents' => __DIR__ .'/ShipmentEvents.php',
        'SuusApi\Client\ArrayOfEvents' => __DIR__ .'/ArrayOfEvents.php',
        'SuusApi\Client\ShipmentsResult' => __DIR__ .'/ShipmentsResult.php',
        'SuusApi\Client\ArrayOfShipmentsResult' => __DIR__ .'/ArrayOfShipmentsResult.php',
        'SuusApi\Client\ReturnInfo' => __DIR__ .'/ReturnInfo.php',
        'SuusApi\Client\OrderHeader' => __DIR__ .'/OrderHeader.php',
        'SuusApi\Client\Address' => __DIR__ .'/Address.php',
        'SuusApi\Client\Package' => __DIR__ .'/Package.php',
        'SuusApi\Client\Packages' => __DIR__ .'/Packages.php',
        'SuusApi\Client\AdditionalService' => __DIR__ .'/AdditionalService.php',
        'SuusApi\Client\AdditionalServices' => __DIR__ .'/AdditionalServices.php',
        'SuusApi\Client\Order' => __DIR__ .'/Order.php',
        'SuusApi\Client\ErrorCodesResult' => __DIR__ .'/ErrorCodesResult.php',
        'SuusApi\Client\ArrayOfErrorCodesResult' => __DIR__ .'/ArrayOfErrorCodesResult.php',
        'SuusApi\Client\ColliResult' => __DIR__ .'/ColliResult.php',
        'SuusApi\Client\ArrayOfColliResult' => __DIR__ .'/ArrayOfColliResult.php',
        'SuusApi\Client\Colli' => __DIR__ .'/Colli.php',
        'SuusApi\Client\ArrayOfColli' => __DIR__ .'/ArrayOfColli.php',
        'SuusApi\Client\AirOrder' => __DIR__ .'/AirOrder.php',
        'SuusApi\Client\AirOrderHeader' => __DIR__ .'/AirOrderHeader.php',
        'SuusApi\Client\SeaOrder' => __DIR__ .'/SeaOrder.php',
        'SuusApi\Client\SeaOrderHeader' => __DIR__ .'/SeaOrderHeader.php',
        'SuusApi\Client\SeaLine' => __DIR__ .'/SeaLine.php',
        'SuusApi\Client\SeaLines' => __DIR__ .'/SeaLines.php',
        'SuusApi\Client\FtlOrder' => __DIR__ .'/FtlOrder.php',
        'SuusApi\Client\FtlOrderHeader' => __DIR__ .'/FtlOrderHeader.php',
        'SuusApi\Client\LineAddress' => __DIR__ .'/LineAddress.php',
        'SuusApi\Client\LinesAddress' => __DIR__ .'/LinesAddress.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_847d3eac22b0ce46b909f9c4b718de61');

// Do nothing. The rest is just leftovers from the code generation.
{
}
