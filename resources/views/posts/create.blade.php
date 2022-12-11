@extends('layouts.app')

@section('content')
    <div class="p-5 m-5">
        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label>@lang('Post Title')</label>
                <input type="text" name="title" class="form-control" placeholder="@lang('Post Title')">
            </div>

            <div class="form-group mb-3">
                <label>@lang('Select Category or Categories')</label>
                <select class="form-control" name="categories[]" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label>@lang('Post Description')</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>

            <div class="form-group mb-3">
                <label>@lang('Select Image')</label>
                <input type="file" name="image" class="form-control-file d-block">
            </div>

            <div class="d-flex gap-3">
                <a href="/" class="btn btn-dark">@lang('Back')</a>
                <button type="submit" class="btn btn-primary">@lang('Save')</button>
            </div>
        </form>
    </div>
@endsection
