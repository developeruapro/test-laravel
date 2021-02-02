<?php

namespace App\DataTransformers;

/**
 * Class AbstractDataTransformer
 * @package App\DataTransformers
 */
abstract class AbstractDataTransformer implements DataTransformerInterface
{
    /**
     * @var
     */
    protected $object;

    /**
     * AbstractDataTransformer constructor.
     *
     * @param $object
     */
    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * @param $object
     * @return AbstractDataTransformer
     */
    public static function create($object)
    {
        return new static($object);
    }

    /**
     * @return string
     */
    public function type(): string
    {
        $reflection = new \ReflectionClass($this->object);

        return $reflection->getShortName();
    }
}
