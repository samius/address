<?php

namespace Samius\Address\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\JsonType;
use Samius\Address;

class AddressType extends JsonType
{
    public function getName():string
    {
        return 'address';
    }

    /**
     * @return mixed
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $values = parent::convertToPHPValue($value, $platform);
        return new Address($values['street']??'', $values['city']??'', $values['zip']??'', $values['country']??'');
    }

    /**
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
