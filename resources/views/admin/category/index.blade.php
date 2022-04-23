@extends('layouts.admin')
@section('title','Category List')

@section('content')
 <div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="{{route('admin_category')}}" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Category</a>

        </button>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                           Keywords
                        </th>
                        <th>
                           Decription
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                        <th>
                            Show
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach( $data as $rs)
                  <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>{{$rs->description}}</td>
                    <td>{{$rs->image}}</td>
                    <td>{{$rs->status}}</td>
                    <td><a href="/admin/category/edit{{$rs->id}}/" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td><a href="/admin/category/delete{{$rs->id}}/" class="btn btn-block btn-danger btn-sm">Delete</a></td> 
                    <td><a href="/admin/category/show{{$rs->id}}/"class="btn btn-block btn-success btn-sm">Show</a></td> 
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
