# SlugCharMap

Craft CMS allows custom character transliteration to ASCII by setting the customAsciiCharMappings value in general.php:

http://buildwithcraft.com/docs/config-settings#customAsciiCharMappings

Unfortunately, this won't affect the slug generation mapping, which is hardcoded in craft.js, see:

http://craftcms.stackexchange.com/questions/9110/trouble-with-transliteration-in-slug-caused-by-hardcoded-charmap-in-craft-js

This plugin will apply the customAsciiCharMappings setting, so that it works while generating slugs.

# Installation:

1. Install the plugin under craft/plugins/slugcharmap, so that you end up with:

craft/plugins/slugcharmap/SlugCharMapPlugin.php

2. Enable the plugin in the control panel

3. Define the customAsciiCharMappings setting in general.php, see documentation for guidance:

http://buildwithcraft.com/docs/config-settings#customAsciiCharMappings
