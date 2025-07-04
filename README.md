# Pimcore Widget

<!-- TOC -->
* [Pimcore Widget](#pimcore-widget)
  * [Requirements](#requirements)
  * [Installation](#installation)
  * [Good to know](#good-to-know)
  * [Further Information](#further-information)
<!-- TOC -->

### Requirements
This widget is designed for use with Pimcore 10.2 or higher.

### Installation
Install the widget using composer:

```shell
composer require werstreamtes/pimcore-widget
```

or via composer.json:
```json
"require" : {
    "werstreamtes/pimcore-widget" : "1.0.1",
}
```

Activate the widget using the following command:
```shell
bin/console pimcore:bundle:enable WerStreamtEsWidgetBundle
```

### Good to know

If you are part of the WerStreamt.es partner program, you can save your tag in the website settings.

Go to the website settings and create a new entry with the key `wseWidgetTag` of type `Text`. You can fill this with your partner tag.

![General Settings](settings.gif)

### Further Information

* [WerStreamt.es Developer Widget Documentation](https://www.werstreamt.es/developers/widget/)


Feel free to reach out if you have any questions or issues!
