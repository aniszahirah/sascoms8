@extends('layouts.app')

@section('content')

<div class="flex flex-col text-left w-full pr-6">
<div class="flex px-6 py-3 text-2xl font-bold">
    My Tasks
</div>

<div class="rounded border w-full mx-auto mt-4">
    
  <!-- Tabs -->
  <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
    <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Document Review</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Food Premise Inspection</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Referral Form</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#fourth">Program Monitoring</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#fifth">Activity Monitoring</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#sixth">Complaint Form</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#seventh">Terms and Condition</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#eightth">SLO Report</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#ninth">Shariah Clinic</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#tenth">Speaker Consent Form</a></li>
  </ul>

  <!-- Tab Contents -->
  <div id="tab-contents">
    <div id="first" class="p-4">Document Review</div>
    <div id="second" class="hidden p-4">Second tab</div>
    <div id="third" class="hidden p-4">Third tab</div>
    <div id="fourth" class="hidden p-4">Fourth tab</div>
    <div id="fifth" class="hidden p-4">Fourth tab
    </div>
    <div id="sixth" class="hidden p-4">
    <div class="flex flex-col text-left w-full">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">   
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 justify-center">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">Report ID</th> 
                    <th scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">Complaint Type</th>
                    <th scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">Complaint Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">Actions</th>
                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span>
                    </th>
                    </tr>
                </thead>

                @foreach($complaints as $complaint)
                <tbody class="bg-white divide-y divide-gray-200">

                   
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-base font-semibold">
                                {{ $complaint->id }}
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span
                        class="text-base font-semibold"
                        >
                            {{ $complaint->complaint_type }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span
                        class="text-base font-semibold"
                        >
                            {{ $complaint->complaint_date }}
                        </span>
                    </td>
                    <td class="px-6 py-1 whitespace-nowrap">
                        <span
                        class="px-4 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-800"
                        >
                            {{ $complaint->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" 
                                d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                            </svg>
                            <a href="" class="px-2 items-center text-indigo-600 hover:text-indigo-900">Review</a>
                        </button>
                        <button class="bg-green-200 hover:bg-green-300 text-green-800 hover:text-green-900 font-bold py-1 px-2 rounded inline-flex items-center">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
                            </svg>
                            <a href="#" class="px-2 items-center text-green-800 hover:text-green-900">Download</a>
                        </button>
                    </td>
                    </tr>

    

                </tbody>
                @endforeach
                </table>

                <div class="row m-2">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div id="seventth" class="hidden p-4">
      Fourth tab
    </div>
    <div id="eightth" class="hidden p-4">
      Fourth tab
    </div>
    <div id="ninth" class="hidden p-4">
      Fourth tab
    </div>
    <div id="tenth" class="hidden p-4">
      Fourth tab
    </div>
    
  </div>
</div>
</div>

<script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
    toggler.addEventListener("click", function(e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contents");

        for (let i = 0; i < tabContents.children.length; i++) {
        
        tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");
        
        }
        e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
    });
    });

</script>



@endsection