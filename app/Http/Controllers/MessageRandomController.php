<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostMessageRandom;
use App\Http\Resources\MessageRandomResource;
use App\Models\MessageRandom;
use App\Repository\MessageRandomRepository;
use Illuminate\Http\Request;

class MessageRandomController extends Controller
{
    private $repository;
    public function __construct(MessageRandomRepository $MessageRandom)
    {
        $this->repository = $MessageRandom;
    }


    public function MessageRand()
    {

        return new MessageRandomResource($this->repository->FindByMessage());
    }

    public function createMessageRand(PostMessageRandom $request)
    {
        $this->repository->createMessage($request->validated());
        return response()->json(['succes'=> 'cadastrado'],200);

    }
}
