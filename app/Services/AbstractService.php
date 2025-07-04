<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

abstract class AbstractService
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Cria um novo registro.
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * Lista todos os registros.
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Retorna um registro por ID.
     */
    public function find(int|string $id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * Atualiza um registro por ID.
     */
    public function update(int|string $id, array $data): ?Model
    {
        $model = $this->find($id);

        if ($model) {
            $model->update($data);
        }

        return $model;
    }

    /**
     * Remove um registro por ID.
     */
    public function delete(int|string $id): bool
    {
        $model = $this->find($id);

        return $model ? $model->delete() : false;
    }
}
