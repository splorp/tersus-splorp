
# Tersus: Splorp

An achingly simple child theme for [Tersus](https://github.com/splorp/tersus/).


## About

Tersus is an exercise in publishing template minimalism.

By removing the majority of the presentational markup and other cruft from the [Tersus](https://github.com/splorp/tersus/) parent theme, we’ve opened the door for child themes to pick up the aesthetic slack. There are currently three child themes being developed for Tersus.

+ [Newted](https://github.com/splorp/newted/) by [Grant Hutchinson](https://splorp.me/)
+ [Splorp](https://github.com/splorp/splorp/) by [Grant Hutchinson](https://splorp.me/)
+ [Super Ginormous](https://github.com/cdharrison/super-ginormous) by [Chris Harrison](http://cdharrison.com/)

Keep track of Tersus development on [Twitter](https://twitter.com/tersustheme).


## Features

+ HTML5 structure and compliance
+ CSS that has been reset and built from the ground up
+ Non-semantic, presentational markup has been dispatched
+ Built-in theme options for navigation, sidebar, footer, and announcement text
+ Two widget-enabled sidebar areas
+ Responsive, adaptive layout for small screens
+ Clean, valid, and awesome
+ WordPress [Theme Review Process](https://make.wordpress.org/themes/handbook/review/) compliance


## Requirements

* WordPress 5.0 or later
* [Tersus](https://github.com/splorp/tersus/) parent theme


## Credits

See the main [Tersus](https://github.com/splorp/tersus/) project for a current list of [credits and attributions](https://github.com/splorp/tersus/#credits).


## Licensing

The Tersus theme is absolutely free and conveniently licensed under [GPLv3](https://www.gnu.org/licenses/gpl-3.0.html). You may use it for personal or commercial projects, as you see fit. Please refer to the [license](https://github.com/splorp/tersus/blob/master/license.txt) included with the source for more information.

Copyright © 2012–2022 Grant Hutchinson

See the main [Tersus](https://github.com/splorp/tersus/) project for related third party [licensing information](https://github.com/splorp/tersus/#licensing).


## Version History

### 0.1.4

+ Theme now requires WordPress 5.0 or later
+ Bumped [Tersus](https://github.com/splorp/tersus/) template version to 0.4.1
+ Updated theme name for consistency with the theme text domain and function namespace
+ Added `register_nav_menus` function to support the theme text domain
+ Added `automatic-feed-links` theme support feature
+ Added `post-thumbnails` theme support feature
+ Added `title-tag` theme support feature
+ Removed deprecated `handheld` and `max-device-width` from media queries 
+ Embiggened site icon artwork
+ Removed legacy icon and artwork files
+ Updated license to [GPLv3](https://www.gnu.org/licenses/gpl-3.0.html)


### 0.1.3

+ Bumped [Tersus](https://github.com/splorp/tersus/) template version to 0.4.0


### 0.1.2

+ Replaced deprecated `get_theme_data()` function with `wp_get_theme()`
+ Fixed display of `span` elements containing `vevent` summary values 
+ Removed vendor prefixes from `border-radius` property
+ Removed `float` alignment declarations now defined by parent theme
+ Added basic styles for navigation menu and footer links
+ Added basic styles for post and page navigation
+ Modified navigation link delimiters
+ Styled the “Cancel Reply” link
+ Reinstated default comment form selectors
+ Updated button styles on form actions
+ Updated form field width and color for consistency
+ Reduced font size for small screens
+ Converted some leftover `px` to `em`
+ Fixed responsive image scaling
+ Moved theme CSS into style subdirectory
+ Added Template Version to theme file header
+ Embiggened theme screenshot to support HiDPI displays
+ Added support for the proliferation of various iOS and Windows 8 iconography
+ Replaced the rather free spirited theme tags with official WordPress tags


### 0.1.1

+ Fixed announcement section margin
+ Fixed iPad media query breakpoint
+ Changed iPad aside layout to a single column
+ Collapsed gallery margins
+ Simplified article img selector
+ Added selectors for standard image alignment classes
+ Added function to retrieve child theme information as constants
+ Deprecated subcategory list selectors


### 0.1.0

+ Initial release based on the final advanced “flavour” from the Tersus theme
