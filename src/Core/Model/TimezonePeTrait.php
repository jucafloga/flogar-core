<?php

declare(strict_types=1);

namespace Flogar\Model;

use DateTime;
use DateTimeInterface;
use DateTimeZone;

trait TimezonePeTrait
{
    protected function getDateWithTimezone(DateTimeInterface $date): DateTimeInterface
    {
        $timezone = new DateTimeZone(TimeZonePe::DEFAULT);
        if ($date instanceof DateTime) {
            $date = clone $date;
            return $date->setTimezone($timezone);
        }

        return $date->setTimezone($timezone);
    }
}