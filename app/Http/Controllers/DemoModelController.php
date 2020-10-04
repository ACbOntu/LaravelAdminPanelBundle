<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyRequest;
use App\Models\DemoModel;
use App\Repository\BaseBundle;
use Illuminate\Http\Request;

class DemoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $baseBundle;
    public function __construct(BaseBundle $baseBundle)
    {
        $this->baseBundle = $baseBundle;

    }

    public function index()
    {

        //return $this->baseBundle->update('DemoModel',$id, $data = $request->all());
        //return $this->baseBundle->create('DemoModel',$data = $request->all());
        //return $this->baseBundle->searchAll('DemoModel',$column  = array('name'=>'ni','mobile'=>'9'),'id','asc');
       // return $this->baseBundle->searchByColumn('DemoModel','name','nick');
       return $this->baseBundle->showAll('DemoModel');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DemoModel  $demoModel
     * @return \Illuminate\Http\Response
     */
    public function show(DemoModel $demoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DemoModel  $demoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(DemoModel $demoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DemoModel  $demoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DemoModel $demoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DemoModel  $demoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(DemoModel $demoModel)
    {
        //
    }
}
