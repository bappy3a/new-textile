<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CompanyProfileController extends Controller
{
    public function download(): BinaryFileResponse
    {
        $path = setting('company_profile');
        abort_unless($path && is_file(public_path($path)), 404);

        return response()->download(public_path($path), 'Company-Profile.pdf');
    }
}
