@extends('layouts.app')

@section('content')
    <h1>@lang('users.profile')</h1>

    <hr class="my-4">
    @if(\Session::has('success'))
    <div class="alert alert-success">
        {{\Session::get('success')}}
    </div>
    @endif
    <form action="{{ route('users.update') }}" method="POST">
      @method('PATCH')
      @csrf

      <div class="form-group mb-3 row">
        <label for="name" class="form-label col-sm-2 col-form-label">
          @lang('users.attributes.name')
        </label>

        <div class="col-sm-5">
          <input
              type="text"
              id="name"
              name="name"
              @class(['form-control', 'is-invalid' => $errors->has('name')])
              placeholder="@lang('users.placeholder.name')"
              required
              value="{{ old('name', $user) }}"
          >

          @error('name')
              <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="form-group mb-3 row">
        <label for="email" class="form-label col-sm-2 col-form-label">
          @lang('users.attributes.email')
        </label>

        <div class="col-sm-5">
          <input
              type="text"
              id="email"
              name="email"
              @class(['form-control', 'is-invalid' => $errors->has('email')])
              placeholder="@lang('users.placeholder.email')"
              required
              value="{{ old('email', $user) }}"
          >

          @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="form-group mb-3 offset-sm-2">
        <button type="submit" class="btn btn-primary">

          @lang('forms.actions.save')
        </button>
      </div>
    </form>

  @endsection