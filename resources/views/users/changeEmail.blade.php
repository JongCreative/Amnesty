
        <div class="header">Change email</div>  
        <form method="POST" action="/dashboard/email">
            @csrf
            @method('PATCH')

            <label for="email"> Current email: {{ Auth::user()->email }} </label>
            <label for="email"> email </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required >

            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

            <label for="currentPassword"> Password </label>

            <input id="currentPassword" type="password" name="currentPassword" required>

            @if (session('error')) 
                <div class="">
                    {{ session('error') }}
                </div>
             @endif


            <input type="submit" value="Change email">

            <a href="/dashboard" class="button?"> Back </a>
        </form>