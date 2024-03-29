<?php

namespace Samizdam\JsonApiExample;

use NilPortugues\Api\Mappings\JsonApiMapping;

class SomeModelMapping implements JsonApiMapping
{

    /**
     * Returns a string with the full class name, including namespace.
     *
     * @return string
     */
    public function getClass()
    {
        return SomeModel::class;
    }

    /**
     * Returns a string representing the resource name as it will be shown after the mapping.
     *
     * @return string
     */
    public function getAlias()
    {
        // TODO: Implement getAlias() method.
    }

    /**
     * Returns an array of properties that will be renamed.
     * Key is current property from the class. Value is the property's alias name.
     *
     * @return array
     */
    public function getAliasedProperties()
    {
        // TODO: Implement getAliasedProperties() method.
    }

    /**
     * List of properties in the class that will be ignored by the mapping.
     *
     * @return array
     */
    public function getHideProperties()
    {
        return [
            'uuid',
        ];
    }

    /**
     * Returns an array of properties that are used as an ID value.
     *
     * @return array
     */
    public function getIdProperties()
    {
        return [
            'uuid'
        ];
    }

    /**
     * Returns a list of URLs. This urls must have placeholders to be replaced with the getIdProperties() values.
     *
     * @return array
     */
    public function getUrls()
    {
        return [
            'self' => '/api/v1/some-models/{uuid}',
        ];
    }

    /**
     * Returns an array of properties that are mandatory to be passed in when doing create or update.
     *
     * @return array
     */
    public function getRequiredProperties()
    {
        // TODO: Implement getRequiredProperties() method.
    }

    /**
     * Returns an array containing the relationship mappings as an array.
     * Key for each relationship defined must match a property of the mapped class.
     *
     * @return array
     */
    public function getRelationships()
    {
        // TODO: Implement getRelationships() method.
    }
}