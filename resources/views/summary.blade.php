@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	
        @forelse($students as $student)
          
          
           <div class="col-md-8">
                
                         <div class="card-body">
                         	{{ $student->first_name }}
                         
                 
            
            </div>
        </div>
          @empty
             No Student 

          @endforelse
           

      
    </div>
</div>

@endsection
