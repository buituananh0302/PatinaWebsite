<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClContactController extends Controller
{
    public function contact()
    {
        $title = 'Liên Hệ';
        return view('client.pages.contact', compact('title'));
    }

    public function contactDetail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $note = $request->input('note');

        Mail::to('tuanndps27303@fpt.edu.vn')->send(new ContactEmail($name, $email, $note));

        Contact::create([
            'name' => $name,
            'email' => $email,
            'note' => $note,
        ]);

        return redirect()->route('client.home-page')->with('ssmsg', 'Gửi mail thành công, chúng tôi sẽ liên hệ bạn trong ít phút');
    }
}
