# Fictionary sections for Strata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/fictionary.svg?style=flat-square)](https://packagist.org/packages/astrogoat/fictionary)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/fictionary/run-tests?label=tests)](https://github.com/astrogoat/fictionary/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/fictionary/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/fictionary/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/fictionary.svg?style=flat-square)](https://packagist.org/packages/astrogoat/fictionary)

---

Fictionary is a collection of sections that can be used in your project.

## Installation

You can install the package via composer:

```bash
composer require astrogoat/fictionary
```

## Customization

You can define your own accent colors by defining CSS variables for scale of accent colors.

If you're using Tailwind you’ll need to define those variables as just the color channels if you want them to work with the opacity modifier syntax. See [Tailwind documentation](https://tailwindcss.com/docs/customizing-colors#using-css-variables) for more information. 


```css
html body {
    --fictionary-accent-color-50: 242 253 250;
    --fictionary-accent-color-100: 213 250 241;
    --fictionary-accent-color-200: 174 244 228;
    --fictionary-accent-color-300: 134 231 212;
    --fictionary-accent-color-400: 104 209 191;
    --fictionary-accent-color-500: 85 181 166;
    --fictionary-accent-color-600: 67 146 136;
    --fictionary-accent-color-700: 53 116 110;
    --fictionary-accent-color-800: 43 93 89;
    --fictionary-accent-color-900: 37 77 74;
    --fictionary-accent-color-950: 18 46 46;
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.


## Credits

- [Laura Tonning](https://github.com/tonning)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
