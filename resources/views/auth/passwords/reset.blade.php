<x-styles/>

    <div class="flex justify-center items-center">
        <div class="lg:w-1/3 md:2/3 sm:2/4 shadow-2xl m-10  font-medium rounded-xl from-transparent bg-purple-300">

        <div class="text-purple-900 mt-4 text-center lg:text-6xl md:text-5xl sm:text-4xl text-4xl lg:p-4 md:p-2 sm:p-2">{{ __('Reset Password') }}</div>

            <div class="w-full p-4">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="flex flex-row justify-around items-end mb-4">

                        <i class="fa-solid fa-square-envelope lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 mb-2"></i>

                        <div class="mt-2 w-4/5">
                            <input id="email" type="email" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 border border-purple-900 w-full outline-none @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

