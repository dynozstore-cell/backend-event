<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $cacheKey = 'api_settings_' . ($request->key ?? 'all');
        
        return \Illuminate\Support\Facades\Cache::remember($cacheKey, 3600, function () use ($request) {
            if ($request->has('key')) {
                $setting = Setting::where('key', $request->key)->first();
                return response()->json($setting)->getData();
            }
            return Setting::all()->pluck('value', 'key');
        });
    }

    public function update(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'value' => 'required',
        ]);

        $setting = Setting::updateOrCreate(
            ['key' => $request->key],
            ['value' => $request->value]
        );

        return response()->json([
            'message' => 'Pengaturan berhasil disimpan',
            'data' => $setting
        ]);
    }
}
