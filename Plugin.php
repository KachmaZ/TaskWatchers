<?php

namespace Kanboard\Plugin\TaskWatchers;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

use Kanboard\Plugin\TaskWatchers\Action\TestAction;

class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TestAction($this->container));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'TaskWatchers';
    }

    public function getPluginDescription()
    {
        return t('My plugin is awesome');
    }

    public function getPluginAuthor()
    {
        return 'Arthur Kachmazov';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kanboard/plugin-myplugin';
    }
}

