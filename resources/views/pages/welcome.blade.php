@extends('layouts.app')

@section('mainSection')
<main>
    <div class="comic-container flex justify-center">
        
        <div class="comics container flex flex-wrap">
            @foreach($comics as $element)
            <div class="comic bg-white rounded">
                <figure>
                    <img src="{{ $element['thumb'] }}">
                </figure>

                <div>
                    <h4 class="text-center text-bold">
                        {{ $element['title'] }}
                    </h4>
                    <p class="text-center">{{ $element['price'] }}</p>
                </div>
            </div>
            @endforeach
       </div>

    </div>


</main>
@endsection
