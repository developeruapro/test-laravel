<?php

namespace App\Http\Actions\Config;

use App\DataTransformers\ConfigDataTransformer;
use App\Http\Actions\AbstractAction;
use App\Models\Config;

/**
 * Class GetAction
 * @package App\Http\Actions\Review
 */
class GetAction extends AbstractAction
{
    public function execute()
    {
        $config = Config::query()->find(1);
        if(!$config) {
            $config = new Config();
            $config->config = 55;
            $config->save();
        }

        return $this->responseDocument(ConfigDataTransformer::class, $config);
    }
}
