<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
// use Barryvdh\DomPDF\Facade as PDF;
use \PDF;
// use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Facades\Image;
// use Illuminate\Support\Facades\File;
// use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Response;
// use Imagine\Gd\Imagine;
// use Imagine\Image\Box;

class Web_apps_Controller extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function generatePdf(Request $request)
    { 
        // $request->validate([
        //     'name' => 'required',
        //     'country' => 'required',
        //     'state' => 'required',
        //     'city' => 'required',
        //     'gender' => 'required',
        //     // 'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
    
        if ($request->hasFile('profile_image')) {
            $profileImage = $request->file('profile_image');
            $profileImagePath = $profileImage->store('profile_images','public');

            // Optionally, you can store the $profileImagePath in the database or perform other actions here
        }

        // Save user data to the database
        $user = User::create([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'gender' => $request->input('gender'),
            'profile_image' => $profileImagePath ?? null,
        ]);
        

        // echo"<pre>";
        // print_r($user); exit;

        // Generate PDF
        $pdf = PDF::loadView('pdf', [
            'user' => $user,    
        ]);

        // echo"<pre>";
        // print_r($pdf); exit;

        // If you want to save the PDF file, you can use the following code:
        $pdfPath = 'pdfs/'.time().'.pdf';
        $pdf->save(public_path($pdfPath));

        // Download the PDF file
        return response()->download(public_path($pdfPath), 'user_info.pdf');
    }
}
