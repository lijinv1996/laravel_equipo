@extends('base')

@section('main')
  <table>
    
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
     
         @if ($errors->any())
      <div align="center" class="alert alert-danger">
        
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        
      </div>
    @endif
         <table border="0" width="90%" height="400px" align="center">
       <tr>
          <td align="Center"><b>Clinic Name</b></td>
          <td align="Center"><input type="text" name="clinic_name"></td>
          <td align="center"><b>Clinic Logo</b>
          <td align="center"><input type="text" name="clinic_logo"></td></td>
         </tr>
         
        <tr><td align="center"><b>Physician Name</b>
          <td align="center"><input type="text" name="physician_name">
          <td align="center"><b>Physician Contact</b>
          <td align="center"><input type="text" name="physician_contact"></td></td></td></td></tr>
         
         <tr><td align="center"><b>Patient First Name</b>
          <td align="center"><input type="text" name="patient_first_name">
          <td align="center"><b>Patient Last Name</b>
          <td align="center"><input type="text" name="patient_last_name"></td></td></td></td></tr>
         
         <tr><td align="center"><b>Patient Dob</b>
          <td align="center"><input type="text" name="patient_dob">
          <td align="center"><b>Patient Contact</b>
          <td align="center"><input type="text" name="patient_contact"></td></td></td></td></tr>
        
        </table>
         <table border="0" width="100%">
         <tr><td><b>Chief Complaint</b>
          <td><td><td><td><td align="center"><b>Max 5000 characters allowed</b></td></td></td></td></td></tr>
         <tr><td><input type="text" name="chief_complaint" style="height: 100px;width: 387%"></td></tr>
          
         <tr><td><b>Consultation Note</b>
          <td><td><td><td><td align="center"><b>Max 5000 characters allowed</b></td></td></td></td></td></tr>
          <tr><td><input type="text" name="consultation_note" style="height:100px;width: 387%"></td></tr>
        
         <tr><td align="center">
          <td><br><input type="submit" name="btnsubmit" value="Generate Report" class="btn btn-primary">
          <td><td align="center"><br><a href="http://localhost/laravel_equipo/public/contacts/"> View Previous Consultations</a></td></td></td></td></tr>

       </table>
     </table>
      </form>
    </table>
 
@endsection