# Bootstrap 3 Shortcodes

Bootstrap 3 Shortcodes plugin that provides shortcodes for easier use of the Bootstrap styles and components in your content.

## Requirements

This plugin won't do anything if you don't have theme built with the [Bootstrap](http://getbootstrap.com/) framework. **This plugin does not include the Bootstrap framework**.


## Shortcode Reference

### CSS
* [Grid](#grid)
* Lead body copy
* Emphasis classes
* Code
* Tables
* Buttons
* Images
* Responsive Embeds
* Responsive utilities

### Components
* Icons
* Button Groups
* Button Dropdowns
* Navs
* Breadcrumbs
* Labels
* Badges
* Jumbotron
* Page Header
* Thumbnails
* Alerts
* Progress Bars
* Media Objects
* List Groups
* Panels
* Wells

### JavaScript
* Tabs
* Tooltip
* Popover
* Collapse
* Carousel
* Modal


# Usage

### CSS

### Grid
	[row]
		[col md="6"]
			...
		[/col]
		[col md="6"]
			...
		[/col]
	[/row]

The container component is also supported in case your theme doesn't include a container.

	[container]
		[row]
			[col md="6"]
				...
			[/col]
			[col md="6"]
				...
			[/col]
		[/row]
	[/container]

The container-fluid component is supported as a discrete shortcode for cases where you want to wrap a container.

	[container-fluid]
		[container]
			[row]
				[col md="6"]
					...
				[/col]
				[col md="6"]
					...
				[/col]
			[/row]
		[/container]
	[/container-fluid]

#### [container] parameters
Parameter | Description | Required | Values | Default
--------- | ----------- | -------- | ------ | ---
fluid | Is the container fluid? (see Bootstrap documentation for details) | optional | true, false | false
xclass | Any extra classes you want to add | optional | any text | none

#### [container-fluid] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
xclass | Any extra classes you want to add | optional | any text | none

#### [row] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
xclass | Any extra classes you want to add | optional | any text | none

#### [col] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
xs | Size of column on extra small screens (less than 768px) | optional | 1-12 | false
sm | Size of column on small screens (greater than 768px) | optional | 1-12 | false
md | Size of column on medium screens (greater than 992px) | optional | 1-12 | false
lg | Size of column on large screens (greater than 1200px) | optional | 1-12 | false
offset_xs | Offset on extra small screens | optional | 1-12 | false
offset_sm | Offset on small screens | optional | 1-12 | false
offset_md | Offset on column on medium screens | optional | 1-12 | false
offset_lg | Offset on column on large screens | optional | 1-12 | false
pull_xs | Pull on extra small screens | optional | 1-12 | false
pull_sm | Pull on small screens | optional | 1-12 | false
pull_md | Pull on column on medium screens | optional | 1-12 | false
pull_lg | Pull on column on large screens | optional | 1-12 | false
push_xs | Push on extra small screens | optional | 1-12 | false
push_sm | Push on small screens | optional | 1-12 | false
push_md | Push on column on medium screens | optional | 1-12 | false
push_lg | Push on column on large screens | optional | 1-12 | false
xclass | Any extra classes you want to add | optional | any text | none

[Bootstrap grid documentation](http://getbootstrap.com/css/#grid).

* * *

### Components

* * *

### JavaScript