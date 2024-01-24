<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap 4 Form Template</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Register</h2>
    <form action="{{url('/')}}/register" method="POST" >
        @csrf
       
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value={{old('name')}} >
            <span class="text-danger">
                @error('name')
                {{$message}}    
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value={{old('email')}}>
            <span class="text-danger">
                @error('email')
                {{$message}}    
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="email">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" >
            <span class="text-danger">
                @error('password')
                {{$message}}    
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="email">Confirm Password:</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re Enter Password" >
            <span class="text-danger">
                @error('cpassword')
                {{$message}}    
                @enderror
            </span>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
