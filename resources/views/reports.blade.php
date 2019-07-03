<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BusGuard Reports</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">BusGuard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Reports <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Emergency Contact</th>
                <th scope="col">Bus Name</th>
                <th scope="col">Licence No</th>
                <th scope="col">Route</th>
                <th scope="col">Report Time</th>
                <th scope="col">Action</th>



            </tr>
            </thead>
            <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->user->name }}</td>
                    <td>{{ $report->user->address }}</td>
                    <td>{{ $report->user->phone }}</td>
                    <td>{{ $report->user->emergency_phone }}</td>
                    <td>{{ $report->busname }}</td>
                    <td>{{ $report->licenseno }}</td>
                    <td>{{ $report->route }}</td>
                    <td>{{ $report->created_at }}</td>
                    <td><a href="https://www.google.com/maps/?q={{ $report->lat }},{{ $report->lon }}" target="_blank"
                           class="btn btn-primary btn-sm" role="button" aria-disabled="true">Locate on Google Map</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</main><!-- /.container -->

</body>
</html>
