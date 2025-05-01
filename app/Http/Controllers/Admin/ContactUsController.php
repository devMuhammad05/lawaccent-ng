<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ContactUsDataTable;
use App\DataTables\UnreadContactUsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContactUsDataTable $contactUsDataTable)
    {
        return $contactUsDataTable->render('admin.contact-us.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function unread(UnreadContactUsDataTable $unreadContactUsDataTable)
    {
        return $unreadContactUsDataTable->render('admin.contact-us.unread');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = ContactUs::find($id);

        $contact->markAsRead();

        return view('admin.contact-us.show', [
            'contact' => $contact,
        ]);
    }

    public function markAsRead(ContactUs $contactUs)
    {
        $contactUs->markAsRead();

        flash()->success('Message marked as read successfully');

        return to_route('admin.contact-us.unread');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
