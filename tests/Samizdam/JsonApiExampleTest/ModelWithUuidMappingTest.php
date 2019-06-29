<?php

namespace Samizdam\JsonApiExampleTest;

use NilPortugues\Api\JsonApi\JsonApiSerializer;
use NilPortugues\Api\JsonApi\JsonApiTransformer;
use NilPortugues\Api\Mapping\Mapper;
use PHPUnit\Framework\TestCase;
use Samizdam\JsonApiExample\SomeModel;
use Samizdam\JsonApiExample\SomeModelMapping;

class ModelWithUuidMappingTest extends TestCase
{

    public function testMapping()
    {
        $model = new SomeModel('foo-bar', 'foo');
        $mapper = new Mapper([SomeModelMapping::class]);

        $transformer = new JsonApiTransformer($mapper);
        $serializer = new JsonApiSerializer($transformer);

        $serialized = $serializer->serialize($model);

        $expected = <<<JSON
{
    "data": {
        "type": "some_model",
        "id": "foo-bar",
        "attributes": {
            "name": "foo"
        },
        "links": {
            "self": {
                "href": "/api/v1/some-models/foo-bar"        
            }
        }
    },
    "links": {
        "self": {
            "href": "/api/v1/some-models/foo-bar"        
        }
    },
    "jsonapi": {
        "version": "1.0"
    }
}
JSON;

        $this->assertJsonStringEqualsJsonString($expected, $serialized);
    }
}