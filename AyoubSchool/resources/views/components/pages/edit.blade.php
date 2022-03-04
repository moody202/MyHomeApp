<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
        <span><x-next></x-next></span>
        <div class="container">
          product Edit:  {{ $product->name }}
        </div>
        <div class="container">
            <form method="POST"  action="{{ route('products.update', $product->id) }}" >
                @csrf
                <!-- Name input -->
                @method('PUT')
                <div class="form-outline mb-4">

                  <input type="text" name="name" value="{{ $product->name }}" class="form-control" />

                  <label class="form-label" for="form4Example1">{{ __("Name") }}</label>

                </div>

                <div class="form-outline mb-4">
                    <x-input type="text" name="price" value="{{ $product->price }}" class="form-control"/>
                    <x-label class="form-label" for="form4Example">{{ __('Price') }}</x-label>

                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">

                  <input type="text" name="description" value="{{ $product->description }}" class="form-control" />

                  <label class="form-label" for="form4Example2">{{ __('Description') }}</label>

                </div>

                <!-- Submit button -->
                <x-button type="submit">{{ __('Update') }}</x-button>
              </form>
            </div>



</x-slot>
</x-app-layout>
