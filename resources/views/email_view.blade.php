<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Email </h4>
                <hr>
                <form action="{{url('sendemail',$data->id)}}" method="post">
                    @if(Session::has('sucess'))
                    <div class="alert alert-success">{{Session::get('sucess')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="greeting">Greeting</label>
                        <input type="text" class="form-control" placeholder="Greeting" name="greeting" value="{{old('Greeting')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" class="form-control" placeholder="Email Body " name="body" value="{{old('body')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="action-text">Action Text</label>
                        <input type="text" class="form-control" placeholder="Action Text" name="action-text" value="{{old('action-text')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="action-url">Action url</label>
                        <input type="text" class="form-control" placeholder="Action url" name="action-url" value="{{old('action-url')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="end-part">End Part</label>
                        <input type="text" class="form-control" placeholder="End Part" name="end-part" value="{{old('end-part')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="send">Send</button>
                    </div>
                    <br>
                    <a href="/visitors">GO Back TO Visitors List</a>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>