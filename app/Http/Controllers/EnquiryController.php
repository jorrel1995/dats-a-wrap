<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryCustomer as EnquiryCustomer;
use App\Mail\EnquiryInternal as EnquiryInternal;
use App\Models\Enquiry as Model;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{


    /**
     * Stores a new enquiry
     * @param Request $request
     * @return type
     */
    public function enquiry(Request $request)
    {
        try {
            // $captcha = $this->checkRecaptcha();
            // if (!$captcha) {
            //     return redirect()->back()->with('danger', 'Sorry, we were unable to submit your request. Please try again and contact us if this error persists.');
            // }
            $store = $request->except('_token');

            $item = Model::create($store);

            try {
                Mail::to($request->email)->send(new EnquiryCustomer());
                Mail::to('jorrel_95@hotmail.co.uk')->send(new EnquiryInternal($request));
                return redirect()->back()->with('success', 'Thank you for your enquiry, we aim to respond within 24 working hours.');
            } catch (\Exception $e) {
                dd($e);
                return redirect()->back()->with('danger', 'Sorry, we were unable to process your enquiry. Please try again and contact us if this error persists');
            }

        } catch (\Exception $e) {
            dd($e);

            return redirect()->back()->with('danger', 'Sorry, we were unable to process your enquiry. Please try again and contact us if this error persists');
        }
    }

    /**
     * Performd a captcha check
     * @return type
     */
    public function checkRecaptcha()
    {
        try {
            if (Auth::guard('admin')->check()) {
                return true;
            }

            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=6LdPVrcpAAAAANeXHr_5tU-5YX6RTviZJ-Dtz6Pk&response=' . Request()->token;
            $response = file_get_contents($url);
            $responseKeys = json_decode($response, true);

            if ($responseKeys['success'] == false) {
                return false;
            }
            if ($responseKeys["success"] == true) {
                return true;
            }

            return false;

        } catch (\Exception $e) {
            return true;
        }
    }
}
