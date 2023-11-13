# Project 1211: ScriptShop 5M

This is a private repository for the ScriptShop 5M project, a personal collection of scripts and utilities designed for use with the FiveM mod for Grand Theft Auto V.

## Project Structure

- `/src` - All the custom PHP source code for the project.
- `/public` - Publicly accessible files, including the main `index.php` entry point.
- `/resources` - Static resources such as CSS, JavaScript, and image files.
- `/config` - Configuration files that are not web-accessible for security reasons.
- `/vendor` - Composer-managed dependencies (PHP).
- `/node_modules` - npm-managed dependencies (JavaScript/Node.js).

## Development Commands

- Run `npm run tailwind` to re-build TailwindCSS.

## Configuration Files

- `config.php` - Stores database connections and other sensitive configuration.
- `.env` - Environment variables for local development.


## Testing

- PHP unit tests can be run with `vendor/bin/phpunit`.
- JavaScript tests can be run with `npm test`.

