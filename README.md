# uuid_to_msb_and_lsb_bit_converter 
This is a php library that converts 128 bit standards UUIDs into corresponding least significant bits and most significant bits i.e. two 64 bit integers. 

### Installation via Composer
```php composer.phar require yousufsyed/uuid_to_msb_and_lsb_bit_converter=dev-master```

### Usage
##### To break UUID into LSB and MSB bits

```require_once 'Uuid_converter.php';``` 

```$result = uuid_to_msb_and_lsb_bit_converter\Uuid_converter::breakIntoMsbLsbBits('081815e8-9860-11e7-abc4-cec278b6b50a');```

Output of $result
```
Array
(
    [lsb] => -6069499063144368886
    [msb] => 583240240477508071
) 
````

##### To build UUID from two 64 bit integers
```require_once 'Uuid_converter.php';``` 
```$result = uuid_to_msb_and_lsb_bit_converter\Uuid_converter::buildUuid('a6069499063144368886', '6069499063144368886');```

Output of $result
```
d7384hr6-94d2-87e4-543b-313d87494af6
````


