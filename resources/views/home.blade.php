@extends('layouts.app')
@section('content')

<main class="" style="background-image:url(../images/management.jpg); height:400px; background-color:rgba(0, 0, 255, 0.276) background-repeat: no-repeat; background-size:cover;">
  {{-- <img class="w-full" src="/images/management.jpg" alt="hospital logo"> --}}
<div class="flex justify-center"> 
    <div class=" p-6 rounded-lg">
  <h1 class="text-center bold text-black mt-20 py-10">You'll Love the Way we'll Care for you!</h1>
  <h5 class="text-center">Emergency?</h5>
  <div class="flex justify-center">
<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded
font-medium">Take Appointment</button>
  </div>
</div>
</div>
</main>
@endsection