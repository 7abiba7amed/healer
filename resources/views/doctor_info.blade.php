{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('doctor_id', 'Doctor_id:') !!}
			{!! Form::text('doctor_id') !!}
		</li>
		<li>
			{!! Form::label('info', 'Info:') !!}
			{!! Form::text('info') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}