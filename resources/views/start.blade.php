@extends('master')


@section('content')
	  <p>Ziehe dir deinen Wochenplan zusammen</p>
	  <div class="flex-middle">
  		@include('dragAndDropLeiste')
      	@include('wochenplan')    
	  </div>   
@endsection