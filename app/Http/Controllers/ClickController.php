<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClickRequest;
use App\Models\Affiliate;
use App\Models\Click;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class ClickController extends Controller
{
    public function track($referralCode)
    {
        try {
            $affiliate = Affiliate::where('referral_code', $referralCode)->firstOrFail();

            Click::create([
                'affiliate_id' => $affiliate->id,
                'ip_address' => Request::ip(),
                'clicked_at' => Carbon::now()->timestamp,
            ]);

            return redirect('http://www.affiliate.com/');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error recording click.');
        }
    }
}
