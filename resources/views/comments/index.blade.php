@foreach ($comments as $comment)
<article class="flex flex-col py-3 border-t-2 border-ekigreen">
    <h2 class="font-bold">{{ $comment->title }}</h2>
    <p class="text-right">{{ $comment->user->name }}</p>
    <p>{{ $comment->description }}</p>
    @can('update', $comment)
    <div class="text-right">
        <a href="{{ route('comments.edit', [$comment]) }}">Edit
            Comment</a>
    </div>
    @endcan
</article>
@endforeach