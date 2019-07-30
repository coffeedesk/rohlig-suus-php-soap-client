### Generating PHP classes from WSDL
To generate PHP classes from Rohlig Suus WSDL file we used wsdl2phpgenerator package:
`https://github.com/wsdl2phpgenerator/wsdl2phpgenerator`

WSDL for sandbox:
```
https://wbtest.suus.com/webservice.php/project/Service?wsdl
```
WSDL for production:
```
https://wb.suus.com/webservice.php/project/Service?wsdl
```
Code for generate classes:
```
$generator = new \Wsdl2PhpGenerator\Generator();
        $generator->generate(
            new\Wsdl2PhpGenerator\Config([
                'inputFile' => 'https://wb.suus.com/webservice.php/project/Service?wsdl',
                'outputDir' => 'src/Client',
                'namespaceName' => 'SuusApi\Client',
            ])
        );
```

### Usage

#### Example of using addOrder method

```
<?php

require_once __DIR__ . '/vendor/autoload.php';

$auth = new SuusApi\Client\Auth();
$auth->setLogin('login');
$auth->setPassword('password');

$orderHeader = new SuusApi\Client\OrderHeader(
        'testtest_123123',
        'descriptionOfGoods',
        'remarks'
);
$orderHeader->setOrderType('B2B');

$loadingAddress = new SuusApi\Client\Address(
        'Rohlig Suus',
        'Równoległa',
        '4A',
        '02-235',
        'Warszawa',
        'PL',
        'person'
);
$loadingAddress->setMobilePhone('506000000');

$unloadingAddress = new SuusApi\Client\Address(
        'Rohlig Suus',
        'Równoległa',
        '4A',
        '02-235',
        'Warszawa',
        'PL',
        'person'
);
$unloadingAddress->setMobilePhone('506000000');

$package = new SuusApi\Client\Package(
        'EUR',
        1,
        30,
        120,
        80,
        100
);

$packages = new SuusApi\Client\Packages([$package]);
$order = new SuusApi\Client\Order($orderHeader, $loadingAddress, $unloadingAddress, $packages);
$order->setPackages($packages);

$service = new SuusApi\Client\Service([], 'https://wbtest.suus.com/webservice.php/project/Service?wsdl');
$response = $service->addOrder($auth, $order);

var_dump($response);

?>
```
