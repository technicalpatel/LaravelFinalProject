
@foreach($data as $post)
<h3>Post Name : {{$post->post_name}}</h3>
<p>Post Category : {{$post->post_type}}</p>
<p>Post Date : {{$post->post_date}}</p>
<hr>
	<H5>Comments</H5>
	@foreach($post->cmt as $comment)
	<h4>Name : {{$comment->cmt_name}}</h4>
	<p>{{$comment->cmt_description}}</p>	
	@endforeach

@endforeach


