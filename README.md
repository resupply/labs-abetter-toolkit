# labs-abetter-toolkit

ABetter blade toolkit for Laravel 5+

## Install
> composer require abetter/toolkit

## Register Middleware
- Add to $middleware in app/Kernel.php
- \ABetter\Toolkit\SandboxMiddleware::class,

## Directives
- @component('<view.name>',[<variables>])
- @inject('<variable>','<relative-class-file>')
- @style('<relative-filename>')
- @script('<relative-filename>')
