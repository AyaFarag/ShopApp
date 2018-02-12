function search() 
    {
         $("#postsContainer").load("/find?keyword=" + $("#key").val() );
    }