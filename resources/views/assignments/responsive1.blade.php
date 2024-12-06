<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="mt-4 p-5 bg-info text-white rounded">
            <h1>My First Bootstrap Page</h1>
        </div>
        <div class="alert alert-success">
            <p>This part is inside a .container class.</p>
        </div>
        <p>This part is inside a .container-fluid class.</p>
        <p>The .container-fluid class provides a full width container, spanning the entire width of the viewport.</p>

            <div class="row">
            <div class="col-lg 1  bg-danger">red</div>
            <div class="col-lg 10  border border-1 bg-success">green</div>
            <div class="row">

                <div class="col-lg 8  border border-1 bg-danger">ini isinya 8</div>
                <div class="col-lg 4  border border-1 bg-success">ini isinya 4</div> 
                </div>
                <div class="row">
                    <div class="col -lg-12">
                      <a href="https://www.its.ac.id/" ><button class="btn btn-danger">Bahaya</button></a>
                        <button class="btn btn-info"><i class.is"></i>Ga Bahaya</button>
                        <div class="d-flex p-3 bg-secondary text-white">  
                            <div class="p-2 bg-info">Flex item 1</div>
                            <div class="p-2 bg-warning">Flex item 2</div>
                            <div class="p-2 bg-primary">Flex item 3</div>
                          </div>

                    </div>
                <div class="col-lg 1  bg-primary">blue</div>
            </div>
        </div>

        </div>
    </div>
</body>

</html>