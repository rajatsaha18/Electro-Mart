<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    private $customer;
    private $order;
    private $orderDetail;
    public function newOrder(Request $request)
    {
        $this->customer = Customer::newCustomer($request);
        $this->order = Order::newOrder($this->customer,$request);
        OrderDetail::orderDetail($this->order);
        return 'success';
    }
}
