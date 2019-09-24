<?php

namespace Samius\Address\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Samius\Address;

class AddressType extends Doctrine\DBAL\Types\JsonType
{
    public function getName()
    {
        return 'address';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $values = parent::convertToPHPValue($value, $platform);
        return new Address($values['street'], $values['city'], $values['zip'], $values['country']);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return parent::convertToDatabaseValue($value->toArray(), $platform);
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
