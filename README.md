OctoberCMS Menu Manager Plugin
=====================

An OctoberCMS plugin to allow menu creation for any page/elements of your site.

## Versions ##

**Currently 2.0.0**

### 2.0.0

- Fixed bug where getBaseFileName method was moved to a different object

# Documentation

Please see the wiki for full documentation

## Behind the scenes

Menu Manager takes advantage of Nested Sets to allow quick traversal and drag and drop functionality. It also makes working out the active page and active parents super simple.

By default no items are created. If you are developing, simply add the seed file back into the update file and run a `php artisan plugin:refresh` on the server to have some date pre-inserted.

## The Parent Node

This is the node from which the menu will be populated. The component will collect all the children of this node and create the menu content from these children nodes. For example, consider this default structure based loosely off the October CMS demo pages.

    - Main Menu
    -- Home
    --- Plugin Components
    --- Ajax Framework

If we select "Main Menu" as the Parent Node, we will have 1 menu item visible. This will the title of "Home" and will be a bootstrap style dropdown navigation. Clicking on home will reveal 2 sub-menu items, "Plugin Components" and "Ajax Framework".

If we select "Home" as the Parent Node, we will have 2 menu items visible, "Plugin Components" and "Ajax Framework".

This allows the creation of side navigation relevant to the page you are currently on by re-using the same backend menu but having separate components on the page use different Parent Nodes to change the output.

## Other

If you have any suggestions, please [raise an issue](https://github.com/benfreke/oc-menumanager-plugin/issues) on the plugin's [github repository](https://github.com/benfreke/oc-menumanager-plugin).

## Thanks / Contributions

- Obviously the [OctoberCMS](http://octobercms.com/) creators, [Samuel Georges](https://github.com/daftspunk) and [Aleksey Bobkov](https://github.com/alekseybobkov)
- [DanielHitchen](https://github.com/DanielHitchen) for bug reporting, enhancements and requests/ideas
- [Adis](https://github.com/adisos) for help with the 1.1.x releases

