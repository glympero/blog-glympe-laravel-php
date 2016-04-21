@extends("layouts.admin-master")

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/form.css') }}" type="text/css" />

@endsection

@section('content')
    <div class="row medium-8 large-7 columns">
        @include('includes.info-box')
        <form action="{{ route('admin.blog.post.update') }}" method="post">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" {{ $errors->has('title') ? 'class=has-error' : '' }} value="{{ Request::old('title') ? Request::old('title') : isset($post) ? $post->title : ''   }}" />
            </div>
            <div class="input-group">
                <label for="author">Author</label>
                <input type="author" name="author" id="author" {{ $errors->has('author') ? 'class=has-error' : '' }} value="{{ Request::old('author') ? Request::old('author') : isset($post) ? $post->author : ''   }}" />
            </div>
            <div class="input-group">
                <label for="category_select">Add Categories</label>
                <select name="category_select" id="category_select">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    
                </select>
                <button type="button" class="btn">Add Category</button>
                <div class="added-categories">
                    <ul>
                         @foreach($post_categories as $post_category)
                            <li><a href="#" data-id="{{ $post_category->id }}">{{ $post_category->name }}</a></li>
                         @endforeach
                    </ul>
                </div>
                <input type="hidden" name="categories" id="categories" value="{{ implode(',', $post_categories_ids) }}">
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="12" {{ $errors->has('body') ? 'class=has-error' : '' }}>{{ Request::old('body') ? Request::old('body') : isset($post) ? $post->body : ''   }}</textarea>
            </div>
            
            <input type="submit" value="Save Post" class="btn" />
            
            <input type="hidden" value="{{ Session::token() }}" name="_token" />
            <input type="hidden" value="{{ $post->id }}" name="post_id" />
        </form>
   </div>
   
   
  
    <script type="text/javascript" src="{{ URL::secure('src/js/posts.js') }}"></script>
    
@endsection