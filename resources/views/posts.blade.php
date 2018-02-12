@include('header')

    <form action="{{ route('posts.store')}}" method="POST">
        {{ csrf_field() }}
        <textarea name="postContent" class="form-control " placeholder="what are you thinking now ... " rows="5"></textarea>
        <button type="submit" class="btn btn-info ">Post</button>
    </form><br/>


 
 
 

<div id="postsContainer">
@include('displayPosts')
</div>


@include('footer')