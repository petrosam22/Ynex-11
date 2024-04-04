<?php

namespace App\Interfaces;

use App\Http\Requests\SkillsRequest;


interface SkillsRepositoryInterface{

    public function store(SkillsRequest $request);
     public function update($id);

    public function delete($id);

    
}