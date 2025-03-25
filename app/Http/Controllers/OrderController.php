<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // Show the order form
    public function showForm()
    {
        return view('createOrder'); // This will point to the view that contains the modal form
    }

    // Handle the calculate total logic
    public function calculateTotal(Request $request)
    {
        // Validate the request
        $request->validate([
            'customerName' => 'required|string',
            'nic' => 'required|string',
            'contactNum' => 'required|string',
            'email' => 'required|email',
            'package' => 'required|string',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'discount' => 'nullable|numeric|min:0|max:100',
            'child' => 'nullable|integer|min:0',
            'adult' => 'nullable|integer|min:0', // at least one adult required
            'country' => 'nullable|string|max:255',

        ]);
        
        // Extract data from request
        $packagePrices = [
            'Basic' => 2500, // Replace with actual prices
            'Premium' => 5000,
            'Luxury' => 7000,
            'Super' => 12500,
            'Delux' => 12500,
            'Sign' => 10500,
            'Couple' => 10000,
        ];
        
        $package = $request->input('package');
        $checkInDate = $request->input('checkInDate');
        $checkOutDate = $request->input('checkOutDate');
        $discount = $request->input('discount') ?: 0;
        
        // Calculate the number of nights
        $checkIn = \Carbon\Carbon::parse($checkInDate);
        $checkOut = \Carbon\Carbon::parse($checkOutDate);
        $nights = $checkIn->diffInDays($checkOut);
        

        // Calculate the total cost
        $basePrice = isset($packagePrices[$package]) ? $packagePrices[$package] : 0;
        $total = $basePrice * $nights;
        $totalWithDiscount = $total - ($total * ($discount / 100));

        // Return the total price and display in the modal
        return response()->json([
            'total' => $totalWithDiscount,
            'nights' => $nights,
            'basePrice' => $basePrice,
            'discount' => $discount,
            
        ]);
    }

    // Optionally handle sending the order to the database
    public function sendOrder(Request $request)
    {
        // Log the incoming request data (for debugging purposes)
        \Log::info('Order Request Data:', $request->all());
    
        // Validate request
        $request->validate([
            'customerName' => 'required|string',
            'nic' => 'required|string',
            'contactNum' => 'required|string',
            'email' => 'required|email',
            'package' => 'required|string',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'discount' => 'nullable|numeric|min:0|max:100',
            'total' => 'required|numeric|min:0',
        ]);
    
        // Insert the order into the database (example with an 'orders' table)
        DB::table('orders')->insert([
            'customer_name' => $request->input('customerName'),
            'nic' => $request->input('nic'),
            'contact_number' => $request->input('contactNum'),
            'email' => $request->input('email'),
            'package' => $request->input('package'),
            'check_in_date' => $request->input('checkInDate'),
            'check_out_date' => $request->input('checkOutDate'),
            'discount' => $request->input('discount'),
            'total' => $request->input('total'),
            'created_at' => now(),
            'updated_at' => now(),
            'child' => $request->input('child'),
            'adult' => $request->input('adult'),
            'country' => $request->input('country'),

        ]);
    
        return redirect()->route(route: 'admin.dashboard')->with('success', 'Order placed successfully!');
    }

    public function getOrders()
{
    // Fetch the required fields from the orders table
    $orders = DB::table('orders')->select('id', 'customer_name', 'package', 'total')->get();

    // Return the orders as a JSON response
    return response()->json($orders);
}
}
