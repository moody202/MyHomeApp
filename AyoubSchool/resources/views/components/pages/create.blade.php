        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('create') }}
                </h2>
                <span><x-next></x-next></span>

                <div class="container">
                    <form method="POST"  action="{{ route('products.store') }}" >
                        @csrf
                        <!-- Name input -->

                        <div class="form-outline mb-4">

                          <input type="text" name="name" class="form-control" />

                          <label class="form-label" for="form4Example1">name</label>

                        </div>

                        <div class="form-outline mb-4">
                            <x-input type="text" name="price" class="form-control"/>
                            <x-label class="form-label" for="form4Example">price</x-label>

                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">

                          <input type="text" name="description" class="form-control" />

                          <label class="form-label" for="form4Example2">description</label>

                        </div>

                        <!-- Submit button -->
                        <x-button type="submit">Seve</x-button>
                      </form>
                    </div>


    </x-slot>
</x-app-layout>
