<?php
namespace Craft;

class MacrosPlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Macros');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-macros';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-macros/master/macros/releases.json';
  }

  public function addTwigExtension() {
    Craft::import('plugins.macros.twigextensions.macros');
    return new macros();
  }

  public function getSettingsHtml() {
    return craft()->templates->render('macros/settings', array(
      'settings' => $this->getSettings()
    ));
  }

  protected function defineSettings() {
    return array(
      'directory' => array(AttributeType::String, 'default' => ''),
    );
  }

  // TODO: Using routeVariables, allow for a template to disable generating macros for that page
  // TODO: onBeforeInstall, copy over a library of useful macros to the 'directory' settings
  // TODO: if the 'directory' settings are updated, move the library of macros to new location
}
