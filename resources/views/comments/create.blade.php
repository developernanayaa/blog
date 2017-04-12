<form action="/article/{{$article->id}}/comment" METHOD="POST">
    {{csrf_field()}}
    <hr>
    <h3>Leave a reply</h3>
    <div class="form-group">
        <label for="body">Comment</label>
        @if ($errors->has('body'))
            <span class="help-block text-center">
                        <strong class="text-danger">{{ $errors->first('body') }}Error test</strong>
                    </span>
        @endif
        <input type="text" class="form-control" name="body" id="body">
        <input type="hidden" name="article_id" id="article_id" value="{{$article->id}}">
    </div>
    <div class="form-group">
        <button class="btn btn-primary text-center" type="submit">Submit</button>
    </div>
</form>