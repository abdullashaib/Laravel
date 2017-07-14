<?php

namespace App\Http\Controllers;

use App\Parents;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
use App\Payment;

class PaymentController extends Controller
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
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $parents = Parents::all();
      
      return view('payments.create', compact('parents'));
      
    }
    
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( PaymentRequest $request) {
      
      Payment::create(request(['month', 'amount', 'pay_date', 'parents_id']));
      
      return redirect()->home();
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Payment $id
	  * @return Response
	  */
    public function show($id) {
    
      $payment = Payment::find($id); 
      
      return view('payments.show')->with('payment', $payment);
    
    }
    
}
