<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Posts - New Mansoura Blog</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min-home.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles-home.css') }}" />
    </head>
<body>

    <h1 class="text-center m-5">Manage Posts</h1>

        <!-- Create Post Form -->
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="card-title">Update Post</h2>
                <form action="{{ route('create_post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}" />
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Description</label>
                        <input value="{{ $post->description }}" name="description" class="form-control" id="post-description" rows="5" required ></input">
                    </div>
                    <input type="submit" value="Update" />
                </form>
            </div>
        </div>
    
</body>
</html>