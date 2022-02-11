<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\DocumentReview;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class DocumentReviewController extends Controller
{
    public function viewAll(){      

        $documents = DB::table('document_reviews')->latest()->paginate(4);

        return view('managereports.all-document-review', compact('documents'));
    }

    public function create(){
        return view('forms.documentreview.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'document_name' => 'required|min:5',
            'document_file' => 'required|mimes:pdf, doc, docx',
        ],
        [
            'document_name.required' => "Please insert document name.",
            'document_name.min' => "Document name must be at least five characters.",
        ]);

        $document_name = $request->document_name;
        $document_file = $request->file('document_file');
        $name_generator = hexdec(uniqid());
        $file_ext = $document_file->getClientOriginalExtension();
        $file_name = date('YmdHi'). '_' .$document_name. '.' .$file_ext;
        $location = 'form/document-review/';
        $file_path = $location.$file_name;
        $document_file->move($location,$file_name);


        DocumentReview::insert([
            'document_name' => $document_name,
            'document_file' => $file_path,
            'pic' => Auth::user()->id,
            'received_date' => Carbon::now(),
            'status' => "Pending"
        ]);

        return redirect()->route('dashboard');

    }

    public function viewDocumentDetails($id){

        $document = DocumentReview::findOrFail($id);

        return view('managereports.view-document-details', compact('document'));
    }

    public function pdf($id) {
        $document = DocumentReview::find($id);
        $pdf = PDF::loadView('forms/documentreview/pdf', compact('document'));
        
        return $pdf->download('document_review.pdf');
    }
}
