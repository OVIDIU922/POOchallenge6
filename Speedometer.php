<?php 

class Speedometer {
    const KM_TO_MILES = 0.621371; // Conversion factor from kilometers to miles

    public static function convertKmToMiles($km) {
        return round($km * self::KM_TO_MILES, 2);
    }

    public static function convertMilesToKm($miles) {
        return round($miles / self::KM_TO_MILES, 2);
    }
}


echo Speedometer::convertKmToMiles(10); // Résultat attendu : 6.21
