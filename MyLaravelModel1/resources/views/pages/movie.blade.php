@extends('layouts.main-layout');

@section('sectionMovie')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1>
                    {{ $oneMovie -> title }}
                </h1>

                <ul>
                    <li>
                        titolo originale: {{ $oneMovie -> original_title }}
                    </li>

                    <li>
                        nazionalità: {{ $oneMovie -> nationality }}
                    </li>

                    <li>
                        data di rilascio nelle sale: {{ $oneMovie -> date }}
                    </li>

                    <li>
                        voto: {{ $oneMovie -> vote }}
                    </li>
                </ul>

                <a href="{{ route('home') }}">
                    BacK to watch list
                </a>
            </div>
        </div>
    </div>

@endsection
