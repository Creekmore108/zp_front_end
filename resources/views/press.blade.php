@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="pt-16">
  <div class=" lg:inset-0  flex">
      <div class="hidden:xs">
        <img src="/img/newsworthy.png"  width="400" height="400" alt="" class="mt-0">
      </div>

      <div class=" md:pl-8 mb-0 sm:pl-0 xs:pl-0">
        <div class="text-base mb-12 max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0 md:mt-10 sm:mt-0 xs:mt-0 bg-yellow-600 bg-opacity-75 p-5 rounded-2xl">
        <!-- <div class="relative inset-y-0 left-1/2 w-full rounded-r-3xl lg:right-72 bg-pink-900">1</div> -->
          <x-dot-block/>
        
          <h3 class=" text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl mt-12">In the News</h3>
          <p class="mt-8 text-lg text-gray-500">We are a new company and haven't made the news yet</p>
            <div class="mt-5 prose  text-gray-900">
              <p>Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.</p>
              <p>Bibendum eu nulla feugiat justo, elit adipiscing. Ut tristique sit nisi lorem pulvinar. Urna, laoreet fusce nibh leo. Dictum et et et sit. Faucibus sed non gravida lectus dignissim imperdiet a.</p>
              
              <ul>
                <li>Quis elit egestas venenatis mattis dignissim.</li>
                <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
              </ul>
              <h3>How we’re different</h3>
              <p>Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet. </p>
              
            </div>
            
        </div>
      
      </div>
    </div>
  </div> 
  </div>
@include('partials.footer')
@endsection