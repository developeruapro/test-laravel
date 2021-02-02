<?php

namespace App\DataTransformers;

use App\Models\Config;

/**
 * Class ReviewDataTransformer
 * @package App\DataTransformers
 * @property Config $object
 */
class ConfigDataTransformer extends AbstractDataTransformer
{

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->object->id;
    }

    /**
     * @return array
     */
    public function response(): array
    {
        return [
            "id" => $this->id(),
            "config" => $this->object->config,
        ];
    }
}
