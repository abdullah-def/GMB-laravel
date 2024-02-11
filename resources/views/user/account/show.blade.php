
  <div class="row mb-4">
    <div class="col-md-12">
      
        <h2 class="card-title mb-0">{{ $user->name }}</h2>
        <small class="card-subtitle mb-2 text-body-secondary">{{ $user->email }}</small>

       

        @profile($user)
          <a href="{{ route('users.edit') }}" class="btn btn-primary btn-sm float-end">
            @lang('users.edit')
          </a>
        @endprofile

    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h2>@lang('comments.last_comments')</h2>

      <div class="space-y-3">
      </div>
    </div>

    <div class="col-md-6">
      <h2>@lang('posts.last_posts')</h2>

      <div class="space-y-3">
        
      </div>
    </div>
  </div>

