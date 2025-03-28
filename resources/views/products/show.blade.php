<x-layout>
  <section>
    <div class="hero bg-base-200 min-h-screen">
      <div class="hero-content flex-col lg:flex-row">
        {{-- <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
          class="max-w-sm rounded-lg shadow-2xl" /> --}}
        <div>
          <h1 class="text-5xl font-bold">{{$product->title}}</h1>
          <p class="py-6">
            {{$product->description}}
          </p>
          {{-- <button class="btn btn-primary">Get Started</button> --}}
        </div>
      </div>
    </div>
  </section>
</x-layout>