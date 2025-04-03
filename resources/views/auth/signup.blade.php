<x-root-layout>
  <main class="h-screen w-screen flex justify-center items-center">

    <div class="card bg-base-100 w-[500px] shrink-0 shadow-2xl">
      <div class="card-body">
        <h1 class="text-center text-3xl font-semibold">Register</h1>
        <form class="fieldset" method="POST" action="{{route('signup.action')}}">
          @csrf
          @method('POST')

          <div>
            <label class="fieldset-label">Username</label>
            <input name="name" type="text" class="input w-full" placeholder="Username" value="{{old('name')}}" />
            @error('name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
          </div>

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

          <div>
            <label class="fieldset-label">Password Confirmation</label>
            <input name="password_confirmation" type="password" class="input w-full" placeholder="Password Confirmation"
              value="{{old('password_confirmation')}}" />
            @error('password_confirmation')
            <p class="text-red-500">{{$message}}</p>
            @enderror
          </div>


          <button type="submit" class="btn btn-neutral mt-4">Register</button>

        </form>

        <p class="text-center text-sm font-normal">Have an account ? <a href="{{route('login.view')}}"
            class="text-blue-500">Log in</a></p>
      </div>
    </div>

  </main>

</x-root-layout>