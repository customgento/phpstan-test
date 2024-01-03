<?php

declare(strict_types=1);

namespace CustomGento\Phpstan\Plugin\Controller\Adminhtml\Product\Action\Attribute;

use CustomGento\Phpstan\Model\FailingFunction;

class FailingReference
{
    private function failingReference(
    ) {
        $array = [FailingFunction::CUSTOMGENTO_PHPSTAN_TEST => '123'];
    }
}
