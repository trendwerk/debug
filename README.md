Debug
===========

Debug tools for WordPress. This plugin installs and activates:

- [Debug Bar](https://wordpress.org/plugins/debug-bar/)
- [Debug Bar Slow Actions](https://wordpress.org/plugins/debug-bar-slow-actions/)
- [Kint Debugger](https://wordpress.org/plugins/kint-debugger/)

## Installation
This plugin needs Composer to manage WordPress. To add this plugin to your project's development dependencies, run:
```sh
composer require trendwerk/debug 1.0.0 --dev
```

Or manually add it to your `composer.json`:
```json
"require-dev": {
	"trendwerk/debug": "1.0.0"
},
```

Since custom repositories, such as [wpackagist.org][http://wpackagist.org/], are [root-only](https://getcomposer.org/doc/04-schema.md#repositories), you need to specify this repository in your root `composer.json` as well:

```json
"repositories": [
	{
		"type": "composer",
		"url": "http://wpackagist.org"
	}
]
```
