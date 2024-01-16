@extends('master')

@section('head')
<!-- Additional head content specific to this page -->
@endsection

@section('content')

@include('navbar')
<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
    @include('sidebar')
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main>
            <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                <div class="mb-4 col-span-full xl:mb-2">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">หน้าหลัก</h1>
                </div>
                <!-- Right Content -->
                <div class="col-span-3">
                    <div
                        class="p-4 mb-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div
                            class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                            <h3>Card header</h3>
                        </div>
                        <div
                            class="h-32 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                            <h3>Card body</h3>
                        </div>
                        <div
                            class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                            <h3>Card footer</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-4 px-4 mb-4 md:grid-cols-2 xl:grid-cols-4">
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
                <div
                    class="p-4 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card header</h3>
                    </div>
                    <div
                        class="h-16 px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card body</h3>
                    </div>
                    <div
                        class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600">
                        <h3>Card footer</h3>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>





@endsection