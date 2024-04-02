<x-app-layout>

    <x-slot name="header">
        @include("admin.admincss")
    </x-slot>

    <div class="container-scroller">
        @include("admin.navbar")

        <div class="content-wrapper">
            <h1 class="page-title">Захиалгын мэдээлэл</h1>

            <div class="table-container">
                <!-- Display flash message if it exists -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" id="success-alert" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="reservation-table">
                    <thead>
                        <tr>
                            <th>Өдөр</th>
                            <th>Цаг</th>
                            <th>Нэр</th>
                            <th>Дугаар</th>
                            <th>Хүний тоо</th>
                            <th>Үйлдэл</th> <!-- Add Delete column header -->
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
                                <td>
                                    <!-- Add a delete button -->
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Устгах</button>
                                    </form>
                                </td>
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

    <script>
        // Hide success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000);
    </script>

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
