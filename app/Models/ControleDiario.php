<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleDiario extends Model
{
    use HasFactory;

    protected $table = "controle_diarios";
    protected $fillable = [
        "funcionario_motorista_id",
        "funcionario_gestor_id",
        "funcao_id",
        "status_id",
        "retorno_ferias",
        "status_viagem_id",
        "hora_extra",
        "justificativa_hora_extra",
        "created_at",
        "updated_at",
    ];


public function funcionario_motorista()
{
    return $this->belongsTo(Funcionario::class, "funcionario_motorista_id");
}

public function funcionario_gestor()
{
    return $this->belongsTo(Funcionario::class, "funcionario_gestor_id");
}

public function funcao()
{
    return $this->belongsTo(Funcao::class, "funcao_id");
}

public function status()
{
    return $this->belongsTo(Status::class, "status_id");
}

public function status_viagem()
{
    return $this->belongsTo(Status::class, "status_viagem_id");
}

public function alteracao_status()
{
    return $this->belongsTo(Status::class, "alteracao_status_id");
}
}