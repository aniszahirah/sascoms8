@extends('layouts.app')

@section('content')

  <div class="justify-center">
        <p class="text-lg font-bold p-2">Food Premise Inspection Form</p>

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
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Page: ${step} of 10`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Registration</div>
							</div>
							
							<div x-show="step === 2">
								<div class="text-lg font-bold text-gray-700 leading-tight">Certification of Halal</div>
							</div>

							<div x-show="step === 3">
								<div class="text-lg font-bold text-gray-700 leading-tight">Chicken and Meat</div>
							</div>

                            <div x-show="step === 4">
								<div class="text-lg font-bold text-gray-700 leading-tight">All Raw Materials</div>
							</div>

                            <div x-show="step === 5">
								<div class="text-lg font-bold text-gray-700 leading-tight">Food Handler</div>
							</div>

                            <div x-show="step === 6">
								<div class="text-lg font-bold text-gray-700 leading-tight">Cleanliness of Premise</div>
							</div>

                            <div x-show="step === 7">
								<div class="text-lg font-bold text-gray-700 leading-tight">Food and Beverages</div>
							</div>

                            <div x-show="step === 8">
								<div class="text-lg font-bold text-gray-700 leading-tight">Preparation Method</div>
							</div>

                            <div x-show="step === 9">
								<div class="text-lg font-bold text-gray-700 leading-tight">Others</div>
							</div>

                            <div x-show="step === 10">
								<div class="text-lg font-bold text-gray-700 leading-tight">Comments</div>
							</div>
              
						</div>

						<div class="flex items-center md:w-64">
							<div class="w-full border border-gray-300 bg-white rounded-full mr-2">
								<div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white " :style="'width: '+ parseInt(step / 10 * 100) +'%'"></div>
							</div>
							<div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 10 * 100) +'%'"></div>
						</div>
					</div>
				</div>
				<!-- /Top Navigation -->
        
        <form action="/food" method="POST">
              @csrf
              <div class="overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">

                  <!-- Start Step 1 -->
                  <div x-show.transition.in="step === 1">
                    <div class="grid grid-cols-10 gap-6">

                        <div class="col-span-6 sm:col-span-10">
                            <label for="PremiseName" class="col-sm-3 control-label">Premise Name *</label>
                            <div class="col-sm-9">
                                <input type="text" id="PremiseName" name="PremiseName" placeholder="Premise Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-10">
                            <label for="location" class="col-sm-3 control-label">Premise Location *</label>
                            <div class="col-sm-9">
                                <input type="text" id="location" name="location" placeholder="Premise Location" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-10">
                            <div class="col-span-6 sm:col-span-10">
                            <label for="declaration" class="col-sm-3 control-label">Declaration:</label>
                        </div>

                        <div class="col-span-6 sm:col-span-10">
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="declaration" name="declaration">&emsp;We agree to accept any inspection done by Shariah Officer of SASMEC @IIUM 
                                        or any person representing him at any time. We promise to give full cooperation 
                                        and commitment before, during and after the inspection.
                                    </label>
                                </div>
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

                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks1" class="form-label">1. Certification of Halal<br><br>
                                                            Note: All certificate of halal must come from JAKIM or any<br> recognised 
                                                            foreign halal certification bodies & authorities.</label>
                                                            <textarea placeholder="Remarks" id="remarks1" name="remarks1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q1" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q1" value="no">
                                              </td>
                                            </form>
                                            </tr>
                
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            
                        </div>
                    </div>
				</div>
                </div>
                  <!-- End Step 2 -->

                  <!-- Start Step 3 -->
                  <div x-show.transition.in="step === 3">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">  

                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks2" class="form-label">1. Certificate of Slaughter</label>
                                                            <textarea placeholder="Remarks" id="remarks2" name="remarks2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q2" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q2" value="no">
                                              </td>
                                            </form>
                                            </tr>
                
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <label for="remarks3" class="form-label">2. Certificate of slaughtering place (slaughterhouse)</label>
                                                        <textarea placeholder="Remarks" id="remarks3" name="remarks3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                  </div>
                                                </td>
                                                <form style="float:right;">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="radio" id="yes" name="Q3" value="yes">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <input type="radio" id="no" name="Q3" value="no">
                                                      </td>
                                                    </form>
                                                </tr>
                
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <label for="remarks4" class="form-label">3. Certificate of halal from JAKIM 
                                                                or any recognised foreign<br> halal certification bodies & authorities</label>
                                                                <textarea placeholder="Remarks" id="remarks4" name="remarks4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <form style="float:right;">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <input type="radio" id="yes" name="Q4" value="yes">
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <input type="radio" id="no" name="Q4" value="no">
                                                          </td>
                                                        </form>
                                                    </tr>
                                
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                    </div>
                </div>
				</div>

                  <!-- End Step 3 -->

                  <!-- Start Step 4 -->
                  <div x-show.transition.in="step === 4">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">  

                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks5" class="form-label">1. Certificate of halal from JAKIM
                                                            or any recognised foreign<br> halal certification bodies and authorities</label>
                                                            <textarea placeholder="Remarks" id="remarks5" name="remarks5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q5" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q5" value="no">
                                              </td>
                                            </form>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="mb-3">
                                                            <label for="remarks6" class="form-label">2. Acknowledgment letter from Muslim
                                                                provider / supplier<br> if the product is a homemade product.</label>
                                                                <textarea placeholder="Remarks" id="remarks6" name="remarks6" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </td>
                                                <form style="float:right;">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="radio" id="yes" name="Q6" value="yes">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <input type="radio" id="no" name="Q6" value="no">
                                                  </td>
                                                </form>
                                                </tr>
                
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                        </div>
                    </div>
				 </div>
                  <!-- End Step 4 -->

                  <!-- Start Step 5 -->
                  <div x-show.transition.in="step === 5">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">

                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks7" class="form-label">1. All food handler vaccinate with Typhoid injection</label>
                                                            <textarea placeholder="Remarks" id="remarks7" name="remarks7" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q7" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q7" value="no">
                                              </td>
                                            </form>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="mb-3">
                                                            <label for="remarks8" class="form-label">2. All food handler are Muslim</label>
                                                                <textarea placeholder="Remarks" id="remarks8" name="remarks8" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </td>
                                                <form style="float:right;">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="radio" id="yes" name="Q8" value="yes">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <input type="radio" id="no" name="Q8" value="no">
                                                  </td>
                                                </form>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="mb-3">
                                                                <label for="remarks9" class="form-label">3. Friendly</label>
                                                                    <textarea placeholder="Remarks" id="remarks9" name="remarks9" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <form style="float:right;">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="radio" id="yes" name="Q9" value="yes">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <input type="radio" id="no" name="Q9" value="no">
                                                      </td>
                                                    </form>
                                                    </tr>

                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                          <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="mb-3">
                                                                    <label for="remarks10" class="form-label">4. Helpful</label>
                                                                        <textarea placeholder="Remarks" id="remarks10" name="remarks10" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <form style="float:right;">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <input type="radio" id="yes" name="Q10" value="yes">
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <input type="radio" id="no" name="Q10" value="no">
                                                          </td>
                                                        </form>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                              <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="mb-3">
                                                                        <label for="remarks11" class="form-label">5. Clean Clothes</label>
                                                                            <textarea placeholder="Remarks" id="remarks11" name="remarks11" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </td>
                                                            <form style="float:right;">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input type="radio" id="yes" name="Q11" value="yes">
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <input type="radio" id="no" name="Q11" value="no">
                                                              </td>
                                                            </form>
                                                            </tr>

                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                  <div class="flex items-center">
                                                                    <div class="ml-4">
                                                                        <div class="mb-3">
                                                                            <label for="remarks12" class="form-label">6. Clean Nails</label>
                                                                                <textarea placeholder="Remarks" id="remarks12" name="remarks12" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                                <form style="float:right;">
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="radio" id="yes" name="Q12" value="yes">
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                    <input type="radio" id="no" name="Q12" value="no">
                                                                  </td>
                                                                </form>
                                                                </tr>

                                                                <tr>
                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                      <div class="flex items-center">
                                                                        <div class="ml-4">
                                                                            <div class="mb-3">
                                                                                <label for="remarks13" class="form-label">7. Not have any open injuries</label>
                                                                                    <textarea placeholder="Remarks" id="remarks13" name="remarks13" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                    </td>
                                                                    <form style="float:right;">
                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                        <input type="radio" id="yes" name="Q13" value="yes">
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                        <input type="radio" id="no" name="Q13" value="no">
                                                                      </td>
                                                                    </form>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                          <div class="flex items-center">
                                                                            <div class="ml-4">
                                                                                <div class="mb-3">
                                                                                    <label for="remarks14" class="form-label">8. Wearing suitable shoes</label>
                                                                                        <textarea placeholder="Remarks" id="remarks14" name="remarks14" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                          </div>
                                                                        </td>
                                                                        <form style="float:right;">
                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                            <input type="radio" id="yes" name="Q14" value="yes">
                                                                        </td>
                                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                            <input type="radio" id="no" name="Q14" value="no">
                                                                          </td>
                                                                        </form>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                              <div class="flex items-center">
                                                                                <div class="ml-4">
                                                                                    <div class="mb-3">
                                                                                        <label for="remarks15" class="form-label">9. Washing their hands before handle the foods</label>
                                                                                            <textarea placeholder="Remarks" id="remarks15" name="remarks15" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                              </div>
                                                                            </td>
                                                                            <form style="float:right;">
                                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                                <input type="radio" id="yes" name="Q15" value="yes">
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                <input type="radio" id="no" name="Q15" value="no">
                                                                              </td>
                                                                            </form>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                                  <div class="flex items-center">
                                                                                    <div class="ml-4">
                                                                                        <div class="mb-3">
                                                                                            <label for="remarks16" class="form-label">10. Washing their hands after go to toilet</label>
                                                                                                <textarea placeholder="Remarks" id="remarks16" name="remarks16" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </td>
                                                                                <form style="float:right;">
                                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                                    <input type="radio" id="yes" name="Q16" value="yes">
                                                                                </td>
                                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                    <input type="radio" id="no" name="Q16" value="no">
                                                                                  </td>
                                                                                </form>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                                      <div class="flex items-center">
                                                                                        <div class="ml-4">
                                                                                            <div class="mb-3">
                                                                                                <label for="remarks17" class="form-label">11. No coughing / sneezing towards food</label>
                                                                                                    <textarea placeholder="Remarks" id="remarks17" name="remarks17" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </td>
                                                                                    <form style="float:right;">
                                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                                        <input type="radio" id="yes" name="Q17" value="yes">
                                                                                    </td>
                                                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                        <input type="radio" id="no" name="Q17" value="no">
                                                                                      </td>
                                                                                    </form>
                                                                                    </tr>
                
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
				</div>
                  <!-- End Step 5 -->

                  <!-- Start Step 6 -->
                  <div x-show.transition.in="step === 6">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">  

                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks18" class="form-label">1. Dining area</label>
                                                        <textarea placeholder="Remarks" id="remarks18" name="remarks18" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q18" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q18" value="no">
                                              </td>
                                            </form>
                                            </tr>
                
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <label for="remarks19" class="form-label">2. Kitchen area<br>+ Dustbin<br>+ Cooker hood / Exhaust fan</label>
                                                            <textarea placeholder="Remarks" id="remarks19" name="remarks19" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                  </div>
                                                </td>
                                                
                                                <form style="float:right;">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div>
                                                            <input type="radio" id="yes" name="Q191" value="yes">
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="yes" name="Q192" value="yes">
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <div>
                                                            <input type="radio" id="no" name="Q191" value="no">
                                                        </div>
                                                        <div>
                                                            <input type="radio" id="no" name="Q192" value="no">
                                                        </div>
                                                        
                                                      </td>
                                                    </form>
                                                    
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <label for="remarks20" class="form-label">3. Hand washing area (with hand soap)</label>
                                                                <textarea placeholder="Remarks" id="remarks20" name="remarks20" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <form style="float:right;">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <input type="radio" id="yes" name="Q20" value="yes">
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <input type="radio" id="no" name="Q20" value="no">
                                                          </td>
                                                        </form>
                                                    </tr>
                                                
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                          <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <label for="remarks21" class="form-label">4. Dishwashing area</label>
                                                                    <textarea placeholder="Remarks" id="remarks21" name="remarks21" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <form style="float:right;">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input type="radio" id="yes" name="Q21" value="yes">
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <input type="radio" id="no" name="Q21" value="no">
                                                              </td>
                                                            </form>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                              <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <label for="remarks22" class="form-label">5. Storage area<br>+ Raw foods stored separately from ready-
                                                                        to-eat foods<br>+ Toxic/poisonous substances stored separately 
                                                                        from food<br>+ Good shelves condition<br>+ Halal and Haram items stored separately (if any)</label>
                                                                        <textarea placeholder="Remarks" id="remarks22" name="remarks22" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                </div>
                                                              </div>
                                                            </td>
                                                            
                                                            <form style="float:right;">
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div>
                                                                        <input type="radio" id="yes" name="Q221" value="yes">
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="yes" name="Q222" value="yes">
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="yes" name="Q223" value="yes">
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="yes" name="Q224" value="yes">
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                    <div>
                                                                        <input type="radio" id="no" name="Q221" value="no">
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="no" name="Q222" value="no">
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="no" name="Q223" value="no">
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" id="no" name="Q224" value="no">
                                                                    </div>
                                                                  </td>
                                                                </form>
                                                            </tr>

                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                  <div class="flex items-center">
                                                                    <div class="ml-4">
                                                                        <label for="remarks23" class="form-label">6. Packaging area</label>
                                                                            <textarea placeholder="Remarks" id="remarks23" name="remarks23" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                                <form style="float:right;">
                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                        <input type="radio" id="yes" name="Q23" value="yes">
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                        <input type="radio" id="no" name="Q23" value="no">
                                                                      </td>
                                                                    </form>
                                                                </tr>

                                                                <tr>
                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                      <div class="flex items-center">
                                                                        <div class="ml-4">
                                                                            <label for="remarks24" class="form-label">7. Chiller / Freezer<br>+ Halal and Haram items stored separately (if any)</label>
                                                                                <textarea placeholder="Remarks" id="remarks24" name="remarks24" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                        </div>
                                                                      </div>
                                                                    </td>
                                                                    <form style="float:right;">
                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                            <input type="radio" id="yes" name="Q24" value="yes">
                                                                        </td>
                                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                            <input type="radio" id="no" name="Q24" value="no">
                                                                          </td>
                                                                        </form>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                          <div class="flex items-center">
                                                                            <div class="ml-4">
                                                                                <label for="remarks25" class="form-label">8. Food Container</label>
                                                                                    <textarea placeholder="Remarks" id="remarks25" name="remarks25" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                            </div>
                                                                          </div>
                                                                        </td>
                                                                        <form style="float:right;">
                                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                                <input type="radio" id="yes" name="Q25" value="yes">
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                <input type="radio" id="no" name="Q25" value="no">
                                                                              </td>
                                                                            </form>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                              <div class="flex items-center">
                                                                                <div class="ml-4">
                                                                                    <label for="remarks26" class="form-label">9. Floor/wall/ceiling</label>
                                                                                        <textarea placeholder="Remarks" id="remarks26" name="remarks26" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                </div>
                                                                              </div>
                                                                            </td>
                                                                            <form style="float:right;">
                                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                                    <input type="radio" id="yes" name="Q26" value="yes">
                                                                                </td>
                                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                    <input type="radio" id="no" name="Q26" value="no">
                                                                                  </td>
                                                                                </form>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                                  <div class="flex items-center">
                                                                                    <div class="ml-4">
                                                                                        <label for="remarks27" class="form-label">10. Toilet</label>
                                                                                            <textarea placeholder="Remarks" id="remarks27" name="remarks27" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                    </div>
                                                                                  </div>
                                                                                </td>
                                                                                <form style="float:right;">
                                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                                        <input type="radio" id="yes" name="Q27" value="yes">
                                                                                    </td>
                                                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                        <input type="radio" id="no" name="Q27" value="no">
                                                                                      </td>
                                                                                    </form>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                                                      <div class="flex items-center">
                                                                                        <div class="ml-4">
                                                                                            <label for="remarks28" class="form-label">11. Dustbin<br>+ Closed dustbin with plastic bag</label>
                                                                                                <textarea placeholder="Remarks" id="remarks28" name="remarks28" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                        </div>
                                                                                      </div>
                                                                                    </td>
                                                                                    
                                                                                    <form style="float:right;">
                                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                                            <input type="radio" id="yes" name="Q28" value="yes">
                                                                                        </td>
                                                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                            <input type="radio" id="no" name="Q28" value="no">
                                                                                          </td>
                                                                                        </form>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                                                          <div class="flex items-center">
                                                                                            <div class="ml-4">
                                                                                                <label for="remarks29" class="form-label">12. Utensils (plates, glasses, spoons, forks, cups etc)</label>
                                                                                                    <textarea placeholder="Remarks" id="remarks29" name="remarks29" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                            </div>
                                                                                          </div>
                                                                                        </td>
                                                                                        
                                                                                        <form style="float:right;">
                                                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                                                <input type="radio" id="yes" name="Q29" value="yes">
                                                                                            </td>
                                                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                                <input type="radio" id="no" name="Q29" value="no">
                                                                                              </td>
                                                                                            </form>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                                              <div class="flex items-center">
                                                                                                <div class="ml-4">
                                                                                                    <label for="remarks30" class="form-label">13. Others:</label>
                                                                                                        <textarea placeholder="Remarks" id="remarks30" name="remarks30" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                                                </div>
                                                                                              </div>
                                                                                            </td>
                                                                                            
                                                                                            <form style="float:right;">
                                                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                                                    <input type="radio" id="yes" name="Q30" value="yes">
                                                                                                </td>
                                                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                                                    <input type="radio" id="no" name="Q30" value="no">
                                                                                                  </td>
                                                                                                </form>
                                                                                            </tr>

                                                                        
                                
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                    </div>
                </div>
				</div>

                  <!-- End Step 6 -->

                  <!-- Start Step 7 -->
                  <div x-show.transition.in="step === 7">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">
                            
                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks31" class="form-label">1. Fresh</label>
                                                            <textarea placeholder="Remarks" id="remarks31" name="remarks31" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q31" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q31" value="no">
                                              </td>
                                            </form>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="mb-3">
                                                            <label for="remarks32" class="form-label">2. High Quality</label>
                                                                <textarea placeholder="Remarks" id="remarks32" name="remarks32" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </td>
                                                <form style="float:right;">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="radio" id="yes" name="Q32" value="yes">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <input type="radio" id="no" name="Q32" value="no">
                                                  </td>
                                                </form>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="mb-3">
                                                                <label for="remarks33" class="form-label">3. Reasonable Price</label>
                                                                    <textarea placeholder="Remarks" id="remarks33" name="remarks33" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <form style="float:right;">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="radio" id="yes" name="Q33" value="yes">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <input type="radio" id="no" name="Q33" value="no">
                                                      </td>
                                                    </form>
                                                    </tr>

                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                          <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="mb-3">
                                                                    <label for="remarks34" class="form-label">4. Wrapped / Covered</label>
                                                                        <textarea placeholder="Remarks" id="remarks34" name="remarks34" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <form style="float:right;">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <input type="radio" id="yes" name="Q34" value="yes">
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <input type="radio" id="no" name="Q34" value="no">
                                                          </td>
                                                        </form>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                              <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="mb-3">
                                                                        <label for="remarks35" class="form-label">5. Expired date</label>
                                                                            <textarea placeholder="Remarks" id="remarks35" name="remarks35" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </td>
                                                            <form style="float:right;">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input type="radio" id="yes" name="Q35" value="yes">
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <input type="radio" id="no" name="Q35" value="no">
                                                              </td>
                                                            </form>
                                                            </tr>

                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                  <div class="flex items-center">
                                                                    <div class="ml-4">
                                                                        <div class="mb-3">
                                                                            <label for="remarks36" class="form-label">6. Others:
                                                                                <input type="text" id="others36" name="others36" placeholder="Others" class="border-gray-300 rounded-md" style="width:200px;">
                                                                                </label>
                                                                                <textarea placeholder="Remarks" id="remarks36" name="remarks36" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                                <form style="float:right;">
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="radio" id="yes" name="Q36" value="yes">
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                    <input type="radio" id="no" name="Q36" value="no">
                                                                  </td>
                                                                </form>
                                                                </tr>

                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
					</div>
                  <!-- End Step 7 -->

                  <!-- Start Step 8 -->
                  <div x-show.transition.in="step === 8">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">
                            
                            <div class="flex flex-col text-left w-full">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                      <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 justify-center">
                                          <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                            
                                          </tr>
                                        </thead>
                        
                                        <tbody class="bg-white divide-y divide-gray-200">
                              
                                          
                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks37" class="form-label">1. Cleaning egg</label>
                                                            <textarea placeholder="Remarks" id="remarks37" name="remarks37" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q37" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q37" value="no">
                                              </td>
                                            </form>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="mb-3">
                                                            <label for="remarks38" class="form-label">2. Washing vegetables and fruits</label>
                                                                <textarea placeholder="Remarks" id="remarks38" name="remarks38" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </td>
                                                <form style="float:right;">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="radio" id="yes" name="Q38" value="yes">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <input type="radio" id="no" name="Q38" value="no">
                                                  </td>
                                                </form>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="mb-3">
                                                                <label for="remarks39" class="form-label">3. Cleaning and washing chicken, fish, meat etc.</label>
                                                                    <textarea placeholder="Remarks" id="remarks39" name="remarks39" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <form style="float:right;">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="radio" id="yes" name="Q39" value="yes">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <input type="radio" id="no" name="Q39" value="no">
                                                      </td>
                                                    </form>
                                                    </tr>

                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                          <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="mb-3">
                                                                    <label for="remarks40" class="form-label">4. Cleaning utensils before and after used</label>
                                                                        <textarea placeholder="Remarks" id="remarks40" name="remarks40" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <form style="float:right;">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <input type="radio" id="yes" name="Q40" value="yes">
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <input type="radio" id="no" name="Q40" value="no">
                                                          </td>
                                                        </form>
                                                        </tr>

                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                              <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="mb-3">
                                                                        <label for="remarks41" class="form-label">5. Rinsing rice with clean water before cooking</label>
                                                                            <textarea placeholder="Remarks" id="remarks41" name="remarks41" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </td>
                                                            <form style="float:right;">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input type="radio" id="yes" name="Q41" value="yes">
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <input type="radio" id="no" name="Q41" value="no">
                                                              </td>
                                                            </form>
                                                            </tr>

                                                      <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                              <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="mb-3">
                                                                        <label for="remarks42" class="form-label">6. Hygiene</label>
                                                                            <textarea placeholder="Remarks" id="remarks42" name="remarks42" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </td>
                                                            <form style="float:right;">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input type="radio" id="yes" name="Q42" value="yes">
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <input type="radio" id="no" name="Q42" value="no">
                                                              </td>
                                                            </form>
                                                            </tr>

                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                              <div class="flex items-center">
                                                                <div class="ml-4">
                                                                    <div class="mb-3">
                                                                        <label for="remarks43" class="form-label">7. Follow the right method of food preparation</label>
                                                                            <textarea placeholder="Remarks" id="remarks43" name="remarks43" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </td>
                                                            <form style="float:right;">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <input type="radio" id="yes" name="Q43" value="yes">
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <input type="radio" id="no" name="Q43" value="no">
                                                              </td>
                                                            </form>
                                                            </tr>

                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                  <div class="flex items-center">
                                                                    <div class="ml-4">
                                                                        <div class="mb-3">
                                                                            <label for="remarks44" class="form-label">8. Others:
                                                                                <input type="text" id="others44" name="others44" placeholder="Others" class="border-gray-300 rounded-md" style="width:200px;">
                                                                                </label>
                                                                                <textarea placeholder="Remarks" id="remarks44" name="remarks44" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </td>
                                                                <form style="float:right;">
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="radio" id="yes" name="Q44" value="yes">
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                    <input type="radio" id="no" name="Q44" value="no">
                                                                  </td>
                                                                </form>
                                                                </tr>

                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
				 </div>
                  <!-- End Step 8 -->

                  <!-- Start Step 9 -->
                  <div x-show.transition.in="step === 9">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">
                            
                          <div class="flex flex-col text-left w-full">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                  <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50 justify-center">
                                      <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Does the premise satisfy the following criteria?</th> 
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Yes</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                        
                                      </tr>
                                    </thead>
                    
                                    <tbody class="bg-white divide-y divide-gray-200">
                          
                                      
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="mb-3">
                                                    <label for="remarks45" class="form-label">1. Tangkal Pelaris or any superstition items</label>
                                                        <textarea placeholder="Remarks" id="remarks45" name="remarks45" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                </div>
                                            </div>
                                          </div>
                                        </td>
                                        <form style="float:right;">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="radio" id="yes" name="Q45" value="yes">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <input type="radio" id="no" name="Q45" value="no">
                                          </td>
                                        </form>
                                        </tr>

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="mb-3">
                                                        <label for="remarks46" class="form-label">2. Frequency of garbage removal adequate to
                                                          maintain the <br>premises in the sanitary condition</label>
                                                            <textarea placeholder="Remarks" id="remarks46" name="remarks46" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                    </div>
                                                </div>
                                              </div>
                                            </td>
                                            <form style="float:right;">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="radio" id="yes" name="Q46" value="yes">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <input type="radio" id="no" name="Q46" value="no">
                                              </td>
                                            </form>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="mb-3">
                                                            <label for="remarks47" class="form-label">3. Good waste management, ventilation & 
                                                              drainage system</label>
                                                                <textarea placeholder="Remarks" id="remarks47" name="remarks47" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </td>
                                                <form style="float:right;">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="radio" id="yes" name="Q47" value="yes">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <input type="radio" id="no" name="Q47" value="no">
                                                  </td>
                                                </form>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="mb-3">
                                                                <label for="remarks48" class="form-label">4. No expired food item</label>
                                                                    <textarea placeholder="Remarks" id="remarks48" name="remarks48" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="1" style="width:400px;"></textarea>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <form style="float:right;">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="radio" id="yes" name="Q48" value="yes">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <input type="radio" id="no" name="Q48" value="no">
                                                      </td>
                                                    </form>
                                                    </tr>

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
				          </div>
                  <!-- End Step 9 -->

                  <!-- Start Step 10 -->
                  <div x-show.transition.in="step === 10">
                    <div class="grid grid-cols-10 gap-6">
                        <div class="col-span-6 sm:col-span-10">
                            
                            <label for="comment" class="font-semibold leading-none">Comment:</label>
                            <div class="form-group col-md-12">
                                <textarea id="comment" name="comment" cols="40" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="4" style="width:400px;"></textarea>
                            </div><br>

                            <label for="correctiveaction" class="font-semibold leading-none">Corrective Action:</label>
                            <div class="form-group col-md-12">
                                <textarea id="correctiveaction" name="correctiveaction" cols="40" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="remarks" rows="4" style="width:400px;"></textarea>
                            </div>
                                  
                        </div>
                    </div>
				</div>
                  <!-- End Step 10 -->

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
                        x-show="step < 10"
                        @click="step++"
                        class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none" 
                      >Next</button>

                      <button
                        type="submit"
                        @click="step = 'complete'"
                        x-show="step === 10"
                        class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none" >Submit</button>
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
