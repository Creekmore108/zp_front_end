@extends('layouts.app')

@section('content')
 
@include('partials.header')
<div class="py-20">
            
  <!-- Hero section -->
    @include('partials.hero')
  
  <!-- Logo Cloud -->
    @include('partials.logocloud')

  <!-- Alternating Feature Sections -->
    @include('partials.altfeatures')

  <!-- Gradient Feature Section -->
    @include('partials.features')

  <!-- FAQ section -->
    @include('partials.faq')

  <!-- Pricing Section -->
    @include('partials.pricing')

  <!-- Contact Section -->
    @include('partials.contact')
    
    <!-- CTA Section -->
    @include('partials.cta')
</div>
    <!-- footer -->
    @include('partials.footer') 
    @include('sweetalert::alert') 
    
@endsection