@extends('layouts.app')

@section('content')


  <div class="-my-2 w-full mx-auto overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">

      <div class="px-3 text-2xl pt-4 font-bold">
      SLO Report Details
      </div>

      <div class="p-6">
  <div class="max-w-full border-dashed border-4 border-gray-600 bg-white rounded overflow-hidden shadow-lg">

    <div class="flex justify-center">
        
    <div class="flex flex-col w-full p-5 mx-auto card">
            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Shariah Liaison Officer Information</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Name</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->slo_name }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Department / Unit / Ward / Clinic</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->dept }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-52 text-gray-800 block font-bold text-lg uppercase tracking-wide">Date</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->report_date}}
					</div>
				</div>

                </div>
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>

            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Details</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-60 text-gray-800 block font-bold text-lg uppercase tracking-wide">Report Details</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->report_details }}
					</div>
				</div>
                <br>
				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-auto text-gray-800 block font-bold text-lg uppercase tracking-wide">Action by Shariah Liaison Officer (if any)</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->slo_action }}
					</div>
				</div>
                <br>
				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-auto text-gray-800 block font-bold text-lg uppercase tracking-wide">Suggestions / Recommendations/ Comments from Representative of Shariah Compliance Unit</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->scu_comments }}
					</div>
     
				</div>
                <br>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-60 text-gray-800 block font-bold text-lg uppercase tracking-wide">Next Follow Up</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1 text-lg">
                        {{ $sloreports->followup }}
					</div>
     
				</div>
                </div>

                
            </div>

            <div class="mt-4 border-t-2 border-gray-200 "></div>

            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <span class="absolute text-lg bg-gray-100 px-2 font-semibold">Representative from Shariah Compliance Unit</span>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<div class="flex-1 text-lg">
                        {{ $sloreports->scu_id }}
                    </div>
				</div>

                
            </div>
            
          
            
    </div>
    </div>
    </div>
 </div>

@endsection