<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Lecture;
use App\Student;

class ChargeController extends Controller
{
    /*単発決済用のコード*/
    public function charge(Request $request, $id)
    {

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => 1000,
                'currency' => 'jpy'
            ));

            $this->update($request, $id);

            return redirect()->route('student/dashboard');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function update(Request $request, $id) {

        $lecture = Lecture::find($id);
        $lecture->status = 'R';
        $student_id = Student::find($request->session()->get('login_id'));
        $lecture->student_id = $student_id;
        $lecture->save();

    }

}