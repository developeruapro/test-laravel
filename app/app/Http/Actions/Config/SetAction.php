<?php

namespace App\Http\Actions\Config;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Actions\AbstractAction;
use Illuminate\Support\Facades\Validator;
use App\DataTransformers\ConfigDataTransformer;

/**
 * Class SetAction
 * @package App\Http\Actions\Review
 */
class SetAction extends AbstractAction
{
    public function execute(Request $request)
    {
        $config = Config::query()->find(1);

        $result = Validator::make($request->all(), [
            'config' => ["required"],
        ]);

        if($result->fails()) {
            return $this->responseError(
                $result->errors()->all(),
                AbstractAction::RESPONSE__BAD_REQUEST,
            );
        }

        $config->config = (int)$request->get('config');
        $config->save();

        return $this->responseDocument(ConfigDataTransformer::class, $config);
    }
}
