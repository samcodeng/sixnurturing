# Six Nurturing Home Limited

A lightweight PHP website for Six Nurturing Home Limited. It uses native PHP templates and has no Composer, Laravel, or Node.js runtime dependencies.

## Run locally

From the project root, start PHP's built-in web server with the public directory as its document root:

```sh
php -S 127.0.0.1:8000 -t public public/index.php
```

Open <http://127.0.0.1:8000>. The page templates are served from `public/views`, and the site also supports Apache using the rewrite rules in `public/.htaccess`.

## Pages

- `/`
- `/about`
- `/services`
- `/our-approach`
- `/careers`
- `/contact`
