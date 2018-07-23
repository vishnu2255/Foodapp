@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{ $post->title }}</p>
                    <p>
                        {{ $post->body }}
                    </p>

                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="/comment/store">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection