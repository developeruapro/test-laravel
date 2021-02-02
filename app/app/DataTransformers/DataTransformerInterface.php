<?php

namespace App\DataTransformers;

/**
 * Class AbstractDataTransformer
 * @package App\DataTransformers
 */
interface DataTransformerInterface
{
    /**
     * DataTransformerInterface constructor.
     * @param $object
     */
    public function __construct($object);

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return string
     */
    public function id(): string;

    /**
     * @return array
     */
    public function response(): array;
}
