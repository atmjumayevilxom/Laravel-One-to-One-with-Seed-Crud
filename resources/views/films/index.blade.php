@extends('films.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>One One</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('films.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Director</th>
            <th>Film</th>

           
            <th width="280px">Action</th>
        </tr>
        @foreach ($film as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->director['name'] }}</td>
            <td>{{ $value->name }}</td>
            
            <form action="{{ route('films.destroy',$value->id) }}" method="POST">    
            <td>
                    <a class="btn btn-info" href="{{ route('films.show', $value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('films.edit',$value->id) }}">Edit</a>
                     
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $film->links() !!}      
@endsection