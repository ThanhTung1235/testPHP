<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
            integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
            crossorigin="anonymous"></script>
    <style>
        .center {
            margin: auto;
            padding: 20px;
            width: 45%;

        }
    </style>
</head>
<body>

<div class="bg-dark">
    <div class="container">
        <nav class="nav">
            <a href="/product/create " class="nav-link text-light">Create</a>
            <a href="/product" class="nav-link text-light">List</a>
        </nav>
    </div>
</div>

<div class="center">
    <div class="card" style="width: 40rem;">
        <div class="card-header bg-dark">
            <h1 class="text-center text-light">Edit article</h1>
        </div>

        <div class="card-body">
            <form action="/product/{{$obj -> id}}" method="POST">
                @method('PUT')
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" name="name" class="form-control" value="{{$obj -> name}}"
                           placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" value="{{$obj -> description}}"
                           placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <img src="{{$obj -> image}}" style="width: 200px" alt="">
                    <input type="text" name="image" class="form-control" value="{{$obj -> image}}"
                           placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input type="text" name="price" class="form-control" value="{{$obj -> price}}"
                           placeholder="Enter Author">
                </div>

                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="reset" class="btn btn-outline-info">Clear</button>
            </form>
        </div>
    </div>


</div>
</body>
</html>