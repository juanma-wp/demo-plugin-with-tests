# My Awesome Plugin

[![Tests](https://github.com/juanma-wp/demo-plugin-with-tests/actions/workflows/tests.yml/badge.svg)](https://github.com/juanma-wp/demo-plugin-with-tests/actions/workflows/tests.yml)

A minimal WordPress plugin showcasing unit and integration testing setup.

## Requirements

- PHP 7.4+
- WordPress 5.0+
- Composer
- Node.js & npm
- Docker (for integration tests)

## Installation

1. Clone the repository into your `wp-content/plugins` directory:

```bash
git clone https://github.com/your-username/my-awesome-plugin.git
cd my-awesome-plugin
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install Node.js dependencies:

```bash
npm install
```

## Development

### Local Environment

This plugin uses [@wordpress/env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) for local development and integration testing.

Start the local environment:

```bash
npm run wp-env start
```

Stop the environment:

```bash
npm run wp-env stop
```

## Testing

This plugin demonstrates a complete testing setup with both **unit tests** (using Brain Monkey) and **integration tests** (using the WordPress test environment).

### Unit Tests

Unit tests run without WordPress loaded, using [Brain Monkey](https://giuseppe-mazzapica.gitbook.io/brain-monkey/) to mock WordPress functions.

```bash
npm run test:unit
```

### Integration Tests

Integration tests run with a full WordPress environment inside Docker containers via `wp-env`.

```bash
npm run test:integration
```

> **Note:** Make sure Docker is running and `wp-env` is started before running integration tests.

## Project Structure

```
my-awesome-plugin/
├── src/                    # Plugin source code
│   └── Helpers.php         # Helper utilities
├── tests/
│   ├── bootstrap.php       # Integration tests bootstrap
│   ├── integration/        # Integration test files
│   └── unit/
│       ├── bootstrap.php   # Unit tests bootstrap
│       └── *.php           # Unit test files
├── .wp-env.json            # wp-env configuration
├── composer.json           # PHP dependencies
├── package.json            # Node.js dependencies
├── phpunit.unit.xml        # PHPUnit config for unit tests
├── phpunit.xml.dist        # PHPUnit config for integration tests
└── my-awesome-plugin.php   # Main plugin file
```

## License

GPL v2 or later

## Author

[Juan Manuel Garrido](https://juanma.codes)

