<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\DataTables\NewslettersDataTable;
use Illuminate\Support\Facades\Response;

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


    public function export()
    {
        $date = Carbon::now()->format('Y-m-d');
        $fileName = "Newsletter-{$date}.csv";

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename={$fileName}",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $columns = ['ID', 'Email', 'Signed Up At'];
        $newsletters = Newsletter::all();

        $callback = function () use ($newsletters, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($newsletters as $newsletter) {
                fputcsv($file, [
                    $newsletter->id,
                    $newsletter->email,
                    $newsletter->created_at->format('Y-m-d')
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
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
