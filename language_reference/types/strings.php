<?php
/*
Note: As of PHP 7.0.0, there are no particular restrictions regarding the length of a string on 64-bit builds.
 On 32-bit builds and in earlier versions,a string can be as large as up to 2GB (2147483647 bytes maximum)
 A string literal can be specified in four different ways:
 single quoted
 double quoted
 heredoc syntax
 nowdoc syntax (since PHP 5.3.0)

*/
// single quoted

echo 'this is a simple string'."<br/>";

echo 'You can also have embedded newlines in
strings this way as it is
okay to do'."<br/>";

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"'."<br/>";

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?'."<br/>";

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?'."<br/>";

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline'."<br/>";

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either'."<br/>";






?>
