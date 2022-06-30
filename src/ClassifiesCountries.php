<?php


namespace Booni3\Countries;


use Illuminate\Support\Str;

trait ClassifiesCountries
{
    public function isEuropeanUnion($country): ?bool
    {
        if(strlen($country) == 3){
            $country = ISO2::fromIso3($country);
        }

        if(strlen($country) > 3){
            $country = ISO2::isoFromName($country);
        }

        if(strlen($country) == 2){
            return Str::of($country)->upper()->is([
                'AT', 'BE', 'HR', 'BG', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IE',
                'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE'
            ]);
        }

        return null;
    }
}