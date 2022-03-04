<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        <div class="container">
        @if($message = Session::get('product'))
            <div class="alert alert-primary" role="alert">
              {{$message}}
              </div>
              @endif
        </div>


    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('Name') }}</th>
                <th scope="col">{{ __('Price') }}</th>
                <th scope="col">{{ __('Description') }}</th>
                <th scope="col">{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                @foreach ($product as $item )
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="{{ route('products.edit',  $item->id) }}"><x-button>Edit</x-button></a>
                        <a href="{{ route('softDelete',  $item->id) }}"><x-button>softDelete</x-button></a>
                        <a href="{{ route('products.show', $item->id) }}"><x-button class="btn btn-success">Show</x-button></a>
                        <form action="{{ route('products.destroy', $item->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <x-button  class="btn btn-danger">Delete</x-button>
                        </form>
                </div>
            </td>
                  </tr>
                @endforeach



            </tbody>
          </table>
        </x-slot>
</x-app-layout>
