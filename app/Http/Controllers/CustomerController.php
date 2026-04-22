<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect('/customers')->with('success', 'Customer added successfully');
    }
    public function destroy($id)
{
    Customer::destroy($id);
    return redirect('/customers')->with('delete', 'Customer deleted successfully');
}

public function edit($id)
{
    $customer = Customer::findOrFail($id);
    return view('customers.edit', compact('customer'));
}

public function update(Request $request, $id)
{
    $customer = Customer::findOrFail($id);

    $customer->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
    ]);

    return redirect('/customers')->with('update', 'Customer updated successfully');
}
}