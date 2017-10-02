<form id="post-delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: none;">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
</form>