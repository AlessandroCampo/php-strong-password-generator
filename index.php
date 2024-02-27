<?

$letters = array_merge(range('A', 'Z'), range('a', 'z'));
$symbols = array('!', '@', '#', '$', '%', '^', '&', '*', '-', '_', '=', '+', '|', ';', ':',  ',', '.', '<', '>', '/', '?');
$numbers = range(0, 9);
$generated_pass = '';

if (isset($_GET['pass_length'])) {

    for ($i = 0; $i < $_GET['pass_length']; $i++) {
        $one_to_three = rand(1, 3);
        $randomArray = ($one_to_three == 1) ? $letters : (($one_to_three == 2) ? $symbols : $numbers);
        $generated_pass .= $randomArray[rand(0, count($randomArray))];
    }

    var_dump($generated_pass);
}

?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Strong Password Generator</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="get" class="w-25">
            <div class="mb-3">
                <label for="pass_length_input" class="form-label">How long do you want your password to be? (min 5 max 20) </label>
                <input type="number" class="form-control" id="pass_length_input" max=20 min=5 name="pass_length">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>