<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{

    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return \response()->json([
            "data" => UserResource::collection($this->userRepository->getAll())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|object|Response|ResponseFactory
     */
    public function store(Request $request)
    {
        return \response()->json([
            "message" => "",
        ], 405);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return \response()->json([
            UserResource::make($user)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user): \Illuminate\Http\JsonResponse
    {
        $user_attributes = $request->only(["user_name", "email", "password"]);

        foreach ($user_attributes as $key => $value) {
            if (is_null($value)) {
                unset($user_attributes[$key]);
            }
        }

        if (key_exists("password", $user_attributes)) {
            $user_attributes["password"] = Hash::make($user_attributes["password"]);
        }

        $this->userRepository->update($user->id, $user_attributes);
        return \response()->json([
            UserResource::make($this->userRepository->find($user->id))
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        return \response()->json([
            "message" => ""
        ], 405);
    }
}
