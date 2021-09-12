<?php

namespace joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Tests;

use joaobitencourt\NCHMETQYRZULKOPIJDSWGVBAFX\Elements\EAD;
use PHPUnit\Framework\TestCase;
use stdClass;

class EADTest extends TestCase
{
    public function testEAD()
    {
        $std = new stdClass();
        $std->ASSINATURA = '59AB6C2911017A09BAC67EC386E47F626852872E1208083DBED43FDB78399968113FB2B443517589CEE28DECC9317D1B6E6B18645DE6CE9E5C5DCE8474450F941FA2FB2BA7F1C463847C3A9CCE9A585B16123A04A3F44350BC14F68EEFAD9D4CE409533D5E41B28DAEFA2639EBB42AAAB6035131C05BCC8C291BD272F5ED4490';
        $b1 = new EAD($std);
        $resp = "{$b1}";

        $expected = 'EAD59AB6C2911017A09BAC67EC386E47F626852872E1208083DBED43FDB78399968113FB2B443517589CEE28DECC9317D1B6E6B18645DE6CE9E5C5DCE8474450F941FA2FB2BA7F1C463847C3A9CCE9A585B16123A04A3F44350BC14F68EEFAD9D4CE409533D5E41B28DAEFA2639EBB42AAAB6035131C05BCC8C291BD272F5ED4490';

        $this->assertEquals($expected, $resp);
    }
}
