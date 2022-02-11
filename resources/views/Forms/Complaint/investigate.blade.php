@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script>

	<div class="w-full h-full justify-center">
        <p class="text-xl font-bold p-2">Complaint Form</p>

	<div x-data="app()" class="max-w-3xl mx-auto rounded-xl" x-cloak>
		<div class="max-w-7xl mx-auto max-h-full justify-between shadow-2xl rounded-x px-4 py-6  mr-6">

			<div x-show.transition="step === 'complete'">
				<!-- <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
					<div>
						<svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

						<h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Complaint Successfully Submitted</h2>

						<button
							@click="step = 1"
							class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
						>Back to Dashboard</button>
					</div>
				</div> -->
			</div>

			<div x-show.transition="step != 'complete'">	
				<!-- Top Navigation -->
				<div class="w-full border-b-2 px-8 py-4">
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Page: ${step} of 3`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Investigation and Root Cause</div>
							</div>

                            <div x-show="step === 2">
								<div class="text-lg font-bold text-gray-700 leading-tight">Corrective Action Taken</div>
							</div>

                            <div x-show="step === 3">
								<div class="text-lg font-bold text-gray-700 leading-tight">Declaration</div>
							</div>

						</div>

						<div class="flex items-center md:w-64">
							<div class="w-full border border-gray-300 bg-white rounded-full mr-2">
								<div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white " :style="'width: '+ parseInt(step / 3 * 100) +'%'"></div>
							</div>
							<div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 3 * 100) +'%'"></div>
						</div>
					</div>
				</div>
				<!-- /Top Navigation -->
        
              <form action="{{ url('/complaint/investigate/store/'.$complaint->id) }}" method="POST">
              @csrf
              <div class="overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 sm:p-6">
                  <!-- Start Step 1 -->
                  <div x-show.transition.in="step === 1">
                    <div class="grid grid-cols-10 gap-6">
                      <div class="col-span-6 sm:col-span-10">
                        <label for="details" class="text-lg font-semibold leading-none">Investigation Details</label>
                        <textarea
                          class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                          id="exampleFormControlTextarea1"
						  name="details"
                          rows="7"
                          placeholder="Details"
                        ></textarea>
                      </div>     
                    </div>
                  </div>
                  <!-- End Step 1 -->
                  <!-- Start Step 2 -->
                  <div x-show.transition.in="step === 2">
                    <div class="grid grid-cols-10 gap-6">   
                        <div class="col-span-6 sm:col-span-10">
                            <label for="details" class="text-lg font-semibold leading-none">Immediate Action</label>
                            <textarea
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlTextarea1"
                            name="immediate_action"
                            rows="5"
                            placeholder="Immediate Action"
                            ></textarea>
                        </div>     
                        <div class="col-span-4">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input name="immediate_completion" datepicker-format="yyyy/mm/dd" datepicker="" datepicker-buttons="" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
                            </div>
                        </div>
                        
                        <div class="col-span-6 sm:col-span-10">
                            <label for="details" class="text-lg font-semibold leading-none">Long-term Action</label>
                            <textarea
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlTextarea1"
                            name="longterm_action"
                            rows="5"
                            placeholder="Long-term Action"
                            ></textarea>
                        </div>     
                        <div class="col-span-4">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input name="longterm_completion" datepicker-format="yyyy/mm/dd" datepicker="" datepicker-buttons="" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
                            </div>
                        </div>
					</div>
                  <!-- End Step 2 -->
                  <!-- Start Step 3 -->
                  <div x-show.transition.in="step === 3">
                    <div class="grid grid-cols-10 gap-6">   
                      <div class="col-span-6 sm:col-span-10">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">I hereby declare that the information given in this application is true and
                                correct to the best of my knowledge and belief. In case any information
                                given in this application proves to be false or incorrect, I shall be
                                responsible for the consequences. </label>
                          </div>         
                      </div>
					</div>
                   </div>
                  <!-- End Step 3 -->
                </div>
              </div>
			  <!-- Bottom Navigation -->	
				<div class="bottom-0 left-0 right-0 py-0 my-4" x-show="step != 'complete'">
					<div class="max-w-3xl mx-auto px-4">
						<div class="flex justify-between">
							<div class="w-1/2">
								<button
									type="button"
									x-show="step > 1"
									@click="step--"
									class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none" 
								>Previous</button>
							</div>

							<div class="w-1/2 text-right">
								<button
									type="button"
									x-show="step < 3"
									@click="step++"
									class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none" 
								>Next</button>

								<button
									type="submit"
									@click="step = 'complete'"
									x-show="step === 3"
									class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none" 
								>Submit</button>
							</div>
						</div>
					</div>
				</div>
				<!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->	
            </form>
				
			</div>
      
		</div>

		
	</div>

	</div>

	<script>
		function app() {
			return {
				step: 1, 
			}
		}
	</script>


        
@endsection
