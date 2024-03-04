<x-app-layout>

    <x-slot name="header">
        @include("admin.admincss")
    </x-slot>

    <div class="container-scroller">
        @include("admin.navbar")

        <div class="content-wrapper">
            <h1 class="page-title">Reservation Details</h1>

            <div class="table-container">
                <table class="reservation-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Guests</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $reservation)
                            <tr>
                                <td>{{ $reservation->date }}</td>
                                <td>{{ $reservation->time }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->number }}</td>
                                <td>{{ $reservation->guest }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <x-slot name="footer">
        @include("admin.adminscript")
    </x-slot>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-scroller {
            margin-right: -150px;
        }

        .content-wrapper {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .page-title {
            color: #007bff;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        .reservation-table {
            width: 90%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            color: black;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</x-app-layout>
