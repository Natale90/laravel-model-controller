@extends('layouts.main-layout')

@section('sectionHome')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Welcome home
                </h1>

                <p>
                    this is your watch list
                </p>

                <ul>
                    @foreach ($movies as $movie)
                        <li>
                            <a href="{{ route('details', $movie -> id) }}">
                                {{ $movie -> title }}                                
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
