<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
        <div class="container">
          product Show:  {{ $product->name }}
        </div>

<br>
        <div class="container">

                <div class="form-outline mb-4">

                  <label class="form-label"  value="" for="form4Example1"><x-button>{{ __('Name') }}</x-button> : {{ $product->name }}</label>

                </div>

                <div class="form-outline mb-4">

                    <x-label class="form-label" for="form4Example"><x-button>{{ __('price') }}</x-button> : {{ $product->price }}</x-label>

                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">



                  <label class="form-label" for="form4Example2"><x-button>{{ __('Description') }}</x-button> : {{ $product->description }}</label>

                </div>


            </div>

            <div class="container">
                <x-next></x-next>
            </div>


</x-slot>
</x-app-layout>
