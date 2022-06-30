<?php

namespace Booni3\Countries;

use Support\Helpers\ISO3CountryCodeConverter;

class Countries
{
    public function nameToIso2($name): ?string
    {
        return ISO2CountryCodeConverter::nameToIso2($name);
    }

    public function iso2ToName($iso): ?string
    {
        return ISO2CountryCodeConverter::iso2ToName($iso);
    }

    public function nameToIso3($name): ?string
    {
        return ISO3CountryCodeConverter::nameToIso3($name);
    }

    public function iso3ToName($iso): ?string
    {
        return ISO3CountryCodeConverter::iso3ToName($iso);
    }
}
