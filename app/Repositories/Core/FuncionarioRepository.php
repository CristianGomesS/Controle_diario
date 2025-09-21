<?php

namespace App\Repositories\Core;

use App\Models\Funcionario;

class FuncionarioRepository extends BaseRepository
{
    public function __construct(private Funcionario $entity)
    {
        parent::__construct($entity);
    }

}
