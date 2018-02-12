@include('header');


<form action="{{action('PostsController@update' , $mypost->idPosts)}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH" />
    <textarea name="postContent" class="form-control" rows="3">{{$mypost->content}}</textarea>
    <button type="submit" class="btn btn-info">Save</button>


</form>



@include('footer');