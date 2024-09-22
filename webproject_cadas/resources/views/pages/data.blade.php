@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DATA</title>
    </head>

    <body>

        <div class="data-container">
            <h1>Collected Data</h1>

            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date Collected</th>
                            <th>Location</th>
                            <th>Data Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Migration Study - Group A</td>
                            <td>2024-09-01</td>
                            <td>Chitwan</td>
                            <td>Initial data on family migration impact in rural areas.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Migration Study - Group B</td>
                            <td>2024-09-02</td>
                            <td>Lumbini</td>
                            <td>Survey data on child development outcomes post-migration.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Migration Study - Group C</td>
                            <td>2024-09-03</td>
                            <td>Parsa</td>
                            <td>Focus group discussions on parental migration effects.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Migration Study - Group D</td>
                            <td>2024-09-04</td>
                            <td>Hetauda</td>
                            <td>Data collected on socio-psychological impacts on left-behind children.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Migration Study - Group E</td>
                            <td>2024-09-05</td>
                            <td>Nepal Gunj</td>
                            <td>Longitudinal study data on family reunification impacts.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </body>

    </html>
@endsection
