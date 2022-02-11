@extends('admin.dashboard')

@section('content')

<div class="flex flex-col text-left w-full">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

      <div class="px-6 py-3 text-2xl font-bold">
      Update User Access
      </div>
             
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"> 

        <table class="table-fixed min-w-full divide-y divide-gray-200">
          <tr>
              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Staff ID
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
              {{ $user->id }}
              </td>

              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Staff Name
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
              {{ $user->name }}
              </td>

              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Department
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
              {{ $user->dept }}
              </td>
          </tr>
          <tr>
              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Role
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
              {{ $user->display_name }}
              </td>

              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Position
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
              {{ $user->position }}
              </td>

              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Email
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold tracking-wider">
              {{ $user->email }}
              </td>
              
          </tr>

          <tr>
              <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              Contact No
              </td>

              <td scope="col" class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
              {{ $user->contact_no }}
              </td>
              
          </tr>

          <tr>

            <td scope="col" class="px-6 py-3 bg-gray-100 justify-center text-left text-base font-bold uppercase tracking-wider">
              User Access
            </td>

            
            <form action="{{ url('update-user-access/'.$user->id) }}" method="POST">
                @csrf

                <td>

                    <div class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
                        <label class="inline-flex items-start mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5" name="allreport" value="1" {{ $user->allreport == 1 ? 'checked' : '' }}><span class="ml-2">All Report</span>
                        </label> 

                        <label class="inline-flex items-start mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5" name="alluser" value="1" {{ $user->alluser == 1 ? 'checked' : '' }}><span class="ml-2">All User</span>
                        </label>
                    </div>

                </td>

                <td>

                    <div class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
                        <label class="inline-flex items-start mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5" name="reviewreport" value="1" {{ $user->reviewreport == 1 ? 'checked' : '' }}><span class="ml-2">Review Report</span>
                        </label>

                        <label class="inline-flex items-start mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5" name="assignstaff" value="1" {{ $user->assignstaff == 1 ? 'checked' : '' }}><span class="ml-2">Assign Staff</span>
                        </label>
                    </div>

                </td>

                <td>

                    <div class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider">
                        <label class="inline-flex items-start mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5" name="reviewstatistic" value="1" {{ $user->reviewstatistic == 1 ? 'checked' : '' }}><span class="ml-2">Review Statistic</span>
                        </label>

                        <label class="inline-flex items-start mt-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5" name="useraccess" value="1" {{ $user->useraccess == 1 ? 'checked' : '' }}><span class="ml-2">User Access</span>
                        </label>
                    </div>

                </td>

           

          </tr>

        </table>

      </div>

        <button type="submit" class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded flex inline-flex justify-end items-center">
            <svg style="width:24px;height:24px" 
                viewBox="0 0 24 24">
                <path fill="currentColor" 
                d="M5,3C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19H5V5H12V3H5M17.78,4C17.61,4 17.43,4.07 17.3,4.2L16.08,5.41L18.58,7.91L19.8,6.7C20.06,6.44 20.06,6 19.8,5.75L18.25,4.2C18.12,4.07 17.95,4 17.78,4M15.37,6.12L8,13.5V16H10.5L17.87,8.62L15.37,6.12Z" />
            </svg>
            Update User Access
        </button>

        </form>
    </div>
  </div>
</div>


@endsection