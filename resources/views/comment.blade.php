{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('post_id', 'Post_id:') !!}
			{!! Form::text('post_id') !!}
		</li>
		<li>
			{!! Form::label('patient_id', 'Patient_id:') !!}
			{!! Form::text('patient_id') !!}
		</li>
		<li>
			{!! Form::label('doctor_id', 'Doctor_id:') !!}
			{!! Form::text('doctor_id') !!}
		</li>
		<li>
			{!! Form::label('content', 'Content:') !!}
			{!! Form::text('content') !!}
		</li>
		<li>
			{!! Form::label('publish_date', 'Publish_date:') !!}
			{!! Form::text('publish_date') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}