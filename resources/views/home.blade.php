@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/store') }}">
      {{csrf_field()}}
        <div class="modal-header">
          <h4 class="modal-title">Add Post</h4>
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        @endif
        </div>
        <div class="modal-body"> 
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
         
        </div>
        <div class="modal-footer">
          <a href="{{ url('/') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
         
          <input type="submit" class="btn btn-success" value="submit">
        </div>
      </form>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped table-hover">
      <thead>
<tr>
<th>ID</th>

<th>Description</th>


	</tr>
	</thead>
	<tbody>

	@foreach($tests as $test)

	<tr>
            
        <td>{{ $test->id }}</td>
        <td>{{ $test->description }}</td>


        </tr>
       






        @endforeach
  
        
      </tbody>
    </table>
@endsection
