<div class="row h-100 g-3 ">




    @forelse($this->comments->reverse() as $comment)
        <div class="row justify-contnet-between gx-2 align-items-center pt-3 border-bottom pb-3">
            <div class="col col-auto">
                <div class="avatar avatar-m status-online ">
                    <img class="rounded-circle " src="{{ $comment->user->avatar }}" alt="">
                </div>
            </div>
            <div class="col col-auto flex-1">
                <p class="fs--1 text-800 mb-0"><span class="fw-semi-bold">{{$comment->user->name}} </span>commented</p>
            </div>
            <div class="col-12 col-sm-auto order-1 order-sm-0">
                <p class="text-800 fw-semi-bold fs--2 mb-0">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
            <div class="mb-2 mt-2">
                <p class="text-900 fs--1 mb-0">{{ $comment->comment }}</p>
            </div>
        </div>
    @empty
        <div class="text-center text-gray-500">
            <span> No Comments Posted</span>
        </div>
    @endforelse


    {{-- @auth --}}
        <div class="mt-4">
            <textarea wire:model="comment" class="form-control form-control mb-3" rows="3" placeholder="Add comment"></textarea>
            <div class="d-flex flex-between-center" style="flex-direction: row-reverse;">
                <div class="d-flex">
                    <button wire:click="postComment" class="btn btn-sm btn-primary px-6">Comment</button>
                </div>
            </div>
        </div>
        
    {{-- @else --}}
        {{-- <a wire:navigate class="py-1 text-yellow-500 underline" href="{{ route('login') }}"> Login to Post Comments</a> --}}
    {{-- @endauth --}}


    <div class="mt-2">
        {{ $this->comments->links() }}
    </div>

</div>
