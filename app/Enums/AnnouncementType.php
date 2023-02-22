<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AnnouncementType extends Enum
{
    const Moderation = 0;
    const Active = 1;
    const NotActive = 2;
    const Draft = 3;
}
