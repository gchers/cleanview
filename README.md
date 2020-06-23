Clean View
==============================

A clean [kanboard](https://kanboard.org) template that works well for me.

Features:

- Shows subtasks menu in collapsed view
- In expanded view, subtasks are shown within the task containers
- Some decluttering to make the interface cleaner and more useful (for my needs)

I use this for my personal kanboard installation. Use at your own risk.

**iOS users** you can get your kanboard installation to behave like a
progressive web app (i.e., more or less like a native app)
for your iThing by adding the following line to the
`index.php` in your installation:

```html
<meta name="apple-mobile-web-app-capable" content="yes">
```

then add your kanboard home page to your iThing's home screen.

If you know of a better way -- which there probably is, please
get in touch:)


Requirements
------------

- Kanboard >= 1.0.35

Installation
------------

You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/CleanView`
3. Clone this repository into the folder `plugins/CleanView`

Note: Plugin folder is case-sensitive.

Hacking
-------

This plugin overrides the template of kanboard 1.2.15.
To see the changes from their code, diff the current master with
commit `15ed4b6b7cc385dfe1ac26a374af91c374b87397`. 

Author
------

- Giovanni Cherubin
- License MIT
