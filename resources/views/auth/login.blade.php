<x-root-layout>
  <main class="h-screen w-screen flex justify-center items-center">

    <div class="card bg-base-100 w-[500px] shrink-0 shadow-2xl">
      <div class="card-body">
        <h1 class="text-center text-3xl font-semibold">Login</h1>
        <form class="fieldset" method="POST" action="{{route('login.action')}}">

          @csrf
          @method('POST')

          <div>
            <label class="fieldset-label">Email</label>
            <input name="email" type="email" class="input w-full" placeholder="Email" value="{{old('email')}}" />
            @error('email')
            <p class="text-red-500">{{$message}}</p>
            @enderror
          </div>

          <div>
            <label class="fieldset-label">Password</label>
            <input name="password" type="password" class="input w-full" placeholder="Password"
              value="{{old('password')}}" />
            @error('password')
            <p class="text-red-500">{{$message}}</p>
            @enderror
          </div>


          <button type="submit" class="btn btn-neutral mt-4">Login</button>
        </form>

        {{-- Errors Displaying --}}
        @if ($errors->any())
        @foreach ($errors->all() as $err)
        <p class="text-red-500 text-sm">{{$err}}</p></br>
        @endforeach
        @endif

        <p class="text-center text-sm font-normal">Don't have an account ? <a href="{{route('signup.view')}}"
            class="text-blue-500">Sign up</a></p>
      </div>
    </div>

  </main>

</x-root-layout>