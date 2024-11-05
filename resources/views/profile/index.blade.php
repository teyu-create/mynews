@extends('layouts.profile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
              <div class="text-center">
                  <div class="my-5">
                     <h1>{{ $headline->name }}</h1>
                  </div>
                 <hr color="#c0c0c0">
                 <p>{{ $headline->gender }}</p>
                 <hr color="#c0c0c0">
                 <p>{{ $headline->hobby }}</p>
                 <hr color="#c0c0c0">
                 <div class="row">
                     <div class="mx-auto p-2" style="width: 700px;">
                         <div class="border border-white">
                             <div class="my-5">
                                 <p>{{ Str::limit($headline->introduction,1500) }}</p>
                             </div>
                         </div>
                     </div>
                  </div>
              </div>
    </div>
@endsection