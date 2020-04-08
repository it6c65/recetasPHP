require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->route('GET /',
    function() {
        echo 'My first Commit';
    }
);
$f3->run();
