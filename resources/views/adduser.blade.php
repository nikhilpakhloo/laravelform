<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add user form</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update user data</h1>
              
                <form action="{{route('addUser')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Email:</label>
                        <input type="text" name="useremail"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Age:</label>
                        <input type="text" name="userage"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">City:</label>
                        <input type="text" name="usercity" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
