<?php

namespace App\Services;

use App\Exceptions\CredentialsException;
use App\Exceptions\UserException;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Mail\AccountCreateMail;
use App\Repositories\Contracts\UserInterface;
use App\Repositories\Core\UserRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Sanctum\PersonalAccessToken;

class UserService implements UserInterface
{
    public function __construct(
        private UserRepository $repository
    ) {}

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function paginate(int $totalPage): LengthAwarePaginator
    {
        return $this->repository->paginate($totalPage);
    }

    public function findWhereFirst(string $column, string $value)
    {
        return $this->repository->findWhereFirst($column, $value);
    }

    public function applyFilter(array $data)
    {
        return $this->repository->applyFilter($data);
    }

    public function findById(int $id)
    {
        return $this->repository->findById($id);
    }

    public function store(array $data): void
    {
        $data['password'] = Str::random(10);

        $this->repository->store($data);
        //  Mail::to($data['email'])->send(new AccountCreateMail($data));
    }

    public function update(array $request, int $id): void
    {
        $user = $this->findById($id);
        $this->repository->update($user, $request);
    }

    public function destroy(int $id): void
    {
        $user = $this->findById($id);
        $this->repository->destroy($user);
        $user->tokens()->delete();
    }

    public function login(object $request) {}

    public function loggedInUser($request) {}

    public function logout($request): void {}

    public function updatePassword(string $email, string $password): void {}


    public function restore(int $id) {}
}
