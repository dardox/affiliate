<?php

namespace App\Http\Controllers;

use App\Http\Requests\AffiliateRequest;
use App\Models\Affiliate;

class AffiliateController extends Controller
{
    public function create() {
        return view('affiliate.create');
    }
    public function store(AffiliateRequest $request)
    {
        try {
            Affiliate::create($request->validated());
            return redirect()->back()->with('success', 'Affiliate created!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error');
        }
    }

}
