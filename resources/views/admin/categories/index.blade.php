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
            <th>name</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
        @if ($categories)

            @foreach ($categories as $category)

                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->diffForHumans() }}</td>
                    <td>{{ $category->updated_at->diffForHumans() }}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>

@endsection

@section('footer')

@endsection
