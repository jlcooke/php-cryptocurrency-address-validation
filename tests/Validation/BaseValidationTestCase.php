<?php

namespace Tests\Validation;

use Tests\TestCase;
use Vectorface\PhpCryptocurrencyAddressValidation\Validation;

abstract class BaseValidationTestCase extends TestCase
{
    abstract public function getValidationInstance() : Validation;
    abstract public function addressProvider();

    /** @dataProvider addressProvider */
    public function testValidate($address, $options, $isValid)
    {
        $validator = $this->getValidationInstance();
        $this->assertEquals($isValid, $validator->validate($address, $options));
    }
}
