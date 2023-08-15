<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Charts\OrderChart;
use App\Models\Social;

class DashboardController extends Controller
{

    public function dashboard(){
        return view('admin.pages.dashboard');
    }

    public function order(){
        $orders = Payment::all();

        return view('admin.order.index' , compact('orders'));
    }
    public function use(){
        return view('admin.pages.use');
    }

    public function social(){
        $social = Social::first();
        return view('admin.pages.social' , compact('social'));
    }

    

    public function socialUpdate(Request $request){

        try {
            $social = Social::first();
            if (!$social) {
                return redirect()->route('social')->with(['error' => 'This discount does not exist']);
            }



            $social->update($request->except('_token'));

            return redirect()->route('social')->with(['success' => ' Social update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('social')->with(['error' => 'Something went wrong, please try again later']);
        }

    }

    public function chart(){
        $chart = new OrderChart;

$chart->labels(['One', 'Two', 'Three', 'Four']);
$chart->dataset('My dataset', 'line', [1, 2, 3, 4]);

$chart->dataset('My dataset 2', 'bar', [4, 3, 2, 1]);

$chart->options([
    'tooltip' => [
        'show' => true // or false, depending on what you want.
    ],
    'color' => '#121212'
]);

$chart->title("Order", 14, '#666',  true, "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif");


        return view('admin.pages.chart' ,  compact('chart'));
    }
}