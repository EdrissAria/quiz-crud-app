<x-styles/>

<div class="flex justify-center items-center">
        <div class="lg:w-1/3 md:2/3 sm:2/4 shadow-2xl m-10  font-medium rounded-xl from-transparent bg-purple-300">
            <div class="text-purple-900 mt-4 text-center lg:text-6xl md:text-5xl sm:text-4xl text-4xl lg:p-4 md:p-2 sm:p-2">{{ __('REGISTER') }}</div>
                <div class="w-full p-4">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-row justify-around items-end">
                            <i class="fas fa-user lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 {{ $errors->has('name')? 'mb-8': 'mb-1' }}"></i>
                            <div class="mt-2 w-4/5">
                                <input id="name" type="text"  name="name" placeholder="username" value="{{ old('name') }}" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 {{ $errors->has('name') ? ' border-2 border-red-400': 'border border-purple-900' }}  w-full outline-none" >
                                @error('name')
                                    <span class="text-red-600 text-center" role="alert">
                                        <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-row justify-around items-end">
                            <i class="fas fa-envelope-square lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 {{ $errors->has('email')? 'mb-8': 'mb-1' }}"></i>
                            <div class="mt-2 w-4/5">
                                <input type="email"  name="email" placeholder="E-Mail" value="{{ old('email') }}" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 {{ $errors->has('email') ? ' border-2 border-red-400': 'border border-purple-900' }}  w-full outline-none" >
                                @error('email')
                                    <span class="text-red-600 text-center" role="alert">
                                        <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-row justify-around items-end">
                            <i class="fab fa-github lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 {{ $errors->has('github')? 'mb-8': 'mb-1' }}"></i>
                            <div class="mt-2 w-4/5">
                                <input type="text"  name="github" placeholder="Git Hub" value="{{ old('github') }}" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 {{ $errors->has('github') ? ' border-2 border-red-400': 'border border-purple-900' }}  w-full outline-none" >
                                @error('github')
                                    <span class="text-red-600 text-center" role="alert">
                                        <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-row justify-around items-end">
                            <i class="fas fa-image lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 {{ $errors->has('photo')? 'mb-8': 'mb-1' }}"></i>
                            <div class="mt-2 w-4/5">
                                <input type="file" name="photo" placeholder="photo" value="{{ old('photo') }}" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 {{ $errors->has('photo') ? ' border-2 border-red-400': 'border border-purple-900' }}  w-full outline-none" >
                                @error('photo')
                                    <span class="text-red-600 text-center" role="alert">
                                        <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-row justify-around items-end">
                            <i class="fas fa-lock lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 {{ $errors->has('password')? 'mb-8': 'mb-1' }}"></i>
                            <div class="mt-2 w-4/5">
                                <input type="password"  name="password" placeholder="password" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 {{ $errors->has('password') ? ' border-2 border-red-400': 'border border-purple-900' }}  w-full outline-none" >
                                @error('password')
                                    <span class="text-red-600 text-center" role="alert">
                                        <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-row justify-around items-end">
                            <i class="fas fa-lock lg:text-3xl md:text-3xl sm:text-2xl text-2xl text-purple-800 {{ $errors->has('confirm')? 'mb-8': 'mb-1' }}"></i>
                            <div class="mt-2 w-4/5">
                                <input type="password" name="password_confirmation"   placeholder="confirm" class="text-purple-900 text-2xl rounded-xl px-4 py-2 focus:bg-purple-100 {{ $errors->has('confirm') ? ' border-2 border-red-400': 'border border-purple-900' }}  w-full outline-none" >
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center items-center flex-col">
                            <button type="submit" class="px-12 py-2 border border-purple-800 bg-purple-900 rounded-3xl lg:text-2xl md:text-2xl sm:text-xl text-xl text-white hover:bg-purple-700 duration-500">
                                {{ __('Register') }}
                            </button>
                            <a href="{{route('login')}}" class="mt-4 text-lg text-blue-500 underline">already have an acount</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
