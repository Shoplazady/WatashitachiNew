@extends('master')

@section('head')
<!-- Additional head content specific to this page -->
@endsection

@section('content')
@include('navbar')
<div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5 dark:bg-gray-800">
    
    <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
        <div class="flex items-center justify-center w-full lg:p-12">
            <div class="flex items-center xl:p-10">
                <form class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl dark:bg-gray-900">
                    <h3 class="mb-3 text-4xl font-extrabold text-dark-grey-900 dark:text-white">Sign In</h3>
                    <p class="mb-4 text-grey-700 dark:text-gray-400">Enter your email and password</p>
                    <a
                        class="flex items-center justify-center w-full py-4 mb-6 text-sm font-medium transition duration-300 rounded-2xl text-grey-900 bg-grey-300 hover:bg-grey-400 focus:ring-4 focus:ring-grey-300 dark:text-white dark:bg-gray-700 hover:bg-gray-600 focus:ring-gray-600">
                        <img class="h-5 mr-2" src="{{ asset('storage/images/logo/facebook.png') }}" alt="Facebook logo">
                        Sign in with Facebook
                    </a>
                    <div class="flex items-center mb-3">
                        <hr class="h-0 border-b border-solid border-grey-500 grow">
                        <p class="mx-4 text-grey-600 dark:text-gray-400">or</p>
                        <hr class="h-0 border-b border-solid border-grey-500 grow">
                    </div>
                    <label for="email" class="mb-2 text-sm text-start text-grey-900 dark:text-white">Email*</label>
                    <input id="email" type="email" placeholder="Enter your email"
                        class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 dark:bg-gray-300 dark:placeholder-gray-400 dark:text-gray-800 rounded-2xl" />
                    <label for="password"
                        class="mb-2 text-sm text-start text-grey-900 dark:text-white">Password*</label>
                    <input id="password" type="password" placeholder="Enter your password"
                        class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 dark:bg-gray-300 dark:placeholder-gray-400 dark:text-gray-800 rounded-2xl" />
                    <div class="flex flex-row justify-between mb-8">
                        <a href="javascript:void(0)"
                            class="mr-4 text-sm font-medium text-purple-blue-500 dark:text-blue-400">Forgot your
                            password? Click here!</a>
                    </div>
                    <button
                        class="w-full px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 focus:ring-blue-100">Sign
                        In</button>
                    <p class="text-sm leading-relaxed text-grey-900 dark:text-white">Not a member yet? <a
                            href="{{ route('register') }}" class="font-bold text-grey-700 dark:text-blue-400">Sign
                            up now</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/Linktopage.js') }}"></script>

@endsection