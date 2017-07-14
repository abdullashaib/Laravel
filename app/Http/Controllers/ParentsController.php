<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParentRegRequest;
use App\Parents;

class ParentsController extends Controller
{
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct() {
    
      $this->middleware('auth');
      
    }
    
    /**
	  * Display a listing of parent.
	  *
	  * @return Response Array
	  */
    public function index() {
    
      $parents = Parents::orderBy('firstname', 'ASC')->orderBy('lastname', 'ASC')->get();
      
      return view('parents.index', compact('parents'));
    
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Parents $Parent
	  * @return Response
	  */
    public function show( Parents $parent) {
      
      return view('parents.show', compact('parent'));
      
    }
    
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      return view('parents.create');
      
    }
    
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( ParentRegRequest $request) {
      
      Parents::create(request(['firstname', 'lastname', 'gender', 'phone_number', 'email', 'address', 'city', 'province', 'postal_code', 'monthly_payment']));
      
      flash('Parent added ')->success();
      
      return redirect('parents');
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Parents $id
	  * @return Response
	  */
    public function edit( $id) {
      
      $parent = Parents::find($id);
      
      return view('parents.edit', compact('parent'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Parents $id
	  * @return Response
	  */
    public function update($id, Request $request) {
    
      $parent = Parents::findOrFail($id);
      
      $parent->update($request->all());
      
      flash('Parent updated ')->success();
      
      return redirect('parents');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Parents $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $parent = Parents::find($id);
      
      $parent->delete();
      
      flash('Parent deleted ')->success();
      
      return redirect('parents');
      
    }
    
}
