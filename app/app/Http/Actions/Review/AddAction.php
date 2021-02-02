<?php

namespace App\Http\Actions\Review;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Actions\AbstractAction;
use Illuminate\Support\Facades\Validator;
use App\DataTransformers\ReviewDataTransformer;

/**
 * Class AddAction
 * @package App\Http\Actions\Review
 */
class AddAction extends AbstractAction
{
    public function execute(Request $request)
    {
        $result = Validator::make($request->all(), [
            'author' => ["required", "max:255"],
            'text' => ["required", "min:10"],
        ]);

        if($result->fails()) {
           return $this->responseError(
                $result->errors()->all(),
                AbstractAction::RESPONSE__BAD_REQUEST,
            );
        }

        $review = new Review([
            'author' => $request->get("author"),
            'text' => $request->get("text"),
        ]);
        $review->save();

        return $this->responseDocument(ReviewDataTransformer::class, $review);
    }
}
