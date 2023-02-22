<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TransactionType extends Enum
{
    const Buy = 0;
    const Sell = 1;
}
