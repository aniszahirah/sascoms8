@extends('user.dashboard')

@section('content')

<section class="content">
    <div style="text-align: center;">
        <img src="{{ asset('images/iium-logo.jpg') }}" width="200" alt=""><br>
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM</h4>
        <h4>DEPARTMENT OF SHARIAH COMPLIANCE</h4>
        <h4>FOOD INSPECTION FORM</h4>
      </div><br>
    
	  {{-- <div class="flex flex-col text-left w-full">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			<div
			  class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
			>
			  <table class="min-w-full divide-y divide-gray-200">
				<thead class="bg-gray-50 justify-center">
				  <tr>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th> 
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Organizer</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PIC</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Briefing person</th>
                    
					<th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
				  </tr>
				</thead>
				<tbody class="bg-white divide-y divide-gray-200">
	  
				  @foreach($food as $food)
				  <tr>
					<td class="px-6 py-4 whitespace-nowrap">
					  <div class="flex items-center">
						<div class="ml-4">
						  <div class="text-sm font-medium text-gray-900">{{ $program->id }}</div>
						</div>
					  </div>
					</td>
					<td class="px-6 py-4 whitespace-nowrap"><span class="text-sm font-medium text-gray-900">{{ $food->name }}</span></td>
					<td class="px-6 py-4 whitespace-nowrap"><span class="text-sm font-medium text-gray-900">{{ $food->date }}</span></td>
					<td class="px-6 py-1 whitespace-nowrap"><span class="text-sm font-medium text-gray-900">{{ $food->organizer }}</span></td>
					<td class="px-6 py-1 whitespace-nowrap"><span class="text-sm font-medium text-gray-900">{{ $food->pic }}</span></td>
                    <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm font-medium text-gray-900">{{ $food->briefing_person }}</span></td>
					
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
					  <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
						  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
							  <path fill="currentColor" 
							  d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
						  </svg>
						  <a href="{{ action('App\Http\Controllers\Form\FoodPremiseController@view', $food->id) }}" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
					  </button>
					  <button class="bg-green-200 hover:bg-green-300 text-green-800 hover:text-green-900 font-bold py-1 px-2 rounded inline-flex items-center">
						  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
							  <path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
							</svg>
							<a href ="{{ action('App\Http\Controllers\Form\FoodPremiseController@pdf', $food->id) }}" class="btn btn-danger" >Download PDF</a>
						</button>
					  </td>
					</tr>
		
					@endforeach
		
				  </tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div> --}}

</section>

<style>

body{
	font-size: 16px;
}
table {
	font-size: 16px;
	table-layout:fixed;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
th {
	font-weight: bold;
}

</style>
@endsection
