<?php

declare(strict_types=1);

namespace CustomGento\Phpstan\Model;

class FailingFunction
{
    public const CUSTOMGENTO_PHPSTAN_TEST = 'test';

    public function failingFunction(): array
    {
        return [];
    }
}
