# Exclaim HTML Styleguide

This document outlines major HTML module structures. Note that the CSS uses LESS CSS, to learn more go to http://lesscss.org/.

## Scalable Modular Accessible CSS (SMACSS)

The methodology that is used here is to spilt up the css into files that make it easier to adjust overtime. Additionally, there is a separation of structural layout and module styling.

**Structural elements:**

- **layout.less** - layout of major blocks without any styling properties
- **mixins.less** - this contains LESS mixins to be used through the rest of the code, a single source of truth for redundant code
- **base.less** - base and reset style properties
- **styles.less** - an import file for all less files, used for simple compiling
- **/modules/** - this folder contains modular styling properties for components that match the name of each file

# Variables

Within the mixins.less file there are a bunch of variables to be used throughout the classes. The following are a list of the most important ones to be mentioned.

**Colors**
@linkColor:         #DCECF9;

**Fonts**
@titleFont:         'Roboto Slab', serif;
@uppercaseFont:     'Montserrat', sans-serif;
@baseFont:          'Droid Serif', serif;

**Z-Index Layers**
@zindexModal:       900;
@zindexNav:         800;
@zindexOverlay:     700;
@zindexInputs:      500;

# Important Mixins

## @media queries

There are a series of mixins that are special for the use of media queries. The purpose is to ensure there is a single source of truth to define the width. 

	.tabletLandscape(@rules) {
  	@media screen and (max-width: 1024px) { @rules(); }
	}

Within any class, you would use this as follows. This will allow you to set media queries inline within any class and not needing to create a separate stylesheet.

	.content {
		background: orange;
	
		.tabletLandscape({
			background: red;
		});
	}

Which will compile out as:

	.content { background: orange; }

	@media screen and (max-width: 1024px) {
		.content { background: red; }
	}

**All Media Query Mixins**

- **tabletLandscape** - applies to < 1024px
- **tabletPortrait** - applies to < 770px (iPad = 768px)
- **lessThanTablet** - applies to < 767px 
- **mobileLandscape** - applies to < 602px (Android Nexus 4)
- **tabletLandscape** - applies to < 322px (iPhone 4)

## SVG Icon

The mixing **.svgIcon();** mixin allows you to place an “.svg” based icon anywhere in code (within a class or :before/:after pseudo class) and set size and placement using absolute positioning. 

## Retina Image 

Add this **.retinaImage();** within a class or mixin allows you to easily add the retina image without having to write all the necessary code. The following is an example in use.

	.retinaImage({
    background-image: url("../images/icons/image-@2x.png");          
  });

### Global Hide & Close 

The following classes are to be added within the HTML, they will either hide or reveal content entirely.

	<div class=“content visibile-mobile”></div>

_.visibile-mobile_

- **Default** = display: none;
- **.lessThanTablet** = display: block;

_.visibile-desktop_

- **Default** = display: block;
- **.lessThanTablet** = display: none;