<?php

namespace App\DataTransformers;

use App\Models\Review;

/**
 * Class ReviewDataTransformer
 * @package App\DataTransformers
 * @property Review $object
 */
class ReviewDataTransformer extends AbstractDataTransformer
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
            "author" => $this->object->author,
            "text" => $this->object->text,
            "create_at" => $this->object->create_time
        ];
    }
}
