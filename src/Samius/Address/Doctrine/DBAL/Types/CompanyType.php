<?php

namespace Samius\Address\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\JsonType;
use Samius\Address;

class CompanyType extends JsonType
{
    public function getName():string
    {
        return 'company';
    }

    /**
     * @return mixed
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $values = parent::convertToPHPValue($value, $platform);
        return new Address\Company($values['name']??'', $values['crn']??'', $values['vatin']??'');
    }

    /**
     * {@inheritdoc}
     * @return mixed
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return parent::convertToDatabaseValue($value->toArray(), $platform);
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform):bool
    {
        return true;
    }
}
