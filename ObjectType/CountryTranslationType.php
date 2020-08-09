<?php
declare(strict_types=1);

namespace BastSys\LocaleGraphQLPack\ObjectType;

use BastSys\GraphQLBundle\GraphQL\ObjectType\ATranslationType;
use Youshido\GraphQL\Type\Scalar\StringType;

/**
 * Class CountryTranslationType
 * @package BastSys\GraphQLBundle\GraphQL\ObjectType\Localisation
 * @author mirkl
 */
class CountryTranslationType extends ATranslationType
{
    /**
     * @param \Youshido\GraphQL\Config\Object\ObjectTypeConfig $config
     */
    public function addTranslationFields($config): void
    {
        $config->addFields([
            'name' => [
                'type' => new StringType(),
                'description' => 'Name of the country'
            ]
        ]);
    }
}
