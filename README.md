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
