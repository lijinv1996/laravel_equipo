<!DOCTYPE html>
<html>
<head>
	<title>Convert to PDF</title>
	<style type="text/css">
		table{
			width: 100%;
			margin: 0 auto;
			border: 1px solid;
		}
		.pagenum:before{
			content: counter(page);
		}
	</style>
</head>
<body>
  <table>
  	<caption><h1 style="color: #00bfff;">Equipo Health</h1></caption>
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
        @foreach($contacts as $key => $contact)
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
          </tr>
         @endforeach
            
            
           <p>Report Generated On:
           	<?php 
           	   echo(strftime("%d.%m.%Y %H:%M"));
               $host=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
               echo " $host";
            ?></p>
           
            <div class="pagenum" align="center" style="margin: 20px;"></div>
            
  </table>
</body>
</html>