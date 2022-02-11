@extends('user.dashboard')

@section('content')

  <div class="justify-center">
        <p class="text-lg font-bold p-2">Shariah Clinic Form</p>

	<div x-data="app()" class="max-w-3xl mx-auto rounded-xl" x-cloak>
		<div class="max-w-3xl mx-auto shadow-2xl rounded-x px-4 py-6">

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
				<div class="border-b-2 px-8 py-4">
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Page: ${step} of 2`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Issue</div>
							</div>
							
							<div x-show="step === 2">
								<div class="text-lg font-bold text-gray-700 leading-tight">Suggestions</div>
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
        
        <form action="{{ route('clinic.edit',[$clinic->id]) }}" method="POST">
          @if(session('message'))
			      <div class="alert alert-success" role="alert">
  				    {{session('message')}}
			      </div>
			    @endif

              @csrf
              <div class="overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <!-- Start Step 1 -->
                  <div x-show.transition.in="step === 1">
                    <div class="grid grid-cols-10 gap-6">
                      <div class="col-span-6 sm:col-span-10">
                        <label for="issue" class="font-semibold leading-none">Issue</label>
                        <div class="form-group col-md-12">
                            <textarea id="issue" value="{{old('issue',$clinic->issue)}}" name="issue" cols="300" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{old('issue',$clinic->issue)}}</textarea>
                            
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End Step 1 -->
                  <!-- Start Step 2 -->
                  <div x-show.transition.in="step === 2">
                    <div class="grid grid-cols-10 gap-6">
                      <div class="col-span-6 sm:col-span-10">
                        <label for="doc_expertise" class="font-semibold leading-none">Suggestions/Recommendations/Comments</label>
                        <div class="form-group col-md-12">
                            <textarea id="comment" value="{{old('comment',$clinic->comment)}}" name="comment" cols="300" rows="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{old('comment',$clinic->comment)}}</textarea>
                            
                            </div>
                      </div>

                      <div class="col-span-6 sm:col-span-10">
                        <label for="doc_expertise" class="font-semibold leading-none">Corrective Actions</label>
                        <div class="form-group col-md-12">
                            <textarea id="correctiveaction" value="{{old('correctiveaction',$clinic->correctiveaction)}}" name="correctiveaction" cols="300" rows="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            
                            </div>
                      </div>

                      <div class="col-span-6 sm:col-span-10">
                        <label for="doc_expertise" class="font-semibold leading-none">Next Follow-up</label>
                        <div class="form-group col-md-12">
                            <textarea id="followup" value="{{old('followup',$clinic->followup)}}" name="followup" cols="300" rows="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            
                            </div>
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
