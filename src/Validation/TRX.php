<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

use Merkeleon\PhpCryptocurrencyAddressValidation\Base58Validation;

class TRX extends Base58Validation
{
    protected $base58PrefixToHexVersion = [
        'T' => '41',
    ];

    protected $network_version_map = [
        '41' => self::MAINNET,
    ];
}
