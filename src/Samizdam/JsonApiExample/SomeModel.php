<?php

namespace Samizdam\JsonApiExample;

class SomeModel
{

    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $name;

    public function __construct(string $uuid, string $name)
    {
        $this->uuid = $uuid;
        $this->name = $name;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getName(): string
    {
        return $this->name;
    }
}