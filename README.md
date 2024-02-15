# Pimcore Widget

<!-- TOC -->
* [Pimcore Widget](#pimcore-widget)
    * [Requirements](#requirements)
    * [Installation](#installation)
<!-- TOC -->

## Requirements
This widget is designed for use with Pimcore 10

## Installation
Install the widget using Composer:

```shell
composer require werstreamtes/pimcore-widget
```

Activate the widget using the following command:
```shell
bin/console pimcore:bundle:enable WerStreamtEsWidgetBundle
```

After installation, a new entry `wseWidgetTag` must be added under `Website Settings`. This setting is filled with the desired partner tag.

Feel free to reach out if you have any questions or issues!