@extends('admin.layout')
 

@section('title', __('admin.users'))
 

@section('content')

    <div>
        <x-button :href="route('admin.users.create')" class="btn btn-primary">{{ __('admin.create_user') }}</x-button>
    </div>

    <div class="divide-y ">
        @foreach ($users as $user)

        <a href="" class="block p-2 rounded bg-slate-100 hover:bg-slate-200">
            <div class="text-sm">{{ $user->fullname }}</div>
            <div class="text-xs">{{ $user->domain }}</div>
        </a>
            
        @endforeach
    </div>

@endsection
