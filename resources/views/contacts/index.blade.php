@extends('base')

@section('main')

  

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

<table>
    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New Consultation</a>
    <a style="margin: 19px;" href="{{URL::to('downloadPdf')}}" class="btn btn-success">Download PDF</a>
    </table> 

    <h1>CONSULTATIONS</h1>    
  <table border="0" width="120%" height="90px">
        <tr>
          <td><b>ID</b></td>
          <td><b>Clinic Name</b></td>
          <td><b>Clinic Logo</b></td>
          <td><b>Physician Name</b></td>
          <td><b>Physician Contact</b></td>
          <td><b>Patient FirstName</b></td>
          <td><b>Patient LastName</b></td>
          <td><b>Patient Dob</b></td>
          <td><b>Patient Contact</b></td>
          <td><b>Chief Complaint</b></td>
          <td><b>Consultation Note</b></td>
        </tr>
    
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->clinic_name}}</td>
            <td>{{$contact->clinic_logo}}</td>
            <td>{{$contact->physician_name}}</td>
            <td>{{$contact->physician_contact}}</td>
            <td>{{$contact->patient_first_name}}</td>
            <td>{{$contact->patient_last_name}}</td>
            <td>{{$contact->patient_dob}}</td>
            <td>{{$contact->patient_contact}}</td>
            <td>{{$contact->chief_complaint}}</td>
            <td>{{$contact->consultation_note}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Modify</a>
            </td>
            <td>
                <form method="post" action="{{ route('contacts.destroy', $contact->id)}}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    
  </table>
@endsection