@extends ("layout/main")
@section('content')

    <h1>Update Article</h1>
	{!!  Form::model($article,['method'=>'PATCH','url'=>['ArticleController@update',$article->id]])!!}
	  <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
   <div class="form-group">
		{!! Form::label('body','Continut') !!}
         {!! Form::textarea('body',null,['class'=>'form-control']) !!}
		 </div>
   
    <div class="form-group">
        {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
@endsection