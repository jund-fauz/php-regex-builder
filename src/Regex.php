<?php

namespace JundFauz\RegexBuilder;

use JundFauz\RegexBuilder\Helper\Arr;
use JundFauz\RegexBuilder\Helper\Str;

class Regex
{
    public static function create(string|array $regex): string|array
    {
        if (is_string($regex)) {
            $regex = [$regex];
        }

        $regex = array_map(fn ($value) => "/$value/", $regex);

        if (count($regex) === 1) {
            $regex = $regex[0];
        }

        return $regex;
    }

    public static function exact(string ...$sentenceOrWord): string
    {
        return Str::concat(
            '^',
            Arr::arrange($sentenceOrWord),
            '$'
        );
    }

    public static function exceptWord(string $word): string
    {
        return "(?!$word)";
    }

    public static function containOneOf(Quantifier|string $conditionCount = '', string ...$requirements): string
    {
        return Str::concat(
            '[',
            Arr::arrange($requirements),
            ']',
            is_string($conditionCount) ? $conditionCount : $conditionCount->value
        );
    }

    public static function range(string $from, string $until): string
    {
        return "$from-$until";
    }
}