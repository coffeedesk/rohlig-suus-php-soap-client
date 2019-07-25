<?php

namespace SuusApi\Client;

class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Auth' => 'SuusApi\\Client\\Auth',
      'Shipment' => 'SuusApi\\Client\\Shipment',
      'ArrayOfShipments' => 'SuusApi\\Client\\ArrayOfShipments',
      'Event' => 'SuusApi\\Client\\Event',
      'ShipmentEvents' => 'SuusApi\\Client\\ShipmentEvents',
      'ArrayOfEvents' => 'SuusApi\\Client\\ArrayOfEvents',
      'ShipmentsResult' => 'SuusApi\\Client\\ShipmentsResult',
      'ArrayOfShipmentsResult' => 'SuusApi\\Client\\ArrayOfShipmentsResult',
      'ReturnInfo' => 'SuusApi\\Client\\ReturnInfo',
      'OrderHeader' => 'SuusApi\\Client\\OrderHeader',
      'Address' => 'SuusApi\\Client\\Address',
      'Package' => 'SuusApi\\Client\\Package',
      'Packages' => 'SuusApi\\Client\\Packages',
      'AdditionalService' => 'SuusApi\\Client\\AdditionalService',
      'AdditionalServices' => 'SuusApi\\Client\\AdditionalServices',
      'Order' => 'SuusApi\\Client\\Order',
      'ErrorCodesResult' => 'SuusApi\\Client\\ErrorCodesResult',
      'ArrayOfErrorCodesResult' => 'SuusApi\\Client\\ArrayOfErrorCodesResult',
      'ColliResult' => 'SuusApi\\Client\\ColliResult',
      'ArrayOfColliResult' => 'SuusApi\\Client\\ArrayOfColliResult',
      'Colli' => 'SuusApi\\Client\\Colli',
      'ArrayOfColli' => 'SuusApi\\Client\\ArrayOfColli',
      'AirOrder' => 'SuusApi\\Client\\AirOrder',
      'AirOrderHeader' => 'SuusApi\\Client\\AirOrderHeader',
      'SeaOrder' => 'SuusApi\\Client\\SeaOrder',
      'SeaOrderHeader' => 'SuusApi\\Client\\SeaOrderHeader',
      'SeaLine' => 'SuusApi\\Client\\SeaLine',
      'SeaLines' => 'SuusApi\\Client\\SeaLines',
      'FtlOrder' => 'SuusApi\\Client\\FtlOrder',
      'FtlOrderHeader' => 'SuusApi\\Client\\FtlOrderHeader',
      'LineAddress' => 'SuusApi\\Client\\LineAddress',
      'LinesAddress' => 'SuusApi\\Client\\LinesAddress',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://wb.suus.com/webservice.php/project/Service?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param Auth $auth
     * @param ArrayOfShipments $shipments
     * @return list(ReturnInfo $result, ArrayOfShipmentsResult $shipments)
     */
    public function getEvents(Auth $auth, ArrayOfShipments $shipments)
    {
      return $this->__soapCall('getEvents', array($auth, $shipments));
    }

    /**
     * @param Auth $auth
     * @param Order $order
     * @return list(ReturnInfo $result, ArrayOfErrorCodesResult $errorCodes, string $shipmentNo)
     */
    public function addOrder(Auth $auth, Order $order)
    {
      return $this->__soapCall('addOrder', array($auth, $order));
    }

    /**
     * @param Auth $auth
     * @param AirOrder $order
     * @return list(ReturnInfo $result, ArrayOfErrorCodesResult $errorCodes, string $shipmentNo)
     */
    public function addAirOrder(Auth $auth, AirOrder $order)
    {
      return $this->__soapCall('addAirOrder', array($auth, $order));
    }

    /**
     * @param Auth $auth
     * @param SeaOrder $order
     * @return list(ReturnInfo $result, ArrayOfErrorCodesResult $errorCodes, string $shipmentNo)
     */
    public function addSeaOrder(Auth $auth, SeaOrder $order)
    {
      return $this->__soapCall('addSeaOrder', array($auth, $order));
    }

    /**
     * @param Auth $auth
     * @param FtlOrder $order
     * @return list(ReturnInfo $result, ArrayOfErrorCodesResult $errorCodes, string $shipmentNo)
     */
    public function addFtlOrder(Auth $auth, FtlOrder $order)
    {
      return $this->__soapCall('addFtlOrder', array($auth, $order));
    }

    /**
     * @param Auth $auth
     * @param string $document
     * @param string $shipmentNo
     * @param string $reference
     * @param string $masterNo
     * @param ArrayOfColli $colliNo
     * @return list(ReturnInfo $result, string $shipmentNo, string $reference, string $masterNo, string $document)
     */
    public function getDocument(Auth $auth, $document, $shipmentNo, $reference, $masterNo, ArrayOfColli $colliNo)
    {
      return $this->__soapCall('getDocument', array($auth, $document, $shipmentNo, $reference, $masterNo, $colliNo));
    }

    /**
     * @param Auth $auth
     * @param ArrayOfShipments $shipments
     * @return list(ReturnInfo $result, ArrayOfColliResult $shipments)
     */
    public function getColliNo(Auth $auth, ArrayOfShipments $shipments)
    {
      return $this->__soapCall('getColliNo', array($auth, $shipments));
    }

}
