@props(['comment'])
<div class="row my-2">
    <div class="col">
        <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3"
                 src="{{'/storage/images/' . $comment->user->image->path}}" alt="avatar" width="45"
                 height="45"/>
            <div class="flex-grow-1 flex-shrink-1">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">
                            {{$comment->user->name}} <span class="small">- {{date('h:i A', strtotime($comment->created_at))}}</span>
                        </p>
                    </div>
                    <p class="small mb-0">
                        {{$comment->text}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
