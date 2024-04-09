<?php

namespace App\Interfaces;

interface StatusRepositoryInterface
{
    public function index();
    public function create(array $data);
    public function edit($id);
    public function update($id);

   public function delete($id);
   public function statusCount();

   




}
