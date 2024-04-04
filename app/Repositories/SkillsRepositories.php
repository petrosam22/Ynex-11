<?php


namespace App\Repositories;

use App\Models\Skill;
use App\Http\Requests\SkillsRequest;
use App\Interfaces\SkillsRepositoryInterface;



class SkillsRepositories implements SkillsRepositoryInterface{

    public function store(SkillsRequest $request){ 

       return  Skill::create($request->all());
         
    }

    public function update($id){
      return   Skill::find($id);


    }
    public function delete($id){
        return   Skill::find($id);

    }
}