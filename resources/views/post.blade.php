<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts - New Mansoura Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min-home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles-home.css') }}" />
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-bg">
        <div class="container">
            <a class="navbar-brand btn btn-light" href="index">View Posts</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center m-5">Manage Posts</h1>

        <!-- Create Post Form -->
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="card-title">Create a New Post</h2>
                <form action="{{ route('create_post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="post-description" rows="5" required></textarea>
                    </div>
                    <input class="btn btn-success" type="submit" value="Submit" />
                </form>
            </div>
        </div>

        <!-- List of Existing Posts -->
        <h2 class="mb-4">Existing Posts</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="{{ url('post/'.$post->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        
        
    </div>

    <!-- Bootstrap JS -->
    {{-- <script src="{{ asset('css/bootstrap.min-home.css') }}" />"></script> --}}
</body>
</html>