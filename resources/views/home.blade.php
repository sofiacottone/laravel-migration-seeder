@extends('layouts.app')

@section('main-content')
    <div class="container-fluid ms-jumbo"></div>
    <div class="container pt-4">
        <table class="table table-hover caption-top">
            <caption class="h3 fw-bolder text-white">Departures</caption>
            <thead>
                <tr>
                    <th scope="col" class="text-capitalize">company</th>
                    <th scope="col" class="text-capitalize">departure station</th>
                    <th scope="col" class="text-capitalize">arrival station</th>
                    <th scope="col" class="text-capitalize text-center">departure time</th>
                    <th scope="col" class="text-capitalize text-center">arrival time</th>
                    <th scope="col" class="text-capitalize text-center">train code</th>
                    <th scope="col" class="text-capitalize text-center">carriages</th>
                    <th scope="col" class="text-capitalize text-center">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td scope="row">{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td class="text-center">{{ $train->departure_time }}</td>
                        <td class="text-center">{{ $train->arrival_time }}</td>
                        <td class="text-center">{{ $train->train_code }}</td>
                        <td class="text-center">{{ $train->carriages_number }}</td>

                        @if ($train->is_ontime === 1)
                            <td class="text-center text-success">On time</td>
                        @elseif($train->is_canceled === 1)
                            <td class="text-center text-danger">Canceled</td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
