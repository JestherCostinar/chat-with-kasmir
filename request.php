<?php

require __DIR__ . '/vendor/autoload.php'; 

use Orhanerday\OpenAi\OpenAi;


$open_ai = new OpenAi("YOUR OPEN API KEY");
$prompt = $_GET['prompt'] ?? null;

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => $prompt,
    'temperature' => 0.7,
    'max_tokens' => 256,
    'top_p' => 1,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,
    'stream' => true
], function($curl_info, $data) {
    echo $data;
    echo PHP_EOL;
    ob_flush();
    flush();
    return strlen($data);
});


