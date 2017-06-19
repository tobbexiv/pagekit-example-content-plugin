<?php

namespace Tobbe\ExampleContentPlugin\Plugin;

use Pagekit\Content\Event\ContentEvent;
use Pagekit\Event\EventSubscriberInterface;

/**
 * A plugin is identified by this coding:
 * <code>(pluginName){pluginData}</code>
 * <code>pluginName</code> is a name you can choose freely (but everybody else can choose the same name, so be careful).
 * <code>pluginData</code> is a JSON string with the data which is parsed and then delivered to your callback.
 */
class ExampleContentPlugin implements EventSubscriberInterface
{

    /**
     * Callback to register one or more content plugins.
     *
     * @param ContentEvent $event            
     */
    public function onContentPlugins(ContentEvent $event)
    {
        $event->addPlugin(
            'example', // The plugin name.
            [ 
                $this,
                'applyPlugin' // The name of the callback to execute the plugin.
            ]
        );
    }

    /**
     * The plugin callback.
     *
     * @param array $options
     *   The options for the plugin (the parsed pluginData).
     * @return string|null
     *   The content which should replace the plugin definition.
     */
    public function applyPlugin(array $options)
    {
        if(isset($options['name'])) {
            return 'Hi ' . $options['name'] . ', my example works!';
        } else {
            return 'My example works!';
        }
    }

    /**
     *
     * {@inheritdoc}
     *
     */
    public function subscribe()
    {
        return [
            'content.plugins' => [
                'onContentPlugins', // The name of the callback to register the content plugin(s).
                25                  // Must be at least 11 to get the plugin to work.
            ]
        ];
    }
}