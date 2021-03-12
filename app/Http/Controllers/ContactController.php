<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use PDF;
use Carbon\Carbon;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['clinic_name'=>'required',
                            'clinic_logo'=>'required',
                            'physician_name'=>'required',
                            'physician_contact'=>'required',
                            'patient_first_name'=>'required',
                            'patient_last_name'=>'required',
                            'patient_dob'=>'required',
                            'patient_contact'=>'required',
                            'chief_complaint'=>'required',
                            'consultation_note'=>'required'
                          ]);
        $contact=new contact(['clinic_name'=>$request->get('clinic_name'),
                              'clinic_logo'=>$request->get('clinic_logo'),
                              'physician_name'=>$request->get('physician_name'),
                              'physician_contact'=>$request->get('physician_contact'),
                              'patient_first_name'=>$request->get('patient_first_name'),
                              'patient_last_name'=>$request->get('patient_last_name'),
                              'patient_dob'=>$request->get('patient_dob'),
                              'patient_contact'=>$request->get('patient_contact'),
                              'chief_complaint'=>$request->get('chief_complaint'),
                              'consultation_note'=>$request->get('consultation_note')
                          ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Consultation saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'clinic_name'=>'required',
            'clinic_logo'=>'required',
            'physician_name'=>'required',
            'physician_contact'=>'required',
            'patient_first_name'=>'required',
            'patient_last_name'=>'required',
            'patient_dob'=>'required',
            'patient_contact'=>'required',
            'chief_complaint'=>'required',
            'consultation_note'=>'required'
        ]);

        $contact = Contact::find($id);
        $contact->clinic_name =  $request->get('clinic_name');
        $contact->clinic_logo = $request->get('clinic_logo');
        $contact->physician_name = $request->get('physician_name');
        $contact->physician_contact = $request->get('physician_contact');
        $contact->patient_first_name = $request->get('patient_first_name');
        $contact->patient_last_name = $request->get('patient_last_name');
        $contact->patient_dob = $request->get('patient_dob');
        $contact->patient_contact = $request->get('patient_contact');
        $contact->chief_complaint = $request->get('chief_complaint');
        $contact->consultation_note = $request->get('consultation_note');
        $contact->save();

        return redirect('/contacts')->with('success', 'Consultation updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $contact = Contact::find($id);
          $contact->delete();

        return redirect('/contacts')->with('success', 'Consultation deleted!');
    }
    public function downloadPdf()
    {
        $contacts=Contact::all();
        $pdf=PDF::loadview('invoicepdf',['contacts'=>$contacts]);
        $pdf->setPaper('L','landscape');
        $current_date_time=Carbon::now();
        return $pdf->download('invoicepdf.pdf');
    }
}
