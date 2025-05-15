<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\DataTables\NewslettersDataTable;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NewslettersDataTable $newslettersDataTable)
    {
        return $newslettersDataTable->render('admin.newsletter.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:255',
            'body' => 'required',
        ]);

        $emails = Newsletter::pluck('email');

        try {

            foreach ($emails as $email) {
                Mail::html($request->body, function ($message) use ($request, $email) {
                    $message->to($email)
                            ->subject($request->subject);
                });
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Unable to send mail try again.');
        }

        return back()->with('success', 'Newsletter sent successfully to all subscribers.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
