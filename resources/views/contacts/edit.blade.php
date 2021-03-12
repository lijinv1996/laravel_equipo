@extends('base') 
@section('main')
        <h1 align="center" style="color: #00bfff;">Equipo Health</h1>

        @if ($errors->any())
        <div class="alert alert-danger" align="center">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </div>
        @endif
        <table>
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <table align="center" width="200px" height="700px">
                <tr><td><b>Clinic Name</b></td>
                <td><input type="text" name="clinic_name" value={{ $contact->clinic_name }} ></td>
            </tr>
            <tr><td><b>Clinic Logo</b></td>
                <td><input type="text" name="clinic_logo" value={{ $contact->clinic_logo }} ></td>
            </tr>
            <tr><td><b>Physician Name</b></td>
                <td><input type="text" name="physician_name" value={{ $contact->physician_name }} ></td>
            </tr>
            <tr><td><b>Physician Contact</b></td>
                <td><input type="text" name="physician_contact" value={{ $contact->physician_contact}} ></td>
            </tr>
            <tr><td><b>Patient FirstName</b></td>
                <td><input type="text" name="patient_first_name" value={{ $contact->patient_first_name }} ></td>
            </tr>
            <tr><td><b>Patient LastName</b></td>
                <td><input type="text" name="patient_last_name" value={{ $contact->patient_last_name }} ></td>
            </tr>
            <tr><td><b>Patient Dob</b></td>
                <td><input type="text" name="patient_dob" value={{ $contact->patient_dob }} ></td>
            </tr>
            <tr><td><b>Patient Contact</b></td>
                <td><input type="text" name="patient_contact" value={{ $contact->patient_contact }} ></td>
            </tr>
            <tr><td><b>Chief Complaint</b></td>
                <td><input type="text" name="chief_complaint" value={{ $contact->chief_complaint }} ></td>
            </tr>
            <tr><td><b>Consultation Note</b></td>
                <td><input type="text" name="consultation_note" value={{ $contact->consultation_note }} ></td>
            </tr>
        
            <tr><td><td><button type="submit" class="btn btn-primary">Modify</button></td></td></tr>
            </table>
        </form>
    </table>
@endsection