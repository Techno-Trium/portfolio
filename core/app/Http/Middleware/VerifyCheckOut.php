<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class VerifyCheckOut
{
    /**
     * Handle an incoming request.
     *
     * Verifies that the request has met the necessary conditions to proceed
     * with check_out. If not redirect to the necessary page to get the information
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        $addresses = $user->addresses->all();
        $payment_cards = $user->payment_cards->all();
        $profile = $user->profile()->get();

        if (count($profile) == 0) {
            return redirect('account/profile/edit')->with('next-page', 'store/checkout');
        }


        if (count($addresses) == 0) {
            return redirect('account/addresses/create')->with('next-page', 'store/checkout');
        }

        if (count($payment_cards) == 0) {
            return redirect('account/payment_cards/create')->with('next-page', 'store/checkout');
        }

        $request->session()->forget('next-page');

        return $next($request);
    }
}
