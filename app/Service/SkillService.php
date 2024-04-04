<?php


namespace App\Service;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\SkillsRequest;
use App\Interfaces\SkillsRepositoryInterface;


class SkillService {
   
 
private SkillsRepositoryInterface $skillsRepository;
    public function __construct(  SkillsRepositoryInterface $skillsRepository){
        $this->skillsRepository = $skillsRepository;
    }


    public function store(SkillsRequest $request){
        return    $this->skillsRepository->store($request);


         
        
    }
    public function update(SkillsRequest $request , $id){
         
    $skill = $this->skillsRepository->update($id);
     $skill->update($request->all());
     return $skill;
    } 

    public function delete($id){
         
        $skill = $this->skillsRepository->delete($id);
         $skill->delete();
         }
    


}
