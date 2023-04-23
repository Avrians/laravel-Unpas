@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye" class="align-text-bottom bg-info rounded"></span></a>
            <a href="#"><span data-feather="edit" class="align-text-bottom bg-warning rounded"></span></a>
            <a href=""><span data-feather="x-circle" class="align-text-bottom bg-danger rounded"></span></a>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection