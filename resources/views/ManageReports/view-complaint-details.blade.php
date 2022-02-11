@extends('layouts.app')

@section('content')


  <div class="-my-2 w-full mx-auto overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">

      <div class="px-3 text-2xl font-bold">
      Complaint Details
      </div>

      <div class="p-8">
  <div class="max-w-full border-dashed border-4 border-gray-600 bg-white flex flex-col rounded overflow-hidden shadow-lg">

    <div class="flex justify-center">
    <div class="flex flex-col w-full p-5 mx-auto card">
            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Name</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                    {{ $complaint->complainant_name }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Phone Number</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->phone_no }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Department</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->department }}
					</div>
				</div>

                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Type of Complaint</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->complaint_type }}
					</div>

                    <div class="px-6 py-3 text-lg text-right font-semibold">
                    Complaint Date: {{ $complaint->complaint_date }}
                    </div>

				</div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Details</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					{{ $complaint->details }}
					</div>
				</div>
                </div>
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>
            
            <div class="pt-6 flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Received by</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1 text-lg">
                        {{ $complaint->received_by }}
                        </div>

                        @php
                            $assignstaff = (auth()->user()->assignstaff == 1);
                        @endphp

                        @if($assignstaff == 1)
                        @if($complaint->received_by == NULL)
                        <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H9.18C9.6,1.84 10.7,1 12,1C13.3,1 14.4,1.84 14.82,3H19M12,3A1,1 0 0,0 11,4A1,1 0 0,0 12,5A1,1 0 0,0 13,4A1,1 0 0,0 12,3M7,7V5H5V19H19V5H17V7H7M12,9A2,2 0 0,1 14,11A2,2 0 0,1 12,13A2,2 0 0,1 10,11A2,2 0 0,1 12,9M8,17V16C8,14.9 9.79,14 12,14C14.21,14 16,14.9 16,16V17H8Z" />
                            </svg>
                            <a href="{{ url('complaint/assign-staff/'.$complaint->id) }}" class="px-2 items-center text-indigo-800 hover:text-indigo-900">Assign Staff</a>
                        </button>
                        @else
                        @endif
                        @else
                        @endif

                    </div>
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Received date</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1 text-lg">
                        {{ $complaint->received_date }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mt-3">
                <div class="flex flex-col ">
                    <div class="text-gray-800 block font-bold text-lg uppercase underline underline-offset-4 tracking-wide">A. Investigation and Root Cause</div>
                    <div class="pt-4 mb-2 md:mb-1 md:flex items-center">
					<label class="pr-2 text-gray-800 block font-bold text-lg uppercase tracking-wide">Investigation Details</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">{{ $complaint->investigation }}</div>
				    </div>
                </div>
               
            </div>
            <div class="mt-3 ">

                <div class="flex text-gray-800 block font-bold text-lg uppercase underline underline-offset-4 tracking-wide">B. Corrective Action Taken</div>
                <table class="table w-full mt-3 table_striped">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right"></th>
                            <th class="ltr:text-left rtl:text-right"></th>
                            <th class="ltr:text-left rtl:text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <div class="mb-2 md:mb-1 md:flex items-center">
                                <label class="pr-2 text-gray-800 block font-bold text-lg uppercase tracking-wide">Immediate Action </label>
                                <span class="mr-4 inline-block hidden md:block">:</span>
                                <div class="flex-1 text-lg">{{ $complaint->immediate_action }}<br>
                                <br>{{ $complaint->immediate_completion }}</div>
                            </div>
                            </td>
                            <td>
                                <div class="mb-2 md:mb-1 md:flex items-center">
                                    <label class="pr-2 text-gray-800 block font-bold text-lg uppercase tracking-wide">Long-term Action</label>
                                    <span class="mr-4 inline-block hidden md:block">:</span>
                                    <div class="flex-1 text-lg">
                                    {{ $complaint->investigation }}
                                    <br>
                                    <br>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>
    </div>
 </div>

@endsection