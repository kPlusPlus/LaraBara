<?php

namespace App\Http\Controllers;

use App\Customer as Customer;
use App\Order as Ord;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function show($id)
    {
    	$customer = Customer::Find($id);
    	echo $customer->first_name . " " . $customer->last_name . "<br>";
    	echo "Orders: " . "<br>";
	    $orders = Ord::Where('customer_id', $customer->customer_id)
	    		//->take(10)
	    		->get();
	    
	    foreach ($orders as $order) {
	    	echo "<ul>";
	    	echo $order->name . "<br>";
	    	echo "</ul>";
	   	}
    }

    public function get_customer()
    {
    	$customer = Customer::where('first_name','=','LINDA')
        ->first();
    	echo $customer->customer_id;
    }
}
