@extends('layouts.admin')
@section('title',' Comment List')

@section('content')
    <div class="card">
    <div class="card-body">
        <span style="margin:20px; margin-left:395px;" class="col-sm-3">
                  <ol class="breadcrumb " style="margin:20px;">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Comment List</li>
                  </ol>
                  </span>

        <div class="table-responsive">
            <h3>Comment List</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Place
                        </th>
                        <th>
                            Subject
                        </th>
                        <th>
                            Comment
                        </th>
                        <th>
                            Rate
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Show
                        </th>
                        <th>
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach( $comments as $rs)
                  <tr>
                    <td>{{$rs->id}}</td>
                    <td><a href="{{route('admin.place.show',['id'=>$rs->place_id])}}">
                          {{$rs->place->title}}</a>
                     </td>
                    <td>{{$rs->subject}}</td>
                    <td>{{$rs->comment}}</td>
                    <td>{{$rs->rate}}</td>
                    <td>{{$rs->status}}</td>

                    <td>
                    <a href="{{route('admin.comment.show', ['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"
                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100 height=700')">
                            Show
                    </a>
                   </td> 
                    <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>       
                    
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 




@endsection

@section('footer')
    @include('admin._footer')
@endsection
