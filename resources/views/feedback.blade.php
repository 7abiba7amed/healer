{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('patient_id', 'Patient_id:') !!}
			{!! Form::text('patient_id') !!}
		</li>
		<li>
			{!! Form::label('doctor_id', 'Doctor_id:') !!}
			{!! Form::text('doctor_id') !!}
		</li>
		<li>
			{!! Form::label('rate', 'Rate:') !!}
			{!! Form::text('rate') !!}
		</li>
		<li>
			{!! Form::label('content', 'Content:') !!}
			{!! Form::text('content') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}