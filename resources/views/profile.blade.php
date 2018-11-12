@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
      

            <h2>{{ $user->name }}'s Profile </h2>

             <img src="/uploads/avatars/{{$user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50px; margin-right:25px;">
                                     
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label> Update Passport </label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token () }}">
                <input type="submit" class= "pull-right btn btn-sm btn-primary">
              </form>

      


        </div>
    </div>
</div>
@endsection
