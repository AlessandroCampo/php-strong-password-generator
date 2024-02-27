<?

include  __DIR__ .   './variables.php';

function generateRandomPass($pass_length, $letters, $symbols, $numbers)
{
    $generated_pass = '';
    for ($i = 0; $i < $pass_length; $i++) {
        $one_to_three = rand(1, 3);
        $randomArray = ($one_to_three == 1) ? $letters : (($one_to_three == 2) ? $symbols : $numbers);
        $generated_pass .= $randomArray[rand(0, count($randomArray) - 1)];
    }

    return $generated_pass;
}
