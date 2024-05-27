<?php

namespace App\Enums;

enum SubscriptionStatus: int
{
    case Inactive = 0;
    case Active = 1;
    case Pending = 2;
    case Cancelled = 3;
    case Expired = 4;
}
