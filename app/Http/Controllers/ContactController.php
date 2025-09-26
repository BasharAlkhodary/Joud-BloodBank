<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm() {
    return view('contact');
}
 // عرض الرسائل مع تصنيف وباجينيت
    public function showMessages(Request $request)
    {
        $query = Contact::query();

        // بحث باسم المرسل أو البريد
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%");
        }

        // ترتيب حسب التاريخ
        $messages = $query->orderBy('created_at')->paginate(5);

        return view('bloodBank.messages', compact('messages'));
    }

    // تحديث حالة الرسالة إلى مقروء
    public function markRead($id)
    {
        $message = Contact::findOrFail($id);
        $message->status = 'read';
        $message->save();

        return response()->json(['success' => true]);
    }

     // حذف رسالة
    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return response()->json(['success' => true]);
    }


public function submitForm(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phoneNumber' => 'required|string|regex:/^05[0-9]{8}$/',
        ]);

        Contact::create($request->all());

        // return redirect()->back()->with('success', 'Thank you for contacting us. We will review your message soon.');
        return response()->json(['success' => true]);
}


}
