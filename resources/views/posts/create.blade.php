<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MongoDB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">
               Create Post
            </h3>
            <div class="card-body">
                <a href="{{ route('post.index') }}" class="btn btn-primary mb-3" >Back</a>

                <form method="POST" action="{{ route('post.store') }}">
                    @csrf
            <div class="mt-2">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>

            <div class="mt-2">
                    <label for="body">Body:</label>
                    <textarea type="body" name="body" id="body" class="form-control"></textarea>
                    @error('body')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>

                    <div class="mt-2">
                    <button type="submit" class="btn btn-success">Submit</button>
            </div>
                </form>
            
            </div>
        </div>
    </div>
</body>
</html>