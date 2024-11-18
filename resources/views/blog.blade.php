<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .help-block {
            color :red;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-6">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white ">
                            <div class="card-title">Blog</div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('blog.store')}}" method="post" name="blogfrm" id="blogFrm">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter name here" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="5" rows="5" placeholder="Enter description here" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Author</label>
                                <input type="text" name="author" id="author" placeholder="Enter author here" class="form-control" />
                            </div>
                            <div class="mt-5">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js') }}">
   
   </script>
   
   {!! $validator !!}
</body>
</html>
