<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;



class BackEndController extends Controller
{

    protected $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        
        $rows = $this->model;
        $rows = $this->filter($rows);
        $rows = $rows->paginate(5);

        $moduleName =  $this->pluralModelName();
        $routeName  =  $this-> getClassNameFromModel();
        $sModuleName = $this->getModelName();
        $pageTitle =  "Control " .  $moduleName;
        $pageDes =  "You Can Add/ Edit/ Delete " . $moduleName;   

        return view('back-end.' . $this->getClassNameFromModel() . '.index',
         compact(
             'rows',
             'pageTitle',
             'moduleName',
             'pageDes',
             'sModuleName',
             'routeName'
            ));
    }

    public function create()
    {

        $moduleName = $this->getModelName();
        $pageTitle =  " Create " . $moduleName;
        $pageDes = "Here You Can Create " . $moduleName;
        $folderName =  $this->getClassNameFromModel();
        $routeName =  $folderName;


        return view( 'back-end.' . $folderName . '.create', compact(
            'rows',
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'
        ));
    }


    public function edit($id)
    {

        $row = $this->model->findOrFail($id);

        $folderName =  $this->getClassNameFromModel();
        $routeName =  $folderName;
        $moduleName = $this->getModelName();
        $pageTitle = " Edit " . $moduleName;
        $pageDes = "You Can Edit " . $moduleName;

        return view( 'back-end.' . $folderName . '.edit',
         compact('row', 'moduleName', 'folderName', 'routeName', 'pageTitle', 'pageDes'));
    }



    public function destroy($id)
    {
        $this->model->findOrFail($id)->delete();
        return redirect()->route($this->getClassNameFromModel() . '.index');
    }


    protected function filter($rows)
    {
        return $rows;
    }


    protected function getClassNameFromModel()
    {
        return strtolower($this->pluralModelName());
    }


    protected function pluralModelName()
    {
        return str_plural($this->getModelName());
    }


    protected function getModelName()
    {
        return class_basename($this->model);
    }

}