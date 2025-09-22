<?php

namespace App\Services;

use App\Http\Resources\AbilityCollection;
use App\Http\Resources\AbilityResource;
use App\Repositories\Contracts\BaseInterface;
use App\Repositories\Core\AbilityRepository;
use Illuminate\Database\Eloquent\Collection;

class AbilityService implements BaseInterface
{
    public function __construct(private AbilityRepository $repository) {}

    public function getAll(): Collection
    {
        return $this->repository->getAll();
    }

    public function paginate(int $totalPage)
    {
        return $this->repository->paginate($totalPage);
    }

    public function findById(int $id)
    {
        return $this->repository->findById($id);
    }

    public function store(array $data): void
    {
        $this->repository->store($data);
    }

    public function update(array $data, int $id): void
    {
        $ability = $this->findById($id);
        $this->repository->update($ability, $data);
    }

    public function destroy(int $id): void
    {
        $ability = $this->findById($id);
        $this->repository->destroy($ability);
    }
}
