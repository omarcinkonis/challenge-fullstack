@props(['comments'])

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            {{-- last 4 comments --}}
            <div class="card-header pb-0">
                <div class="mb-3">
{{--                    {{$earlierComments}} earlier comments--}}
                </div>
                @foreach ($comments as $comment)
                    <x-comment :comment="$comment"/>
                @endforeach
            </div>

            <div class="card-body">
                {{-- require login to comment --}}
                @if (Auth::guest())
                    <div class="text-center">Please login or register to comment.</div>
                @else
                    {{-- post comment: validation errors --}}
                    @if ($errors->any())
                        <div class="text-danger">
                            {{ __('Something went wrong.') }}
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- comment form for logged in users --}}
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        {{ method_field('POST') }}

                        <div class="form-group mb-1">
                            <textarea name="comment" placeholder="Add a comment" class="w-100"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
