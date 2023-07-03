<!-- home.blade.php -->

@extends('layouts.master')

@section('content')
    <div id="last-incomes">
        <h1 class="font-bold py-4 uppercase">Last 24h incomes</h1>
        <div id="stats" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

            <div class="bg-black/60 to-white/5 rounded-lg">
                <div class="flex flex-row items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-30 text-green-400"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>
                    <div class="p-2 text-right">
                        <p class="text-3xl font-bold">52$</p>
                        <p class="text-white font-medium">Megane Baile</p>
                        <p class="text-white text-sm">22 Nov 2022</p>
                    </div>
                </div>
                <div class="border-t border-white/5 p-4">
                    <a href="#" class="inline-flex space-x-2 items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <span>Info</span>
                    </a>
                </div>
            </div>
            <div class="bg-black/60 to-white/5 rounded-lg">
                <div class="flex flex-row items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-30 text-yellow-400"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <div class="p-2 text-right">
                        <p class="text-3xl font-bold">28$</p>
                        <p class="text-white font-medium">Tony Ankel</p>
                        <p class="text-white text-sm">22 Nov 2022</p>
                    </div>
                </div>
                <div class="border-t border-white/5 p-4">
                    <a href="#" class="inline-flex space-x-2 items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <span>Info</span>
                    </a>
                </div>
            </div>
            <div class="bg-black/60 to-white/5 rounded-lg">
                <div class="flex flex-row items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-30 text-pink-600"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                    </svg>
                    <div class="p-2 text-right">
                        <p class="text-3xl font-bold">28$</p>
                        <p class="text-white font-medium">Tony Ankel</p>
                        <p class="text-white text-sm">22 Nov 2022</p>
                    </div>
                </div>
                <div class="border-t border-white/5 p-4">
                    <a href="#" class="inline-flex space-x-2 items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <span>Info</span>
                    </a>
                </div>
            </div>
            <div class="bg-black/60 to-white/5 rounded-lg">
                <div class="flex flex-row items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-30 text-blue-400"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <div class="p-2 text-right">
                        <p class="text-3xl font-bold">28$</p>
                        <p class="font-medium text-white">Tony Ankel</p>
                        <p class="text-sm text-white">22 Nov 2022</p>

                    </div>
                </div>

                <div class="border-t border-white/5 p-4">
                    <a href="#" class="inline-flex space-x-2 items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <span>Info</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
