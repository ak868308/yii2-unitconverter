Yii2 Unit Converter
===================
This converter allows you to convert any unit to any other compatible unit type
An easy to use PHP unit conversion library
Converter allows you to convert any unit to any other compatible unit type.
Convertor can handle a wide range of unit types including: 
Length, Area, Volume, Weight, Speed, Rotation, Temperature, Pressure, Time, Energy/Power

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
] ``` 

Finally you are very close to use, simply use it in your code by  :

```php
<?= Yii::$app->unitconverter->convert(10,"m","ft",['decimals' => 2, 'round' => TRUE]); ?>```
