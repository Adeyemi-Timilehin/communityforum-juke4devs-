@extends('layouts.member')
<div class="sidebar-heading border-bottom bg-dark primary">  <img src="{{ 'images/logo.png' }}" alt="" width="80px"></div>
@section('content')

    <div class="row offset-4 mt-5">
        <div class="col-6 primary">
            <form method="post" action="/post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="cat">Category</label>
                        <select name="category" class="form-control" id="cat_id">
                            @foreach ($det as $category)
                                <option value="{{ $category->cat_id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pix">Picture</label>
                    <input id="pix" class="form-control mb-2" type="file" name="post_pix">
                </div>


                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea id="desc" class="form-control mb-2" type="text" name="desc" rows="3"></textarea>
                </div>

                {{-- category select --}}
                <button type="submit" class="btn mainbutton w-100">Post</button>
            </form>
        </div>
    </div>

@endsection
