@extends('layout.base')
@section('content')

<div class="mt-6 flex w-96 mx-auto flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="p-6">

    <!-- firstname -->
    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Full Name</strong>
      <div id="txt-view-fullname">{{$Student['firstname']}} {{$Student['lastname']}}</div>
    </h5>

    <!-- email -->


    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Email</strong>
      <div id="txt-view-email">{{ $Student->email }}</div>
    </h5>


    <!-- phone -->
    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Phone</strong>
      <div id="txt-view-phone">{{ $Student->phone }}</div>
    </h5>
  </div>

  
  <div class="p-6 pt-0">
    <a href="{{ url('/students') }}" class="bg-red-400 p-3 border-rounded w-full" id="btn-back">Back</a>
  </div>
</div>

@endsection