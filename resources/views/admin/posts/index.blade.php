@extends('layouts.admin')

@section('content')

    @if (Session::has('deleted_user'))

        <div class="alert alert-danger">{{ Session('deleted_user') }}</div>

    @endif
    <h1>Post</h1>
    <table class="table table-condensed">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
        @if ($posts)

            @foreach ($posts as $post)

                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img height="50" width="50" src="{{$post->photo ? $post->photo->file : '/images/empty.png'}}" alt=""></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category_id}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>

@endsection

@section('footer')

@endsection
