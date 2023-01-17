<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\PhoneConsultation;

class PhoneConsultationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'max:255'],
        ]);
        try {
            PhoneConsultation::firstOrCreate([
                'phone' => $request->phone
            ]);                
            
            return response()->json([
                'success' => 'شماره تماس با موفقیت ارسال شد'
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception->getMessage()
            ]);
        }
    }
}
