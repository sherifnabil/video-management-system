<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Page;
use App\Http\Requests\BackEnd\Pages\Store;
use App\Http\Controllers\BackEnd\BackEndController;


class Pages extends BackEndController
{
    
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request)
    {

        $this->model->create($request->all());
        return redirect()->route('pages.index');
    }


    public function update(Store $request, $id)
    {
        $row = $this->model->findOrFail($id);

        $row->update(request()->all());
        return redirect()->route('pages.index');
    }
}
