{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('address1', 'Address1:') !!}
			{!! Form::text('address1') !!}
		</li>
		<li>
			{!! Form::label('address2', 'Address2:') !!}
			{!! Form::text('address2') !!}
		</li>
		<li>
			{!! Form::label('address3', 'Address3:') !!}
			{!! Form::text('address3') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('county', 'County:') !!}
			{!! Form::text('county') !!}
		</li>
		<li>
			{!! Form::label('postcode', 'Postcode:') !!}
			{!! Form::text('postcode') !!}
		</li>
		<li>
			{!! Form::label('region', 'Region:') !!}
			{!! Form::text('region') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('lat', 'Lat:') !!}
			{!! Form::text('lat') !!}
		</li>
		<li>
			{!! Form::label('long', 'Long:') !!}
			{!! Form::text('long') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}