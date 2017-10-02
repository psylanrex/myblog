<form id="tag-delete-form" action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display: none;">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
</form>