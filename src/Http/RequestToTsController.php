<?php

namespace Akoval777\RequestToTs\Http;

use Illuminate\Routing\Controller as BaseController;
use Akoval777\RequestToTs\models\RequestToTs;
use Illuminate\Http\Request;

class RequestToTsController extends BaseController
{
    public function index()
    {
        return RequestToTs::all();
    }

    public function show(RequestToTs $requestToTs)
    {
        return $requestToTs;
    }

    public function create(Request $request)
    {
        $requestToTs = RequestToTs::create($request->all());

        return response()->json($requestToTs, 201);
    }

    public function update(Request $request, RequestToTs $requestToTs)
    {
        $requestToTs->update($request->all());

        return response()->json($requestToTs, 200);
    }

    public function delete(RequestToTs $requestToTs)
    {
        $requestToTs->delete();

        return response()->json(null, 204);
    }
}