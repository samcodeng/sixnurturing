# Project guidance

This is a dependency-free PHP website. Serve the `public/` directory as the document root; route requests through `public/index.php`.

- Keep page templates in `public/views/` and use native PHP includes for shared layout.
- Keep browser assets in `public/`; do not add a framework or build step for static pages.
- Escape dynamic HTML with `htmlspecialchars($value, ENT_QUOTES, 'UTF-8')`.
- Preserve the existing visual style and verify all page routes after changes.
