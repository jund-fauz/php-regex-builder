<?php

namespace JundFauz\RegexBuilder\Helper;

class Arr
{
    public static function arrange(array $array): string
    {
        return join('', $array);
    }
}
