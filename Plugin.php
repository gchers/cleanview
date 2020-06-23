<?php

namespace Kanboard\Plugin\CleanView;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
	    $this->template->setTemplateOverride('board/task_footer', 'CleanView:board/task_footer');
	    $this->template->setTemplateOverride('board/task_private', 'CleanView:board/task_private');
	    $this->template->setTemplateOverride('task/dropdown', 'CleanView:task/dropdown');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'CleanView';
    }

    public function getPluginDescription()
    {
        return t('A clean kanboard web interface that works for me');
    }

    public function getPluginAuthor()
    {
        return 'Giovanni Cherubin';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'none';
    }
}

