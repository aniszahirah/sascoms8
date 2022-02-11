@extends('layouts.app')

@section('content')

<div class="w-full h-full justify-center">
  <p class="text-xl font-bold p-2">Terms and Condition</p>

	<div x-data="app()" class="max-w-3xl mx-auto rounded-xl" x-cloak>
		<div class="max-w-7xl mx-auto shadow-2xl rounded-x px-4 py-6">

			<div x-show.transition="step === 'complete'">
				<div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
					<!-- <div>
						<svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

						<h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registration Success</h2>

						<div class="text-gray-600 mb-8">
							Thank you. We have sent you an email to demo@demo.test. Please click the link in the message to activate your account.
						</div>

						<button
							@click="step = 1"
							class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
						>Back to home</button>
					</div> -->
				</div>
			</div>

			<div x-show.transition="step != 'complete'">	
				<!-- Top Navigation -->
				<div class="w-full border-b-2 px-8 py-4">
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Page: ${step} of 2`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Patient/Staff Information</div>
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
        
        <form action="/terms" method="POST">
              @csrf
              <div class="overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <!-- Start Step 1 -->
                  <div x-show.transition.in="step === 1">
                    <div class="grid grid-cols-10 gap-6">

                        <div class="col-span-6 sm:col-span-10">
                        
                            <label for="name" class="col-sm-3 control-label">Name *</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" placeholder="Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-10">
                            <label for="address" class="col-sm-3 control-label">Address *</label>
                            <div class="col-sm-9">
                                <input type="text" id="address" name="address" placeholder="Address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-10">
                            <label for="contactnumber" class="col-sm-3 control-label">Contact number *</label>
                            <div class="col-sm-9">
                                <input type="text" id="contactnumber" name="contactnumber" placeholder="Contact Number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-10">
                            <label class="control-label col-sm-3">Gender *</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            <input type="radio" id="female" name="gender" value="female">Female
                                        </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            <input type="radio" id="male" name="gender" value="male">Male
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-10">
                            <label for="nric" class="col-sm-3 control-label">NRIC *</label>
                            <div class="col-sm-9">
                                <input type="text" id="nric" name="nric" placeholder="NRIC" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                            </div>
                        </div>
                        
                        <div class="col-span-6 sm:col-span-10">
                            <label for="additionalrequirements" class="col-sm-3 control-label">Additional Requirements </label>
                            <div class="col-sm-9">
                                 <input type="text" id="additionalrequirements" name="additionalrequirements" placeholder="Additional Requirements" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                             </div>
                         </div>
                         <div class="col-span-6 sm:col-span-10">
                            <div class="col-sm-9 col-sm-offset-3">
                                <span class="help-block">*Required fields</span>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
                  <!-- End Step 1 -->
                  
                  <!-- Start Step 2 -->
                  <div x-show.transition.in="step === 2">
                    <div class="grid grid-cols-10 gap-6">
                      <div class="col-span-6 sm:col-span-10">
                        
                            <input class="form-check-input" type="checkbox" id="declaration" name="declaration">
                            <label class="form-check-label" for="declaration">
                                I acknowledge that I have clearly explained to the patient some of the conditions that 
                                the patient may face, as described in the next page.<br><br>
                                
                                Saya mengaku bahawa saya telah menerangkan dengan jelas kepada pesakit berkenaan dengan beberapa keadaan yang 
                                mungkin dihadapi oleh pesakit seperti yang dinyatakan di muka surat seterusnya.
                            </label>
                            
                        
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
                        class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">Submit</button>
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
