<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $cacheKey = 'api_settings_' . ($request->key ?? 'all');
        
        return Cache::remember($cacheKey, 3600, function () use ($request) {
            if ($request->has('key')) {
                return Setting::where('key', $request->key)->first();
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
