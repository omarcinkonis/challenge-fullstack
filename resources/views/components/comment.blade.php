@props(['comment'])
<div class="row">
    <div class="col">
        <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3"
                 src="" alt="avatar" width="65"
                 height="65"/>
            <div class="flex-grow-1 flex-shrink-1">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">
                            Author name <span class="small">- 2 hours ago</span>
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
