<?php

namespace App\Services;

use App\Repositories\Contracts\BaseInterface;
use App\Repositories\Core\FuncionarioRepository;

class FuncionarioService implements BaseInterface
{
    public function __construct(private FuncionarioRepository $repository) {}

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
