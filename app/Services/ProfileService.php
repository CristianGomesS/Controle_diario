<?php

namespace App\Services;

use App\Helpers\SlugStoreHelper;
use App\Repositories\Contracts\BaseInterface;
use App\Repositories\Core\ProfileRepository;

class ProfileService implements BaseInterface
{
    public function __construct(private ProfileRepository $repository) {}

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function paginate(int $totalPage)
    {
        return $this->repository->paginate($totalPage);
    }

    public function findById(int $id): object
    {
        return$this->repository->findById($id);
    }

    public function store(array $data): void
    {
        $data = SlugStoreHelper::FormateSlug($data);
        $this->repository->store($data);
    }

    public function update(array $data, int $id): void
    {
        $profile = $this->findById($id);
        $this->repository->update($profile, $data);
    }

    public function destroy(int $id): void
    {
        $profile = $this->findById($id);
        $this->repository->destroy($profile);
    }

    public function restore(int $id)
    {
        $this->repository->restore($id);
    }
}
