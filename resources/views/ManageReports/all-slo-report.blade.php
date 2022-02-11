

@extends('layouts.app')

@section('content')

<div class="flex flex-col text-left w-full pr-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="text-2xl font-bold py-8 pl-8">
            Manage SLO Reports
            </div>
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div
                class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
            >   
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 justify-center">
                    <tr>
                    <th
                        scope="col"
                        class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
                    >
                        Report ID
                    </th> 
                    <th
                        scope="col"
                        class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
                    >
                        Report Date
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
                    >
                        Report Details
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
                    >
                        Assigned SCU
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
                    >
                        Status
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
                    >
                        Actions
                    </th>
                    </tr>
                </thead>

                @foreach($sloreports as $sloreport)
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-base font-semibold">
                                {{ $sloreport->id }}
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span
                        class="text-base font-semibold"
                        >
                            {{ $sloreport->report_date }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span
                        class="text-base font-semibold"
                        >
                            {{ $sloreport->report_details }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($sloreport->scu_id == NULL)
                            <span
                            class="text-base font-semibold">
                            No SCU assigned
                            </span>
                            @else
                            <span
                            class="text-base font-semibold">
                            {{ $sloreport->scu_id }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-1 whitespace-nowrap">
                        <span
                        class="px-4 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-800"
                        >
                            {{ $sloreport->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" 
                                d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                            </svg>
                            <a href="{{ url('/slo-report/details/'.$sloreport->id) }}" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                        </button>
                        <button class="bg-green-200 hover:bg-green-300 text-green-800 hover:text-green-900 font-bold py-1 px-2 rounded inline-flex items-center">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
                            </svg>
                            <a href="#" class="px-2 items-center text-green-800 hover:text-green-900">Download</a>
                        </button>
                    </td>
                    </tr>

    

                </tbody>
                @endforeach
                </table>

                <div class="row m-2">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>


@endsection