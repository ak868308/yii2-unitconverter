Yii2 Unit Converter
===================
This converter allows you to convert any unit to any other compatible unit type
An easy to use PHP unit conversion library
Converter allows you to convert any unit to any other compatible unit type.
Convertor can handle a wide range of unit types including: 
Length, Area, Volume, Weight, Speed, Rotation, Temperature, Pressure, Time, Energy/Power

If you need additional unit types, then it is easy to add your own.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ak868308/yii2-unitconverter "*"
```

or add

```
"ak868308/yii2-unitconverter": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, initialize your component, add the following line in config/main.php 

```
'components' => [
    'unitconverter' => [
         'class' => '\ak868308\unitconverter\UnitConverter'
    ]
]
```

Finally you are very close to use, simply use it in your code by  :

```
php
<?= Yii::$app->unitconverter->convert(10,"m","ft",['decimals' => 2, 'round' => TRUE]); ?>
```
Using another file somewhere in the project:

```php<?= Yii::$app->unitconverter->convert(10,"m","ft",['unitFile' => '/path/to/my/own/Units.php', 'decimals' => 2, 'round' => TRUE]); ?>```

Using the name of the file in config:

```php<?= Yii::$app->unitconverter->convert(10,"m","ft",['unitFile' => 'BaseUnits.php', 'decimals' => 2, 'round' => TRUE]); ?>```

Define own units inline:
```php
$arr = [
     "m" => array("base" => "m", "conversion" => 1),
     "km" => array("base" => "m", "conversion" => 1000),
];

<?= Yii::$app->unitconverter->convert(10,"m",NULL,['unitFile' => $arr, 'decimals' => 2, 'round' => TRUE]); ?>
```
Currently two Unit files are available - one containing the owner's notation and the other one a more formal notation. 
Differences in notation:
 Variant	km²        kg/m²            FileName
  owner     'km2'       -               BaseUnits.php
  formal	'km**2'     'kg m**-2'      Units.php

Additionally the Units.php file contains area-density definitions.
