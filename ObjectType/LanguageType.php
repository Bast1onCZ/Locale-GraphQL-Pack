<?php
declare(strict_types=1);

namespace BastSys\LocaleGraphQLPack\ObjectType;

use BastSys\GraphQLBundle\GraphQL\ObjectType\ATranslatableEntityType;
use BastSys\GraphQLBundle\GraphQL\ObjectType\ATranslationType;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Scalar\StringType;

/**
 * Class LanguageType
 * @package BastSys\LocaleGraphQLPack\ObjectType
 * @author mirkl
 */
class LanguageType extends ATranslatableEntityType
{
    /**
     * @return ATranslationType
     */
    protected function getTranslationType(): ATranslationType
    {
        return new LanguageTranslationType();
    }

    /**
     * @param ObjectTypeConfig $config
     */
    protected function buildTranslatable($config): void
    {
        $config->removeField('id');

        $config->addFields([
            'id' => new StringType(),
            'code' => [
                'type' => new StringType(),
                'description' => "Language code"
            ],
            'ownTranslationName' => [
                'type' => new StringType(),
                'description' => 'Language name translated to its language'
            ]
        ]);
    }
}
