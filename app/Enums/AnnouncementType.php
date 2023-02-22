<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AnnouncementType extends Enum
{
    const Moderation = 0;
    const Active = 1;
    const NotActive = 2;
    const Draft = 3;
}
