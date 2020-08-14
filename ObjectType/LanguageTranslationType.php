<?php
declare(strict_types=1);

namespace BastSys\LocaleGraphQLPack\ObjectType;

use BastSys\GraphQLBundle\GraphQL\ObjectType\ATranslationType;
use Youshido\GraphQL\Type\Scalar\StringType;

/**
 * Class LanguageTranslationType
 * @package BastSys\LocaleGraphQLPack\ObjectType
 * @author mirkl
 */
class LanguageTranslationType extends ATranslationType
{
    /**
     * @param \Youshido\GraphQL\Config\Object\ObjectTypeConfig $config
     */
    public function addTranslationFields($config): void
    {
        $config->addFields([
            'name' => [
                'description' => 'Translated name of the language',
                'type' => new StringType()
            ]
        ]);
    }
}
