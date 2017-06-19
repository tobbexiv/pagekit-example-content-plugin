# Pagekit Example Content Plugin

This extension shows how to create a content plugin. This extension is an example only and thus not deployed to the pagekit marketplace.

A plugin is identified by this coding which can be added anywhere in an editor:
`(<pluginName>){<pluginData>}`
`<pluginName>` is a name you can choose freely (but everybody else can choose the same name, so be careful).
`<pluginData>` is a JSON string with the data which is parsed and then delivered to your callback.

## Features

- Use `(example){}` as the most basic example without providing any plugin data.
- Use `(example){"name":"<yourname"}` as example with plugin data.

## How to work with the extension

1. Download the content of this extension from GitHub and copy it to your local pagekit installation.
2. Modify the extension to your needs.

## Issues and feature requests

Please use the [issues section](https://github.com/tobbexiv/pagekit-example-content-plugin/issues) to file any bugs or feature requests.