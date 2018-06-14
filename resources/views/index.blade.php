<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Collation Test</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="{{ asset('/css/custom.css')  }}" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Collation Test - Add a New Product</h3>
        </div>

        <div class="well">
            <form id="product-form" method="POST" action="{{ route('product.store') }}" class="form-horizontal">

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity in Stock</label>
                    <div class="col-sm-9">
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity in Stock">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price Per Item</label>
                    <div class="col-sm-9">
                        <input type="text" name="price" class="form-control" placeholder="Price Per Item">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-default">Save Product</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row marketing">
            <table class="table table-bordered table-hover">
                <thead>
                <th>Product Name</th>
                <th>Quantity in Stock</th>
                <th>Price Per Item</th>
                <th>Datetime Submitted</th>
                <th>Total Value Number</th>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>

    </div> <!-- /container -->

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/coalition.js') }}"></script>
    </body>
</html>
