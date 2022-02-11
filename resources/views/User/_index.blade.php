@extends('layouts.app')

@section('content')

<section class="content">


     {{-- <p>Register Process</p><br>
            <table class="min-w-full divide-y divide-gray-200">
				<thead class="bg-yellow-50 justify-center">
				  <tr>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Document Review</th> 
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Food Premise</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program Monitoring</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity Monitoring</th>
					
				  </tr>
				</thead>
            </table> --}}
        
        
        <div>
            
            <p class="text-x1 font-bold p-2">List of All Reports</p>
            <div class="flex flex-col text-left w-full">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 justify-center">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reports</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">View</th>
                            
                          </tr>
                        </thead>
        
                        <tbody class="bg-white divide-y divide-gray-200">
              
                          {{-- @foreach($clinics as $clinic)  --}}
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                1
                              </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">Document Review Reports</div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                              <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                      <path fill="currentColor" 
                                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                  </svg>
                                  <a href="/manage-program/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                              </button>
                              </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2
                                  </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">Food Premise Inspection Reports</div>
                                    </div>
                                  </div>
                                </td>
                                
                                
            
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                  <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                          <path fill="currentColor" 
                                          d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                      </svg>
                                      <a href="/manage-program/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                  </button>
                                  
                                  </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        3
                                      </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="flex items-center">
                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">Patient Referral Report</div>
                                        </div>
                                      </div>
                                    </td>
                                    
                
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                      <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                              <path fill="currentColor" 
                                              d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                          </svg>
                                          <a href="/manage-referral/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                      </button>
                                      
                                      </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        4
                                        </td>

                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Program Monitoring Reports</div>
                                          </div>
                                        </div>
                                      </td>
                                      
                                      
                  
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                <path fill="currentColor" 
                                                d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                            </svg>
                                            <a href="/manage-program/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                        </button>
                                        
                                        </td>
                                      </tr>

                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            5
                                          </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">Shariah Compliance Activity Monitoring Reports</div>
                                            </div>
                                          </div>
                                        </td>
                                        
                                        
                    
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                  <path fill="currentColor" 
                                                  d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                              </svg>
                                              <a href="/manage-program/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                          </button>
                                          
                                          </td>
                                        </tr>

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                6
                                              </td>
                                          <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                              <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Complaint Reports</div>
                                              </div>
                                            </div>
                                          </td>
                                         
                                          
                      
                                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor" 
                                                    d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                </svg>
                                                <a href="/manage-complaint/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                            </button>
                                            
                                            </td>
                                          </tr>

                                          <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                7
                                              </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                              <div class="flex items-center">
                                                <div class="ml-4">
                                                  <div class="text-sm font-medium text-gray-900">Terms and Condition Reports</div>
                                                </div>
                                              </div>
                                            </td>
                                           
                                            
                        
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                              <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                      <path fill="currentColor" 
                                                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                  </svg>
                                                  <a href="/manage-terms/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                              </button>
                                              
                                              </td>
                                            </tr>
                                    
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    8
                                                  </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                  <div class="flex items-center">
                                                    <div class="ml-4">
                                                      <div class="text-sm font-medium text-gray-900">Shariah Liaison Officer Reports</div>
                                                    </div>
                                                  </div>
                                                </td>
                                               
                                                
                            
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                  <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                                      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                          <path fill="currentColor" 
                                                          d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                      </svg>
                                                      <a href="/manage-sloreport/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                                  </button>
                                                  
                                                  </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        9
                                                      </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="ml-4">
                                                          <div class="text-sm font-medium text-gray-900">Shariah Clinic Report</div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                   
                                                    
                                
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                      <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                                          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                              <path fill="currentColor" 
                                                              d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                          </svg>
                                                          <a href="/manage-clinic/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                                      </button>
                                                      
                                                      </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            10
                                                          </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                          <div class="flex items-center">
                                                            <div class="ml-4">
                                                              <div class="text-sm font-medium text-gray-900">Speaker Consent Report</div>
                                                            </div>
                                                          </div>
                                                        </td>
                                                       
                                                        
                                    
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                          <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                                                              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                                  <path fill="currentColor" 
                                                                  d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                              </svg>
                                                              <a href="/manage-speaker/view/all" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                                                          </button>
                                                          
                                                          </td>
                                                        </tr>

                                    
                
                            {{-- @endforeach --}}
                
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
        </div> 
      </section>
    @endsection