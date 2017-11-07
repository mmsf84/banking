<?php
namespace banking\domain\repository;

interface GenericRepository
{
    public function save($entity);
    public function update($entity);
    public function merge($entity);
}

?>