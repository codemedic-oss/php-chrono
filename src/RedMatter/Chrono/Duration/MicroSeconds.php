<?php
/**
 * @copyright 2009-2020 Red Matter Ltd (UK)
 */

namespace RedMatter\Chrono\Duration;

final class MicroSeconds extends Duration
{
    const UNIT = Unit::MICROSECONDS;

    public function __construct($value)
    {
        parent::__construct($value, self::UNIT);
    }
}
