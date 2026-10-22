<?php

namespace JundFauz\RegexBuilder\Helper;

class Str
{
    public static function concat(string ...$strings): string
    {
        return implode('', $strings);
    }
}