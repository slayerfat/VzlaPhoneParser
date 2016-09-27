# VzlaPhoneParser

## Español
Idea básica de un parser para teléfonos en 04xx-yyy-zzzz

La clase se rige por la interfaz `PhoneParserInterface` en donde se espera que al crear la instancia 
del PhoneParser se pueda manipular de la siguiente forma:

```php
$parser = new \Slayerfat\PhoneParser\PhoneParser()

$parser->parseNumber(12345678901); // (1234)-567-8901
$parser->parseString('algo1232224455xzx'); // 1232224455
```

## English
Basic idea of a phone parser as 04xx-yyy-zzzz

The class follows the `PhoneParserInterface` where the instance can be manipulated as:

```php
$parser = new \Slayerfat\PhoneParser\PhoneParser()

$parser->parseNumber(12345678901); // (1234)-567-8901
$parser->parseString('algo1232224455xzx'); // 1232224455
```