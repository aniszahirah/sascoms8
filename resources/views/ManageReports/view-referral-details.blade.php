@extends('layouts.app')

@section('content')


  <div class="-my-2 w-full mx-auto overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">

      <div class="px-3 text-2xl pt-4 font-bold">
      Referral Details
      </div>

      <div class="p-6">
  <div class="max-w-full border-dashed border-4 border-gray-600 bg-white rounded overflow-hidden shadow-lg">

    <div class="flex justify-center">
        
    <div class="flex flex-col w-full p-5 mx-auto card">
            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Patient/Staff Information</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Name</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->name }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Address</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->address }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Contact No</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->phone_no }}
					</div>

                    <label class="w-40 text-gray-800 block font-bold text-lg uppercase tracking-wide">Gender</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->gender }}
					</div>
				</div>

                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">RN/Staff No</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->ref_no }}
					</div>

                    <label class="w-40 text-gray-800 block font-bold text-lg uppercase tracking-wide">NRIC</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->nric }}
					</div>
				</div>

                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Department</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
					    {{ $referral->dept }}
					</div>

                    <label class="w-40 text-gray-800 block font-bold text-lg uppercase tracking-wide">Date</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->ref_date }}
					</div>

				</div>
                </div>
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>

            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Information from Doctor</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-60 text-gray-800 block font-bold text-lg uppercase tracking-wide">Discipline / Expertise</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->doc_expertise }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-60 text-gray-800 block font-bold text-lg uppercase tracking-wide">Patient Diagnosis</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->pt_diagnosis }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-60 text-gray-800 block font-bold text-lg uppercase tracking-wide">Case Type</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->case_type }}
					</div>

                    <label class="w-40 text-gray-800 block font-bold text-lg uppercase tracking-wide">Purpose</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->purpose }}
					</div>
     
				</div>

                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-60 text-gray-800 block font-bold text-lg uppercase tracking-wide">Details</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $referral->details }}
					</div>
     
				</div>
                </div>

                
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>

            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Referred by</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<div class="flex-1 text-lg">
                        {{ $referral->doc_id }}
                       
                    </div>
				</div>

                
            </div>
            
            <!-- <div class="pt-6 flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Received by</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1 text-lg">
                      
                        </div>

                        @php
                            $assignstaff = (auth()->user()->assignstaff == 1);
                        @endphp

                        @if($assignstaff == 1)
                       
                        <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H9.18C9.6,1.84 10.7,1 12,1C13.3,1 14.4,1.84 14.82,3H19M12,3A1,1 0 0,0 11,4A1,1 0 0,0 12,5A1,1 0 0,0 13,4A1,1 0 0,0 12,3M7,7V5H5V19H19V5H17V7H7M12,9A2,2 0 0,1 14,11A2,2 0 0,1 12,13A2,2 0 0,1 10,11A2,2 0 0,1 12,9M8,17V16C8,14.9 9.79,14 12,14C14.21,14 16,14.9 16,16V17H8Z" />
                            </svg>
                            <a href="{{ url('complaint/assign-staff/'.$referral->case_no) }}" class="px-2 items-center text-indigo-800 hover:text-indigo-900">Assign Staff</a>
                        </button>
              
                        @else
                        @endif

                    </div>
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Received date</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1 text-lg">
                 
                        </div>
                    </div>
                </div>
            </div> -->
            
    </div>
    </div>
    </div>
 </div>

@endsection