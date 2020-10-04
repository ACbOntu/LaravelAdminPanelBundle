<html>
<head>
    <title>AdminPanelBundle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <body>
    <div class="container">
    <form action="{{route('store',$id=2)}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="name" placeholder="Name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="designation" class="col-sm-2 col-form-label col-form-label-lg">Designation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="designation" placeholder="Designation" name="designation">
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile" class="col-sm-2 col-form-label col-form-label-lg">Mobile</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="mobile" placeholder="Mobile" name="mobile">
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" class="form-control col-sm-10 btn btn-primary" value="Create">
        </div>
    </form>
    </div>

    </body>

</html>
