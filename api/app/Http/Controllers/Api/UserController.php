<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiServiceUnavailableException;
use App\Exceptions\MissingApiKeyException;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct(protected UserRepositoryInterface $repository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $term = $request->get('term');
            $paginate = $request->boolean('paginate', true);
            $users = $paginate
                ? $this->repository->paginate($term)
                : $this->repository->users($term);

            return new UserCollection($users);
        } catch (ApiServiceUnavailableException $exception) {
            return response($exception->getMessage(), 502);
        } catch (MissingApiKeyException $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }
}
