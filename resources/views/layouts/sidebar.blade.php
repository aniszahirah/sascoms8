@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<div class="h-screen bg-yellow-50 fixed w-72 filter drop-shadow-xl">
  

        <nav aria-label="Main" class="flex-1 w-72 pt-10 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
            <!-- Dashboards links -->
            <div x-data="{ isActive: false, open: false}">
              <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
              <a
                href="{{ route('dashboard') }}"
                @click="$event.preventDefault(); open = !open"
                class="flex items-center p-2 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                <span aria-hidden="true">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                  </svg>
                </span>
                <span class="ml-4 text-lg font-semibold"> Dashboard </span>
              </a>

            <!-- Create report links -->
            <div x-data="{ isActive: false, open: false }">
              <!-- active classes 'bg-indigo-100 dark:bg-indigo-600' -->
              <a
                href="#"
                @click="$event.preventDefault(); open = !open"
                class="flex items-center p-2 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                :class="{ 'bg-indigo-100 dark:bg-indigo-600': isActive || open }"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                <span aria-hidden="true">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                    />
                  </svg>
                </span>
                <span class="ml-4 text-lg font-semibold"> Create Report </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg
                    class="w-4 h-4 transition-transform transform"
                    :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="{{ route('document-review.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Document Review
                </a>
                <a href="{{ route('food.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Food Premise Inspection
                </a>
                <a href="{{ route('referral.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Referral Form
                </a>
                <a href="{{ route('program.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Program Monitoring
                </a>
                <a href="#" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Activity Monitoring
                </a>
                <a href="{{ route('complaint.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Complaint Form
                </a>
                <a href="{{ route('terms.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Terms and Condition
                </a>
                <a href="{{ route('speaker.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Speaker Consent Form
                </a>
                @if(Auth::user()->hasRole('dsc'))
                <a href="{{ route('slo-report.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  SLO Report
                </a>
                @else
                @endif
                <a href="{{ route('clinic.create') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  Shariah Clinic
                </a>
              </div>
            </div>

            @php

                $allreport = (auth()->user()->allreport == 1);
                $alluser = (auth()->user()->alluser == 1);
                $assignstaff = (auth()->user()->assignstaff == 1);
                $reviewreport = (auth()->user()->reviewreport == 1);
                $reviewstatistic = (auth()->user()->reviewstatistic == 1);
                $useraccess = (auth()->user()->useraccess == 1);

              @endphp

              @if($reviewreport == true)
            <!-- Manage report links -->
            <div x-data="{ isActive: false, open: false }">
              <!-- active classes 'bg-indigo-100 dark:bg-indigo-600' -->
              <a
                href="#"
                @click="$event.preventDefault(); open = !open"
                class="flex items-center p-2 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                :class="{ 'bg-indigo-100 dark:bg-indigo-600': isActive || open }"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                <span aria-hidden="true">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                  </svg>
                </span>

                <span class="ml-4 text-lg font-semibold"> Manage Report </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg
                    class="w-4 h-4 transition-transform transform"
                    :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Document Review
                </a>
                <a href="#" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Food Premise Inspection
                </a>
                <a href="{{ route('referral.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Referral Form
                </a>
                <a href="{{ route('program.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Program Monitoring
                </a>
                <a href="#" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Activity Monitoring
                </a>
                <a href="{{ route('complaint.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Complaint Form
                </a>
                <a href="{{ route('terms.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Terms and Condition
                </a>
                <a href="{{ route('slo-report.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  SLO Report
                </a>
                <a href="{{ route('clinic.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Shariah Clinic
                </a>
                <a href="{{ route('speaker.view-all') }}" role="menuitem" class="block p-0 text-base transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                  Speaker Consent Form
                </a>
              </div>
            </div>
            @else
            @endif

            @if($reviewreport == true)
            <!-- Report review task links -->
            <div x-data="{ isActive: true, open: true}">
              <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
              <a href="{{ route('view.task') }}" class="flex items-center p-2 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                role="button" >
                <span aria-hidden="true">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor" >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </span>
                <span class="ml-4 text-lg font-semibold">My Tasks</span>
              </a>
            </div>
            @else
            @endif

            <!-- Report history links -->
            <div >
              <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
              <a href="{{ route('report.history') }}"
                class="flex items-center p-2 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                role="button" >
                <span aria-hidden="true">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor" >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </span>
                <span class="ml-4 text-lg font-semibold">My Reports</span>
              </a>
            </div>

            @if($alluser == true )
            <!-- Manage staff links -->
            <div x-data="{ isActive: false, open: false}">
              <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
              <a
                href="#"
                @click="$event.preventDefault(); open = !open"
                class="flex items-center p-2 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span aria-hidden="true">
                  <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                  </svg>
                </span>
                <span class="ml-4 text-lg font-semibold"> Manage Staff </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg
                    class="w-4 h-4 transition-transform transform"
                    :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a
                  href="{{ route('user.view') }}"
                  role="menuitem"
                  class="block p-0 text-base transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                  All Staff
                </a>
              </div>
            </div>
            @else
            @endif
            
          </nav>
       
    </div>