<?php

namespace Booni3\Countries;

class Countries
{
    public function iso2List(): array
    {
        return ISO2::list();
    }

    public function nameToIso2($name): ?string
    {
        return ISO2::isoFromName($name);
    }

    public function iso2ToName($iso): ?string
    {
        return ISO2::nameFromIso($iso);
    }

    public function iso3List(): array
    {
        return ISO3::list();
    }

    public function nameToIso3($name): ?string
    {
        return ISO3::isoFromName($name);
    }

    public function iso3ToName($iso): ?string
    {
        return ISO3::nameFromIso($iso);
    }
}
