# Google XML Sitemaps

Fork of [popular plugin](https://wordpress.org/plugins/google-sitemap-generator/) by [Arne Brachhold](http://www.arnebrachhold.de/).

## Requirements

At the moment the same as of legacy plugin.

## Changes

### Bugfixes

* Set WP Query variables in `parse_query` action already.

### Features

* Added `sm_exclude_post_ids` filter to allow excluding of posts dynamically.

### Tweaks

* Remove minimum PHP (5.2) and WordPress (3.3) version checks.
