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
                First Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Organization
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Phone Number
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Comment
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Referral
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- row -->
            @foreach($contacts as $contact)
            <tr class="bg-white">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              {{ $contact->first_name }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $contact->last_name }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $contact->email }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $contact->organization }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $contact->phone }}
              </td>
              <td class="px-6 py-4 text-sm text-gray-500">
              {{ $contact->comment }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $contact->referral }}
              </td>
              
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@include('partials.footer')
@endsection