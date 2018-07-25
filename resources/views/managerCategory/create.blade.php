<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .center {
            margin: auto;
            width: 45%;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="bg-dark">
    <div class="container">
        <nav class="nav">
            <a href="/admin/article/create " class="nav-link text-light">Create</a>
            <a href="/admin/article " class="nav-link text-light">List</a>
        </nav>
    </div>
</div>

<div class="center">
    <div class="card" style="width: 40rem;">
        <div class="card-header bg-dark">
            <h1 class="text-center text-light">Create Category</h1>
        </div>

        <div class="card-body">
            <form action="/category" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" name="title" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" name="image" class="form-control" placeholder="Enter image">
                </div>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="reset" class="btn btn-outline-info">Clear</button>
            </form>
        </div>
    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>