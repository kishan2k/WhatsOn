{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('category', 'Category:') !!}
			{!! Form::text('category') !!}
		</li>
		<li>
			{!! Form::label('organizer', 'Organizer:') !!}
			{!! Form::text('organizer') !!}
		</li>
		<li>
			{!! Form::label('source', 'Source:') !!}
			{!! Form::text('source') !!}
		</li>
		<li>
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body') !!}
		</li>
		<li>
			{!! Form::label('cost', 'Cost:') !!}
			{!! Form::text('cost') !!}
		</li>
		<li>
			{!! Form::label('addressID', 'AddressID:') !!}
			{!! Form::text('addressID') !!}
		</li>
		<li>
			{!! Form::label('start', 'Start:') !!}
			{!! Form::text('start') !!}
		</li>
		<li>
			{!! Form::label('end', 'End:') !!}
			{!! Form::text('end') !!}
		</li>
		<li>
			{!! Form::label('isVisible', 'IsVisible:') !!}
			{!! Form::text('isVisible') !!}
		</li>
		<li>
			{!! Form::label('isPublic', 'IsPublic:') !!}
			{!! Form::text('isPublic') !!}
		</li>
		<li>
			{!! Form::label('image_url', 'Image_url:') !!}
			{!! Form::text('image_url') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}