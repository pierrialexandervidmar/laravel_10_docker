<?php

namespace App\Services;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Models\Support;
use App\Repositories\SupportRepositoryInterface;
use GuzzleHttp\Promise\Create;
use stdClass;

class SupportService
{
    protected SupportRepositoryInterface $repository;

    public function __construct(
        SupportRepositoryInterface $repository
    ){
        $this->repository = $repository;
    }
    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findONe($id);
    }

    public function new(CreateSupportDTO $dto): stdClass|null
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }


}