<x-app-layout>
    <x-slot name="header">
        <div class="container">
            @php
                $i=0;
            @endphp
            @foreach ($contact as $item )
            <x-button>Post " <span>{{ ++$i }}</span>"</x-button>
        <div class="card" style="width: 18rem;">
           <span>{{ $item->photo }}</span>
            <img src="{{ url('$item->photo') }}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{ __('Name') }} : <span>{{ $item->name }}</span> </h5>
              <p class="card-text">{{ __('post') }} : <span>{{ $item->post }}</span></p>
              <p>{{ date('Y-m-d') }}</p>
            </div>
          </div>
          {{-- @php
            $i=0;
        @endphp
        @foreach ($contact as $item )
        <span>{{ ++$i }}</span>
        <span></span>
        <span>{{ $item->post }}</span> --}}
        @endforeach
        <x-button> <a href="{{ route('posts.create') }}" class="btn btn-primary">{{ __('Create New Post') }}</a></x-button>
        </div>
    </x-slot>
</x-app-layout>
