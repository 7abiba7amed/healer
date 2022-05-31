{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('doctor_id', 'Doctor_id:') !!}
			{!! Form::text('doctor_id') !!}
		</li>
		<li>
			{!! Form::label('patient_id', 'Patient_id:') !!}
			{!! Form::text('patient_id') !!}
		</li>
		<li>
			{!! Form::label('date_time', 'Date_time:') !!}
			{!! Form::text('date_time') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}