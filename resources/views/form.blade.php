<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>


<div class="countainer-fluid rev" style=" padding: 100px; ">
    <section id="contract" >
        <h2 class="mb-4 font-weight-bold text-center" style="color: #1B81E5"> Add Books</h2>
        <center>
            <div class="col-lg-6 col-md-10" >
                @if($errors->any())
                    <div class="alert alert-danger text-left">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="p-5" method="post" action="{{ route('form-submit') }}">
                    @csrf
                    <div class="md-form form-sm">
                        <div class="row">
                            <div class="col-2 text-right"><img src="https://img.icons8.com/ios/50/e74c3c/loser-filled.png"></div>
                            <div class="col-10 text-left"><input type="text" name="book_name" class="form-control form-control-sm" placeholder="Book name"></div>

                        </div>
                        <hr>

                    </div>

                    <div class="md-form form-sm">
                        <div class="row">
                            <div class="col-2 text-right">
                                <img src="https://img.icons8.com/ios-filled/50/fa314a/mail-filter.png"/>

                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control form-control-sm" name="page_count" placeholder="Page Count">
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="md-form form-sm">
                        <div class="row">
                            <div class="col-2 text-right">
                                <img src="https://img.icons8.com/ios/50/e74c3c/new-post-filled.png">

                            </div>
                            <div class="col-10">
                                <textarea name="description" class="form-control form-control-sm" placeholder="Description" cols="50" rows="4"></textarea>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="md-form form-sm">
                        <div class="row">
                            <div class="col-2 text-right">
                                <img src="https://img.icons8.com/ios/50/e74c3c/new-post-filled.png">

                            </div>
                            <div class="col-10">
                                <select name="author_id" class="form-control form-control-sm">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="md-form form-sm text-center">
                        <button class="btn btn-primary" name="submit" type="submit">ADD</button>
                    </div>
                </form>
            </div>
        </center>

    </section>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>
</html>
