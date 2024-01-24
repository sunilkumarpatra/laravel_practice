<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Customer Data</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Customer Data</h2>
   
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Country</th>
            <th scope="col">Address</th>
            <th scope="col">State</th>
            <th scope="col">Gender</th>
            <th scope="col">DOB</th>
          
        </tr>
        </thead>
        <tbody>
            @php
            $count=1;
            @endphp
            @foreach($customer as $customer)
        <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->country}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->state}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->dob}}</td>
        </tr>
        @php
        $count=$count+1;
        @endphp
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
