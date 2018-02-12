@foreach ($posts as $post)
<div class="panel panel-info">

    <div class="panel-heading">
     {{$post->created_at}}
    </div>
    <div class="panel-body">
    {{$post->content}}
    </div>
    <div class="panel-footer">
 
     <form action="{{action('PostsController@destroy', $post->idPosts)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit" class="btn btn-danger"  >Delete</button>
      </form><br/>
      <form action="{{action('PostsController@edit', $post->idPosts)}}" method="GET">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-info"  >Edit</button>
     </form>
      
    </div>
</div>
@endforeach    