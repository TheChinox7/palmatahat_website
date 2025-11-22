<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = SiteSetting::first();
        if(!$setting){
            $setting = new SiteSetting([
                'currency_code' => 'USD',
                'currency_symbol' => '$',
                'social_links' => [],
            ]);
        }
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'currency_code' => ['nullable','string','max:16'],
            'currency_symbol' => ['nullable','string','max:8'],
            'phone_country_code' => ['nullable','string','max:8'],
            'phone_number' => ['nullable','string','max:32'],
            'social_links' => ['nullable','array'],
            'social_links.*.icon' => ['nullable','string','max:64'],
            'social_links.*.url' => ['nullable','string','max:255'],
        ]);
        $setting = SiteSetting::first();
        if(!$setting){ $setting = new SiteSetting(); }
        $setting->fill($validated);
        $setting->save();
        return redirect()->route('admin.settings.edit');
    }
}