<?php


namespace App\Interfaces;
use App\Http\Requests\CreateEventRequest;
interface EventRepositoryInterface{
    public function index();
    public function store(CreateEventRequest $request);
      public function getById($id);
      
 }
