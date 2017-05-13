# serializes

## Installation

Add `nazmul/serializes` to `composer.json`

```bash
"nazmul/serializes": "dev-master"
```
Run the `composer update`.

## Basic Usage

```php
<?php

use Serializes\Helper;

$helperObj = new Helper();
$data = $helperObj->makeSerialize(['name'=>'nazmul','email'=>'nazmul@email.com']);
echo $data;
```