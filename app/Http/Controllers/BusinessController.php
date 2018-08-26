<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $business = BusinessController::orderBy('id','ASC')->paginate(5);
        
        return view('admin.business.index')->with("business",$business);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.business.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        dd($request);
        $business = new business($request->all());
        $business->password = bcrypt($request->password);
        $business->save();
        flash('Se a registrado ' . $business->name . ' de forma exitosa')->success();
        return redirect()->route('business.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          //
        $business = business::find($id);
        return view('admin.business.edit')->with("business",$business);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $business = business::find($id);        
        
        if ($business->delete()){
            Session::flas('message', 'Eliminado Correctamente !');
            Session::flas('class', 'success');
        } else{
            Session::flas('message', 'Ha Ocurrido un Error !');
            Session::flas('class', 'danger');
        }
        $business->delete();

        flash('Se a eliminado ' . $business->name . ' de forma exitosa')->error();
        return redirect()->route('business.index');
    }
}
