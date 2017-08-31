<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class paymentsController extends Controller
{
    public function index() 
	{
		$paymentsContent = \DB::table('reservations')->get();
		$categories = \DB::table('categories')->get();
		return view('payments', compact('categories', 'paymentsContent'));	
	}
	
	public function store()
	{
		$reservation = Reservation::create(request(['_categoriesID', 'title', 'firstName', 'lastName', 'arrival', 'departure', 'adults', 'kids', 'total']));
		
		return redirect('payments');
	}
}
