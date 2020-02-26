@extends ("layout/main")
@section('content')
        <h1>Articles<h1/>
		@foreach($articles as $article)
		<h2>
		 <a href="{{url('/articles',$article->id)}}">{{$article->title}}</a>
		 <a href="{{ url('/articles',$article->id)}}" >Update</a> 
		   <a href="{{url('/articles',$article->id)}}"class="btn btn-warning">Delete</a>
		
		 
	  
		 
	
		 </h2>
<article>
{{$article->body}}
{{$article->resumat}}


<article>
		@endforeach
		 <a href="{{url('/articles/create')}}">Insert</a>

    <hr>

    {!! Form::open() !!}
     
    {!! Form::close() !!}

	@stop