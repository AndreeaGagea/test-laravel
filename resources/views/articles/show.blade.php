@extends ("layout/main")
@section('content')
<h1>Vizualizare Date Articol</h1>
        <h3>{{$article->title}}</h3>
		<article>
	{{$article->body}}
	</article>
		 <h1>Modificare Articol</h1>
		 {{ Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'PUT')) }}

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
		
    
	
    {!! Form::close() !!}
	<h1>Stergere Articol</h1>
	 {{ Form::model($article, array('route' => array('articles.destroy', $article->id))) }}
	                     {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this article', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
				</div>
				@stop