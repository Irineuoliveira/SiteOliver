@extends('basepublica')

@section('content')  

<div class="article">
          <h2>Depoimentos de clientes</h2>
        </div>
        
        
				
	@foreach($depoimentos as $dp)
	
	<div class='baixo'>
	<div class='img'>
            <img src='/images/depoimento/{{$dp->foto}}' width='225' height='168' class='depo fl' />
	</div>
		
		<div class='ajuste'>
        <p><font size='2'><b>{{$dp->cliente}}</b></font><br /><br />
        {{$dp->texto}}
        </p>
		</div>
		
        </div>
        <div class='baixo'>
        <br />
        <hr />
        
        </div>
        
	@endforeach		
	{!!$depoimentos->render()  !!}
		
		
			
		
@endsection