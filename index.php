<? include 'app/simple.php';

# Default page
if (!$path[0])
    $path[0] = 'index';

# If there is no view available, show a 404.
if (!file_exists('app/views/'.$path[0].'.php'))
    $path[0] = 'notfound';

# If there is a controller available, invoke it
if (file_exists('app/controllers/'.$path[0].'.php'))
    include('app/controllers/'.$path[0].'.php');

include 'app/views/header.php';
include('app/views/'.$path[0].'.php');
include('app/views/footer.php');