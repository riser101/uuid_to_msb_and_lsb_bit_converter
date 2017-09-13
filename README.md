# uuid_to_msb_and_lsb_bit_converter 
This is a php library that converts 128 bit standards UUIDs into corresponding least significant bits and most significant bits i.e. two 64 bit integers. 

### Installation via Composer
```php composer.phar require yousufsyed/uuid_to_msb_and_lsb_bit_converter=dev-master```

### Usage
#### To break UUID into LSB and MSB bits

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

#### To build UUID from two 64 bit integers
```require_once 'Uuid_converter.php';``` 

```$result = uuid_to_msb_and_lsb_bit_converter\Uuid_converter::buildUuid('a6069499063144368886', '6069499063144368886');```

Output of $result
```
d7384hr6-94d2-87e4-543b-313d87494af6
````
### Authors
yousufsyed, www.yousufsyed.co.in

### Copyright & License
The [MIT License](https://opensource.org/licenses/MIT) (MIT)

Copyright (c) 2017 yousufsyed

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
