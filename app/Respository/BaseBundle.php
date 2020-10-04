<?php
namespace App\Repository;

use App\Http\Requests\MyRequest;

class BaseBundle
{
    public static function showAll($model)
    {
        $model = 'App\Models\\'.$model;
        $result = $model::all();
        return $result;
    }
//  in Model class fields should be fillable
    public static function create($model,$data = array()){
        $model = 'App\Models\\'.$model;
        $result = $model::create($data);
        return $result;
    }
    public static function find($model,$id){
        $model = 'App\Models\\'.$model;
        $result = $model::find($id);
        return $result;
    }

    public static function update($model,$id,$data = array()){
        $model = 'App\Models\\'.$model;
        $model = $model::find($id);
        $result = $model::update($data);
        return $result;
    }


    public static function searchByColumn($model,$column,$keyword){
        $model = 'App\Models\\'.$model;
        $result  = $model->where($column,'LIKE','%'.$keyword.'%')->get();
        return $result;
    }

    public static function searchAll($model,$columns = array(),$order='id',$sort='asc'){
        $model = 'App\Models\\'.$model;
        $model = $model::orderBy($order,$sort);
        foreach ($columns as $columnName => $keyword) {
            $model = $model->where($columnName, 'LIKE', '%' . $keyword . '%');
        }
        $result = $model->get();
        return $result;
    }
}
