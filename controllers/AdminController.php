<?php
/**
 * @category    Pimcore Plugin
 * @date        13/06/2017 15:49
 * @author      Jakub Płaskonka <jplaskonka@divante.pl>
 * @copyright   Copyright (c) 2017 Divante Ltd. (https://divante.co)
 */

/**
 * Class GitlabLogin_AdminController
 *
 * @package GitlabLogin
 */
class GitlabLogin_AdminController extends \Pimcore\Controller\Action\Admin
{
    /**
     * Index Action - makes config file editing possible
     */
    public function indexAction()
    {
        $configHelper = new \GitlabLogin\Helper\Config();
        $config = $configHelper->getConfig();

        if (sizeof($params = $this->getAllParams()) > 4) {
            foreach ($params as $configKey => $configItem) {
                $config->$configKey = $configItem;
            }

            $configHelper->saveConfig($config);
            $this->view->saved = true;
        }

        foreach ($config as $configKey => $configItem) {
            $this->view->$configKey = $configItem;
        }
    }
}
