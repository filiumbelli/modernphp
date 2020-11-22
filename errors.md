Always turn on error reporting.
Display errors during development.
Do not display errors during production.
Log errors during development and production.

Here are my error-reporting php.ini settings for # development:

; Display errors
display_startup_errors = On
display_errors = On
; Report all errors
error_reporting = -1
; Turn on error logging
log_errors = On
Here are my error-reporting php.ini settings for # production:

; DO NOT display errors
display_startup_errors = Off
display_errors = Off
; Report all errors EXCEPT notices

error_reporting = E_ALL & ~E_NOTICE
; Turn on error logging
log_errors = On
