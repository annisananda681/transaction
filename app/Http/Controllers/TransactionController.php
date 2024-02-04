<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    const REDIRECTHOME = "/transactions";

    public function index()
    {
        if (Auth::check()) {
            return view('transactions.home', [
                'transactions' => Transaction::latest('created_at')->get()
            ]);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function addPage()
    {
        if (Auth::check()) {
            return view('transactions.add');
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function addData(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'customer' => 'required',
                'product' => 'required',
                'price' => 'required',
            ]);

            Transaction::create([
                'customer' => $request->input('customer'),
                'product' => $request->input('product'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
            ]);
            
            return redirect(self::REDIRECTHOME);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function updateData(Request $request)
    {
        if (Auth::check()) {
            $id = $request->input('transaction_id');

            $this->validate($request, [
                'customer' => 'required',
                'product' => 'required',
                'price' => 'required',
            ]);

            $transaction = Transaction::find($id);
            $transaction->customer = $request->input('customer');
            $transaction->product = $request->input('product');
            $transaction->description = $request->input('description');
            $transaction->price = $request->input('price');
            $transaction->save();
            
            return redirect(self::REDIRECTHOME);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function deleteData($id)
    {
        if (Auth::check()) {
            $transaction = Transaction::findOrFail($id);
            $transaction->delete();
            
            return redirect(self::REDIRECTHOME);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }
}
