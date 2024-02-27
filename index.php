<?

include __DIR__ . './functions.php';
include  __DIR__ .   './variables.php';
session_start();



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
        <form action="redirect.php" method="get" class="w-25">
            <div class="mb-3">
                <label for="pass_length_input" class="form-label">How long do you want your password to be? (min 5 max 20) </label>
                <input type="number" class="form-control" id="pass_length_input" max=20 min=5 name="pass_length">
                <div class="form-check form-switch mt-3">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="allow_repetition">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Allow character repetition</label>
                </div>

                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value=1 id="firstCheckbox" name="allow_letters">
                        <label class="form-check-label" for="firstCheckbox">Letters</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value=2 id="secondCheckbox" name="allow_numbers">
                        <label class="form-check-label" for="secondCheckbox">Numbers</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value=3 id="thirdCheckbox" name="allow_symbols">
                        <label class="form-check-label" for="thirdCheckbox">Symbols</label>
                    </li>
                </ul>

            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>