<?php
namespace Src\Cli;

use function cli\line;
use function cli\prompt;
function greeting($name)
{
    line('Welcome to the Brain Game!');
    prompt('May I have your name?');
    line("Hello, %s!", $name);
}
