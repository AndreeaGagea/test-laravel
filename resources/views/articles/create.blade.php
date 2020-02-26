@extends ("layout/main")
@section('content')
 		  <h1>Add a new Entry</h1>

    <hr>

    {!! Form::open(['url'=>'articles']) !!}
	<div class="form-group">
	{!! Form::label('title','Titlu') !!}
         {!! Form::text('title',null,['class'=>'form-control']) !!}
		 </div>
		 <div class="form-group">
	{!! Form::label('body','Continut') !!}
         {!! Form::textarea('body',null,['class'=>'form-control']) !!}
		 </div>
		 {!! Form::submit('Posteaza articol',['class'=>'form-control btn btn-success']) !!}
    {!! Form::close() !!}
     @stop