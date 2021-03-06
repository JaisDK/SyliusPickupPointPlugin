<?php

declare(strict_types=1);

namespace Setono\SyliusPickupPointPlugin\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

final class HasPickupPointSelected extends Constraint
{
    /**
     * @var string
     */
    public $pickupPointNotBlank = 'setono_pickup_point.shipment.pickup_point.not_blank';

    /**
     * @var string
     */
    public $pickupPointNotExists = 'setono_pickup_point.shipment.pickup_point.not_exists';

    /**
     * {@inheritdoc}
     */
    public function validatedBy(): string
    {
        return 'setono_pickup_point_has_pickup_point_selected';
    }

    /**
     * {@inheritdoc}
     */
    public function getTargets(): string
    {
        return Constraint::CLASS_CONSTRAINT;
    }
}
