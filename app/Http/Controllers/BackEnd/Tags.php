<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Tag;
use App\Http\Requests\BackEnd\Tags\Store;
use App\Http\Controllers\BackEnd\BackEndController;


class Tags extends BackEndController
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request)
    {

        $this->model->create($request->all());
        return redirect()->route('skills.index');
    }


    public function update(Store $request, $id)
    {
        $row = $this->model->findOrFail($id);

        $row->update(request()->all());
        return redirect()->route('skills.index');
    }
}
