<?php

namespace ak868308\unitconverter\config;

/**
 * - Adapted notation to the one used in ECMWF Weather data.
 *      - Original Units had km^2 as km2 - exponents are now marked up with '**' making it km**2
 * - Added Area Density functions
 * 
 * @copyright (c) 2018, Production Optimization Advisor Suite
 * @author Khalid
 */
return [
    ///////Units Of Length///////
    "m" => ["base" => "m", "conversion" => 1], //meter - base unit for distance
    "km" => ["base" => "m", "conversion" => 1000], //kilometer
    "dm" => ["base" => "m", "conversion" => 0.1], //decimeter
    "cm" => ["base" => "m", "conversion" => 0.01], //centimeter
    "mm" => ["base" => "m", "conversion" => 0.001], //milimeter
    "µm" => ["base" => "m", "conversion" => 0.000001], //micrometer
    "nm" => ["base" => "m", "conversion" => 0.000000001], //nanometer
    "pm" => ["base" => "m", "conversion" => 0.000000000001], //picometer
    "in" => ["base" => "m", "conversion" => 0.0254], //inch
    "ft" => ["base" => "m", "conversion" => 0.3048], //foot
    "yd" => ["base" => "m", "conversion" => 0.9144], //yard
    "mi" => ["base" => "m", "conversion" => 1609.344], //mile
    "h" => ["base" => "m", "conversion" => 0.1016], //hand
    "ly" => ["base" => "m", "conversion" => 9460730472580800], //lightyear
    "au" => ["base" => "m", "conversion" => 149597870700], //astronomical unit
    "pc" => ["base" => "m", "conversion" => 3.08567782E16], //parsec
    ///////Units Of Area///////
    "m**2" => ["base" => "m**2", "conversion" => 1], //meter square - base unit for area
    "km**2" => ["base" => "m**2", "conversion" => 1000000], //kilometer square
    "cm**2" => ["base" => "m**2", "conversion" => 0.0001], //centimeter square
    "mm**2" => ["base" => "m**2", "conversion" => 0.000001], //milimeter square
    "ft**2" => ["base" => "m**2", "conversion" => 0.092903], //foot square
    "mi**2" => ["base" => "m**2", "conversion" => 2589988.11], //mile square
    "ac" => ["base" => "m**2", "conversion" => 4046.86], //acre
    "ha" => ["base" => "m**2", "conversion" => 10000], //hectare
    ///////Units Of Volume///////
    "dm3" => ["base" => "l", "conversion" => 1], //cubic decimeter - litre
    "l" => ["base" => "l", "conversion" => 1], //litre - base unit for volume
    "ml" => ["base" => "l", "conversion" => 0.001], //mililitre
    "cm3" => ["base" => "l", "conversion" => 0.001], //cubic centimeter - mililitre
    "hl" => ["base" => "l", "conversion" => 100], //hectolitre
    "kl" => ["base" => "l", "conversion" => 1000], //kilolitre
    "m3" => ["base" => "l", "conversion" => 1000], //meters cubed - kilolitre
    "pt" => ["base" => "l", "conversion" => 0.56826125], //pint
    "gal" => ["base" => "l", "conversion" => 4.405], //gallon
    "qt" => ["base" => "l", "conversion" => 1.1365225], //quart
    "ft3" => ["base" => "l", "conversion" => 28.316846592], //cubic feet
    "in3" => ["base" => "l", "conversion" => 0.016387064], //cubic inches
    ///////Units Of Weight///////
    "kg" => ["base" => "kg", "conversion" => 1], //kilogram - base unit for weight
    "g" => ["base" => "kg", "conversion" => 0.001], //gram
    "mg" => ["base" => "kg", "conversion" => 0.000001], //miligram
    "N" => ["base" => "kg", "conversion" => 1 / 9.80665002863885], //Newton (based on earth gravity)
    "st" => ["base" => "kg", "conversion" => 6.35029], //stone
    "lb" => ["base" => "kg", "conversion" => 0.453592], //pound
    "oz" => ["base" => "kg", "conversion" => 0.0283495], //ounce
    "t" => ["base" => "kg", "conversion" => 1000], //metric tonne
    "ukt" => ["base" => "kg", "conversion" => 1016.047], //UK Long Ton
    "ust" => ["base" => "kg", "conversion" => 907.1847], //US short Ton
    //////Units Of Speed///////
    "m s**-1" => ["base" => "m s**-1", "conversion" => 1], //meter per seond - base unit for speed
    "km h**-1" => ["base" => "m s**-1", "conversion" => 1 / 3.6], //kilometer per hour
    "mi h**-1" => ["base" => "m s**-1", "conversion" => 1.60934 * 1 / 3.6], //mi => km then convert like km/h
    ///////Units Of Rotation///////
    "deg" => ["base" => "deg", "conversion" => 1], //degrees - base unit for rotation
    "rad" => ["base" => "deg", "conversion" => 57.2958], //radian
    ///////Units Of Temperature///////
    "k" => ["base" => "k", "conversion" => 1], //kelvin - base unit for distance
    "c" => ["base" => "k", "conversion" => function ($val, $tofrom) {
            return $tofrom ? $val - 273.15 : $val + 273.15;
        }], //celsius
    "f" => ["base" => "k", "conversion" => function ($val, $tofrom) {
            return $tofrom ? ($val * 9 / 5 - 459.67) : (($val + 459.67) * 5 / 9);
        }], //Fahrenheit
    ///////Units Of Pressure///////
    "pa" => ["base" => "pa", "conversion" => 1], //Pascal - base unit for Pressure
    "hpa" => ["base" => "pa", "conversion" => 100], //hpa
    "kpa" => ["base" => "pa", "conversion" => 1000], //kilopascal
    "mpa" => ["base" => "pa", "conversion" => 1000000], //megapascal
    "bar" => ["base" => "pa", "conversion" => 100000], //bar
    "mbar" => ["base" => "pa", "conversion" => 100], //milibar
    "psi" => ["base" => "pa", "conversion" => 6894.76], //pound-force per square inch
    ///////Units Of Time///////
    "s" => ["base" => "s", "conversion" => 1], //second - base unit for time
    "year" => ["base" => "s", "conversion" => 31536000], //year - standard year
    "month" => ["base" => "s", "conversion" => 18748800], //month - 31 days
    "week" => ["base" => "s", "conversion" => 604800], //week
    "day" => ["base" => "s", "conversion" => 86400], //day
    "hr" => ["base" => "s", "conversion" => 3600], //hour
    "min" => ["base" => "s", "conversion" => 60], //minute
    "ms" => ["base" => "s", "conversion" => 0.001], //milisecond
    "μs" => ["base" => "s", "conversion" => 0.000001], //microsecond
    "ns" => ["base" => "s", "conversion" => 0.000000001], //nanosecond
    ///////Units Of Power///////
    "j" => ["base" => "j", "conversion" => 1], //joule - base unit for energy
    "kj" => ["base" => "j", "conversion" => 1000], //kilojoule
    "mj" => ["base" => "j", "conversion" => 1000000], //megajoule
    "cal" => ["base" => "j", "conversion" => 4184], //calorie
    "Nm" => ["base" => "j", "conversion" => 1], //newton meter
    "ftlb" => ["base" => "j", "conversion" => 1.35582], //foot pound
    "whr" => ["base" => "j", "conversion" => 3600], //watt hour
    "kwhr" => ["base" => "j", "conversion" => 3600000], //kilowatt hour
    "mwhr" => ["base" => "j", "conversion" => 3600000000], //megawatt hour
    "mev" => ["base" => "j", "conversion" => 0.00000000000000016], //mega electron volt
    ///////Area density///////
    "kg m**-2" => ["base" => "kg m**-2", "conversion" => 1],
    //vary area
    "kg km**-2" => ["base" => "kg m**-2", "conversion" => 0.000001],
    "kg cm**-2" => ["base" => "kg m**-2", "conversion" => 1e4],
    "kg mm**-2" => ["base" => "kg m**-2", "conversion" => 1e6],
    //vary weight
    "g m**-2" => ["base" => "kg m**-2", "conversion" => 0.001], //gram
    "mg m**-2" => ["base" => "kg m**-2", "conversion" => 0.000001], //miligram
    "st m**-2" => ["base" => "kg m**-2", "conversion" => 6.35029], //stone
    "lb m**-2" => ["base" => "kg m**-2", "conversion" => 0.453592], //pound
    "oz m**-2" => ["base" => "kg m**-2", "conversion" => 0.0283495], //ounce
        //todo: add your density conversions here if you need them.
];
