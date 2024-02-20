# Pimcore Widget

<!-- TOC -->
* [Pimcore Widget](#pimcore-widget)
  * [Requirements](#requirements)
  * [Installation](#installation)
  * [Important to know](#important-to-know)
  * [Further Information](#further-information)
<!-- TOC -->
## Requirements
This widget is designed for use with Pimcore 10.2 or higher

## Installation
Install the widget using composer:

```shell
composer require werstreamtes/pimcore-widget
```

or via composer.json
```json
"require" : {
    "werstreamtes/pimcore-widget" : "1.0.0",
}
```

Activate the widget using the following command:
```shell
bin/console pimcore:bundle:enable WerStreamtEsWidgetBundle
```

## Important to know
After installation, a new entry `wseWidgetTag` must be added under `Website Settings`. This setting is filled with the desired partner tag.

![General Settings](settings.gif)

## Further Information

[WerStreamt.es Developer Widget Documentation](https://www.werstreamt.es/developers/widget/)

Feel free to reach out if you have any questions or issues!