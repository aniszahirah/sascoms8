@extends('user.dashboard')

@section('content')

	<div class="justify-center">
        <p class="text-lg font-bold p-2">Complaint Form</p>

	<div x-data="app()" class="max-w-3xl mx-auto rounded-xl" x-cloak>
		<div class="max-w-3xl mx-auto shadow-2xl rounded-x px-4 py-6">

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
				<div class="border-b-2 px-8 py-4">
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Page: ${step} of 2`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Complaint Details</div>
							</div>

                            <div x-show="step === 2">
								<div class="text-lg font-bold text-gray-700 leading-tight">Declaration</div>
							</div>

						</div>

						<div class="flex items-center md:w-64">
							<div class="w-full border border-gray-300 bg-white rounded-full mr-2">
								<div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white " :style="'width: '+ parseInt(step / 2 * 100) +'%'"></div>
							</div>
							<div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 2 * 100) +'%'"></div>
						</div>
					</div>
				</div>
				<!-- /Top Navigation -->
        
        <form action="{{ route('complaint.store') }}" method="POST">
              @csrf
              <div class="overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <!-- Start Step 1 -->
                  <div x-show.transition.in="step === 1">
                  <div class="grid grid-cols-10 gap-6">
                      <div class="col-span-6 sm:col-span-10">
                        <label for="complaint_type" class="font-semibold leading-none">Types of Complaint</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="complaint_type" id="inlineRadio1" value="Improper Attire/Dress Code">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio1">Improper Attire/Dress Code</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="complaint_type" id="inlineRadio2" value="Inappropritate Socializing">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio2">Inappropritate Socializing</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="complaint_type" id="inlineRadio3" value="Improper Attitude">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio3">Improper Attitude</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="complaint_type" id="inlineRadio4" value="Others">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio4">Others</label>
                        </div>
              
                      </div>

                      <div class="col-span-6 sm:col-span-10">
                        <label for="details" class="font-semibold leading-none">Details</label>
                        <textarea
                          class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                          id="exampleFormControlTextarea1"
						  name="details"
                          rows="5"
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
                          <div class="form-check form-check-inline">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">I hereby declare that the information given in this application is true and
                                correct to the best of my knowledge and belief. In case any information
                                given in this application proves to be false or incorrect, I shall be
                                responsible for the consequences. </label>
                          </div>         
                      </div>
					</div>
                  <!-- End Step 2 -->
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
									x-show="step < 2"
									@click="step++"
									class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none" 
								>Next</button>

								<button
									type="submit"
									@click="step = 'complete'"
									x-show="step === 2"
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
