# Google XML Sitemaps

Fork of [popular plugin](https://wordpress.org/plugins/google-sitemap-generator/) by [Arne Brachhold](http://www.arnebrachhold.de/).

## Requirements

At the moment the same as of legacy plugin.

## Changes

### Bugfixes

* Set WP Query variables in `parse_query` action already.
* Fix URL of HTTP requests used to ping [Bing](https://www.bing.com/webmaster/help/how-to-submit-sitemaps-82a15bd4) and [Google](https://developers.google.com/search/docs/guides/submit-URLs).
* Unquote placeholders for `wpdb::prepare()` - see [#1](https://github.com/chesio/google-sitemap-generator/issues/1).

### Features

* Add `sm_exclude_post_ids` filter to allow excluding of posts dynamically.

### Tweaks

* Remove minimum PHP (5.2) and WordPress (3.3) version checks.
* Remove survey nag and related functionality.
* Removed optional usage tracking via Google Analytics.
* Remove functionality that depended on Subversion (SVN) being used for code versioning.
* Simplify ping response check: do not parse response body.
* Integrate with [GitHub Updater](https://github.com/afragen/github-updater) - the plugin can only be updated from GitHub, never from WordPress.org Plugin Directory.
