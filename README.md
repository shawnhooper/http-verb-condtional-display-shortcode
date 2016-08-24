# HTTP Verb Conditional Display Shortcode

Shortcodes that restrict a block of content to only be displayed if the HTTP verb used to call the page (POST, GET, etc.) meets the requested criteria. 

# Shortcodes

The plugin currently supports the following shortcodes:

[http_get_only]
[http_post_only]

# Usage

Wrap content that you want to restrict to a given HTTP verb in the shortcode.  For example, if you wanted to only display content if the POST verb was used:

[http_post_only]
This page was POSTed!
[/http_post_only]

# Issues 

Please report any issues with this plugin on GitHub at https://github.com/shawnhooper/http-verb-condtional-display-shortcode/
