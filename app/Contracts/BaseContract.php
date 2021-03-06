<?php
namespace App\Contracts;

interface BaseContract
{
    /**
     * Create a model instance
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Find one by ID
     * @param string $id
     * @return mixed
     */
    public function find(string $id);

    /**
     * Update a model instance
     * @param array $attributes
     * @param string $id
     * @return mixed
     */
    public function update(array $attributes, string $id);

    /**
     * Return all model rows
     * @param int $numPaginated
     * @param string $orderBy
     * @param string $sortBy
     * @param array $relationship
     * @return mixed
     */
    public function all(int $numPaginated = 9, string $orderBy = 'created_at', string $sortBy = 'desc', array $relationship = []);

    /**
     * Return all model rows
     * @param array $data
     * @param int $paginate
     * @return mixed
     */
    public function paginate(array $data, int $paginate);

    /**
     * Delete one by Id
     * @param string $id
     * @return mixed
     */
    public function delete(string $id);
}
