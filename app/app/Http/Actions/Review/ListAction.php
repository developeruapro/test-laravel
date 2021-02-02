<?php

namespace App\Http\Actions\Review;

use App\DataTransformers\ReviewDataTransformer;
use App\Http\Actions\AbstractAction;
use App\Models\Review;

/**
 * Class ListAction
 * @package App\Http\Actions\Review
 */
class ListAction extends AbstractAction
{
    public function execute()
    {
        $reviews = Review::all()->all();

        return $this->responseCollection(
            ReviewDataTransformer::class,
            $reviews
        );
    }
}
