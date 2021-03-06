@php

$label = "Notes";
$post = \ABetter\Wordpress\Post::$post;
$url = "/wp/wp-admin/post.php?post={$post->ID}&action=edit";
$link = "Add Note";

$notes = ($f = _wp_field('dev_mockup_notes',$post)) ? $f : "";

@endphp
<section class="inspector--section inspector--notes" {{($notes)?'':'empty'}}>
	<label><a href="{{$url}}" target="_blank">{{ $label }}</a></label>
	<article>
		<p pre>{{ $notes }}</p>
		<a href="{{$url}}" target="_blank"><i class="fa fa-pen"></i></a>
	</article>
	@if(empty($notes))
	<nav><a href="{{$url}}" target="_blank"><i class="fa fa-plus"></i>{{ $link }}</a></nav>
	@endif
</section>
