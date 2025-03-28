<x-layout>

  <section class="flex justify-center items-center w-full pt-24">

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 w-fit">
      @foreach ($products as $product)
      <div class="card bg-base-200/50 w-96 shadow-sm">
        {{-- <figure>
          <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
        </figure> --}}
        <div class="card-body">

          <a href="/products/{{$product->id}}">
            <h2 class="card-title">
              {{$product->title}}
              {{-- <div class="badge badge-secondary">NEW</div> --}}
            </h2>
          </a>

          <a href="/products/{{$product->id}}">
            <p>{{$product->description}}</p>
          </a>

          <div class="card-actions justify-end">
            <div class="badge badge-outline">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-eye">
                <path
                  d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                <circle cx="12" cy="12" r="3" />
              </svg>
              {{$product->views}}
            </div>
            <div class="badge badge-outline">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-dollar-sign">
                <line x1="12" x2="12" y1="2" y2="22" />
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
              </svg>
              {{number_format((float)$product->price, 2, '.', ',')}}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </section>

</x-layout>