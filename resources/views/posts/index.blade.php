@extends('layouts.app')

@section('content')
    <div class="p-5 m-5">
        <div class="mb-3 rounded p-3 bg-dark d-flex align-items-center justify-content-between">
            <h1 class="text-white h4">@lang('All Posts')</h1>
            <a href="{{ route('post.create') }}" class="btn btn-success">@lang('New Post')</a>
        </div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Categories</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                                class="rounded img-thumbnail" width="100">
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            @foreach ($post->categories as $cat)
                                {{ $cat->title . ',' }}
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
