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
* [Labels](#labels)
* Badges
* Jumbotron
* Page Header
* Thumbnails
* [Alerts](#alerts)
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
		[col md=6]
			...
		[/col]
		[col md=6]
			...
		[/col]
	[/row]

The container component is also supported in case your theme doesn't include a container.

		[container fluid=1]
			[row]
				[col md=6]
					...
				[/col]
				[col md=6]
					...
				[/col]
			[/row]
		[/container]

#### [container] parameters
Parameter | Description | Required | Values | Default
--------- | ----------- | -------- | ------ | ---
fluid | Is the container fluid? (see Bootstrap documentation for details) | optional | true, false | false
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
xs_offset | Offset on extra small screens | optional | 1-12 | false
sm_offset | Offset on small screens | optional | 1-12 | false
md_offset | Offset on column on medium screens | optional | 1-12 | false
lg_offset | Offset on column on large screens | optional | 1-12 | false
xs_pull | Pull on extra small screens | optional | 1-12 | false
sm_pull | Pull on small screens | optional | 1-12 | false
md_pull | Pull on column on medium screens | optional | 1-12 | false
lg_pull | Pull on column on large screens | optional | 1-12 | false
xs_push | Push on extra small screens | optional | 1-12 | false
sm_push | Push on small screens | optional | 1-12 | false
md_push | Push on column on medium screens | optional | 1-12 | false
lg_push | Push on column on large screens | optional | 1-12 | false
xclass | Any extra classes you want to add | optional | any text | none

[Bootstrap grid documentation](http://getbootstrap.com/css/#grid).

* * *

### Components

### Alerts
	[alert type="success"] ... [/alert]

#### [alert] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
type | The type of the alert | required | success, info, warning, danger | success
dismissable | If the alert should be dismissable | optional | true, false | false
xclass | Any extra classes you want to add | optional | any text | none

[Bootstrap alert documentation](http://getbootstrap.com/components/#alerts)

* * *

### Labels
	[label type="success"] ... [/label]

#### [label] parameters
Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
type | The type of label to display | optional | default, primary, success, info, warning, danger | default
xclass | Any extra classes you want to add | optional | any text | none

[Bootstrap label documentation](http://getbootstrap.com/components/#labels)

* * *

### JavaScript