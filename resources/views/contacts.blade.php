@extends('layouts.app')

@section('content')
 
@include('partials.header')
<div class="py-24">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email Address
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Date Time Created
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- row -->
            @foreach($emails as $email)
            <tr class="bg-white">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $email->id }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $email->email }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $email->created_at }}
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>
@include('partials.footer')
@endsection