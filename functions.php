<?

include  __DIR__ .   './variables.php';

function generateRandomPass($pass_length, $letters, $symbols, $numbers, $allow_repetition)
{
    $generated_pass = '';
    while (strlen($generated_pass) < $pass_length) {
        $one_to_three = rand(1, 3);
        $randomArray = ($one_to_three == 1) ? $letters : (($one_to_three == 2) ? $symbols : $numbers);
        $random_digit = $randomArray[rand(0, count($randomArray) - 1)];
        if ($allow_repetition || !str_contains($generated_pass, $random_digit)) {
            $generated_pass .= $random_digit;
        }
    }

    return $generated_pass;
}
