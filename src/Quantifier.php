<?php

namespace JundFauz\RegexBuilder;

enum Quantifier: string
{
    case zeroOrMore = '*';
    case oneOrMore = '+';
    case zeroOrOne = '?';
}
