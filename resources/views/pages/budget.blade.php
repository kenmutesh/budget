@extends('layouts.master')

@section('content')

    <div class="flex flex-col h-30 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h2 class="mb-2 text-xl font-bold">Please set Estimated budget</h2>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

            <form action="{{ route('set-budget') }}" method="post">
                @csrf
                <div class="flex items-center border-b border-teal-500 py-2">
                    <select class="appearance-none bg-white border-b-blue-800 border-red-800 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-teal-500" name="currency">
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                    </select>

                    <input class="border-b border-teal-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="amount" placeholder="Amount">

                </div>

                <textarea class="appearance-none bg-white border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-teal-500 mt-4" name="description" placeholder="Description"></textarea>

                <button type="submit" class="mt-4 bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </form>
        </div>
    </div>
@endsection
