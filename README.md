# aszel3
Jekyll version of my Website

## Generated posts from Wordpress blog
This website contains several blogs. The posts are kept as single files in folders ('ash', 'blog' etc.). To be able to use posts from an old Wordpress blog I wrote a PHP script to grab the required data. Of course there are similar scripts out there but none of them was capable to fulfil what I needed (damn). You can find this script here on Github: https://github.com/aszel/Wordpress2Jekyll

## What needs to be done
  * Add imgage sizes for each image
  * Use thumbnails instead of full image for preview
  * Extend front matter so that each image can be tagged seperately
    * All tags should be collected and put into 'tags' in front matter
