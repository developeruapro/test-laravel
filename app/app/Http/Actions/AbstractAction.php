<?php

namespace App\Http\Actions;

use App\DataTransformers\DataTransformerInterface;
use App\Http\Controllers\Controller;
use http\Exception\RuntimeException;

/**
 * Class AbstractAction
 * @package App\Http\Actions
 */
abstract class AbstractAction extends Controller
{
    const RESPONSE__ERROR = 500;
    const RESPONSE__SUCCESS = 200;
    const RESPONSE__BAD_REQUEST = 400;

    protected function responseError(
        array $errors,
        $code = self::RESPONSE__BAD_REQUEST
    ) {
        return $this->response($errors, $code);
    }

    /**
     * @param $dataTransformerClass
     * @param $object
     */
    protected function responseDocument(
        $dataTransformerClass,
        $object
    ) {
        $dataObject = $this->renderObject($dataTransformerClass, $object);

        return $this->response($dataObject);
    }

    /**
     * @param $dataTransformerClass
     * @param array $objects
     */
    protected function responseCollection(
        $dataTransformerClass,
        array $objects
    ) {
        $renderElements = [];
        foreach ($objects as $object) {
            $renderElements[] = $this->renderObject($dataTransformerClass, $object);
        }

        return $this->response([
            "type" => "Collection",
            "id" => null,
            "data" => $renderElements
        ]);
    }


    /**
     * @param $dataTransformerClass
     * @param $object
     * @return array
     */
    private function renderObject(
        $dataTransformerClass,
        $object
    ) {
        /** @var DataTransformerInterface $dataTransformer */
        $dataTransformer = $dataTransformerClass::create($object);
        if(!$dataTransformer instanceof DataTransformerInterface) {
            throw new RuntimeException("$dataTransformerClass dont implement ". DataTransformerInterface::class);
        }

        return [
            "type" => $dataTransformer->type(),
            "id" => $dataTransformer->id(),
            "data" => $dataTransformer->response(),
        ];
    }

    /**
     * @param array $response
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    private function response(array $response, $code = self::RESPONSE__SUCCESS)
    {
        return response()->json($response, $code);
    }
}
