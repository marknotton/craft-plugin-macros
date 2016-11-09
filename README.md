<img src="http://i.imgur.com/fDGhICr.png" alt="Macros" align="left" height="60" />

# Macros *for Craft CMS*

Automatically import all macros from a designated directory.

The thinking is, if want to modularise your Macros in a nice tidy folder... you probably are going to have to manually import them one at a time before you can start using them:

```
{% import '_macros' as admin %}
{% import '_macros' as gallery %}
{% import '_macros' as telephone %}
...
```

As soon as this plugin is installed, all macros are imported. No more bul importing. You can amend the default macro folder in the plugin settings.

If the name of the file matches tha name of a macro within your file. You can target it like so:

```
{{ macro_telephone('12345678890') }}
```

If you have a few macros inside your Macro files, you can target those like so:

```
{{ macro_telephone_mobile('12345678890') }}
```

## Acknowledgement

A big thank you to [Heal](http://stackoverflow.com/users/4323472/heah) for providing such a [detailed answer](http://stackoverflow.com/questions/35136997/how-to-import-multiple-macros) and going on to create a [gist](https://gist.github.com/HeahDude/f9aeb128fcac309dddc8) for exactly the purposes of what this plugin does.
