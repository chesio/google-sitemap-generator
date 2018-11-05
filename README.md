# Google XML Sitemaps

Fork of [popular plugin](https://wordpress.org/plugins/google-sitemap-generator/) by [Arne Brachhold](http://www.arnebrachhold.de/).

## Requirements

At the moment the same as of legacy plugin.

## Changes

### Bugfixes

* Set WP Query variables in `parse_query` action already.
* Fix URL of HTTP request used to [ping Bing](https://www.bing.com/webmaster/help/how-to-submit-sitemaps-82a15bd4).
* Unquote placeholders for `wpdb::prepare()` - see #1.

### Features

* Add `sm_exclude_post_ids` filter to allow excluding of posts dynamically.

### Tweaks

* Remove minimum PHP (5.2) and WordPress (3.3) version checks.
* Remove survey nag and related functionality.
