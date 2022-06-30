<?php

namespace Booni3\Countries;

use Support\Helpers\ISO3;

class Countries
{
    public function iso2List(): array
    {
        return ISO2::list();
    }

    public function nameToIso2($name): ?string
    {
        return ISO2::iso($name);
    }

    public function iso2ToName($iso): ?string
    {
        return ISO2::name($iso);
    }

    public function iso3List(): array
    {
        return ISO3::list();
    }

    public function nameToIso3($name): ?string
    {
        return ISO3::iso($name);
    }

    public function iso3ToName($iso): ?string
    {
        return ISO3::name($iso);
    }
}
