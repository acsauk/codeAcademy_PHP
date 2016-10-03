# PHP Debugging

### Turn on error reporting

This can be done in either php.ini(check in config chapter) or using some PHP code.

#### php.ini

Ensure the following settings are updated:

`display_errors = On`

`error_reporting = E_ALL`

#### PHP code

Useful if multiple people are working on the same server and want different settings.

`ini_set('display_errors','On');`

`error_reporting(E_ALL);`

You can provide `error_reporting` with different constant values.

- If using PHP 5.4 or later then E_STRICT was incorporated into E_ALL and is not required. If using earlier versions, or switching back and forth, use both as per below

`error_reporting(E_ALL | E_STRICT);`

- ~ is used to omit something from the errors reported

`error_reporting(E_ALL | ~E_DEPRECIATED);`

- To see what the current error_reporting values are set to don't feed in anything. This will return a number - check php.net for what the number means`

`error_reporting()`

### Different types of errors:

<strong>Fatal Errors</strong> - PHP understood code but couldn't execute it. Could be:
- Undefined class
- Undefined function

<strong>Syntax Errors</strong> - PHP could not understand or process the code. Could be:
- Typos
- Missing semicolon
- Missing parenthesis
- Missing quotation etc

<strong>Warnings</strong> - PHP found a problem, but was able to recover. Could be:
- Incorrect mathematical operations ( / 0)
- Incorrect access permissions

<strong>Notices</strong> - PHP is offering advice for code. Could be:
- Depreciated
- Bad coding practice

### Outputting info to debug

echo $variable; - A simple way to see what is assigned to a variable

print_r($array); - Prints out a readable version of an error to examine the contents

gettype($variable) - Displays the type of object assigned to a variable

var_dump($variable) - Displays more info about a variable including type and value and, if an array, readable version (does the above three functions in one - saves time)

get_defined_vars(); - Lists all the variables that are currently available to PHP at that specific point in the code. When using feed it into `print_r()` surround in `<pre>` tags OR `var_dump()` to make readable

e.g. print_r(get_defined_vars());

debug_backtrace(); - Shows a backtrace in an array - function calls made to get to that place in the code. When using feed it into `print_r()` surround in `<pre>` tags OR `var_dump()` to make readable

e.g. print_r(debug_backtrace());

### Third party debuggers

- Xdebug
- DBG
- FirePHP
