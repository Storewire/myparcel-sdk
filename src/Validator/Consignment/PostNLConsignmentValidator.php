<?php

declare(strict_types=1);

namespace MyParcelNL\Sdk\src\Validator\Consignment;

use MyParcelNL\Sdk\src\Rule\Consignment\DeliveryDateRule;
use MyParcelNL\Sdk\src\Rule\Consignment\ShipmentOptionsRule;
use MyParcelNL\Sdk\src\Validator\AbstractValidator;

class PostNLConsignmentValidator extends AbstractValidator
{
    /**
     * @return \MyParcelNL\Sdk\src\Rule\Rule[]
     */
    protected function getRules(): array
    {
        return [
            new DeliveryDateRule(),
            new ShipmentOptionsRule(),
        ];
    }
}
