<?php

namespace Samius\Address\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Samius\Address;

class CompanyType extends Doctrine\DBAL\Types\JsonType
{
    public function getName()
    {
        return 'company';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $values = parent::convertToPHPValue($value, $platform);
        return new Address\Company($values['crn'], $values['vatin']);
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
