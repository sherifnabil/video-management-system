<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;
use App\Http\Controllers\BackEnd\BackEndController;

class UsersController extends BackEndController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request)
    { 
        $requestedArray = $request->all();
        $requestedArray['password'] = bcrypt($request->password);

        $this->model->create($requestedArray);     
        return redirect()->route('users.index');   
    }
 
     
    public function update(Update $request, $id)
    {
        $row = $this->model->findOrFail($id);

        $requestedArray = request()->all();
        
        if(isset( $requestedArray['password']) && $requestedArray['password'] != '') 
        {
            $requestedArray['password'] = bcrypt( $requestedArray['password']);
        }else{
            unset($requestedArray['password']);
        }


        $row->update( $requestedArray);
        return redirect()->route('users.index');
        
    }
    


}
