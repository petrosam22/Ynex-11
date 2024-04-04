<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Service\SkillService;
use App\Http\Requests\SkillsRequest;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{


    private SkillService $SkillService ;

    public function __construct(SkillService $SkillService){
        $this->SkillService = $SkillService;
    }

     public function create(){
        return view('skills.create');
    }

    public function store(SkillsRequest $request){
         $this->SkillService->store($request);


         return view('skills.create');


         
    }
    public function edit($id){
        $skill = Skill::find($id);
        return view('skills.edit',compact('skill'));
    }

    public function update(SkillsRequest $request , $id){
        $this->SkillService->update($request , $id);

        return redirect()->route('user.profile');

    }
    
    public function delete(  $id){
        $this->SkillService->delete( $id);

        return redirect()->route('user.profile');

    }

 
    
}
