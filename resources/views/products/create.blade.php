<x-layout>
  <main class="w-screen h-screen flex justify-center items-center bg-gray-100">
    <section class="w-full sm:w-1/2 md:w-1/3 bg-white p-8 rounded-xl shadow-md">
      <div class="mb-6 text-center">
        <h1 class="text-3xl font-semibold text-gray-800">Create New Product</h1>
      </div>

      <form class="space-y-6" method="POST" action="{{ route('products.store.action') }}">
        @csrf
        @method('POST')
        {{-- Title Field --}}
        <div>
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input name="title" type="text" id="title"
            class="input w-full bg-transparent border-gray-300 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
            placeholder="Product Title" value="{{old('title')}}" />
          @error('title')
          <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
        </div>

        {{-- Description Field --}}
        <div>
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea name="description" id="description" rows="6"
            class="textarea w-full bg-transparent border-gray-300 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
            placeholder="Product Description" value="{{old('description')}}"></textarea>
          @error('description')
          <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
        </div>

        {{-- Price Field --}}
        <div>
          <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
          <input name="price" type="decimal" id="price"
            class="input w-full bg-transparent border-gray-300 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
            placeholder="Product Price" value="{{old('price')}}" />
          @error('price')
          <p class="text-red-500 text-sm">{{$message}}</p>
          @enderror
        </div>

        <div class="flex justify-center">
          <button type="submit" class="btn btn-neutral w-full mt-4 text-lg">Create Product</button>
        </div>
      </form>
    </section>
  </main>
</x-layout>