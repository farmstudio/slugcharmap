<?php namespace Craft;

class SlugCharMapPlugin extends BasePlugin {
  protected $_version = '1.0',
    $_pluginName = 'SlugCharMap',
    $_pluginUrl = 'https://github.com/farmstudio/slugcharmap',
    $_developer = 'Farm Studio',
    $_developerUrl = 'http://farm.co.hu';

  public function getName() {
    return $this->_pluginName;
  }

  public function getVersion() {
    return $this->_version;
  }

  public function getDeveloper() {
    return $this->_developer;
  }

  public function getDeveloperUrl() {
    return $this->_developerUrl;
  }

  public function getPluginUrl() {
    return $this->_pluginUrl;
  }

  public function init() {
    parent::init();
    $request = craft()->request;

    if (craft()->request->isCpRequest()) {
      $this->addJavascript();
    }
  }

  protected function addJavascript() {
    $charMap = json_encode(StringHelper::getAsciiCharMap());
    craft()->templates->includeJs(
      "$(document).ready(function() {
        Craft.asciiCharMap = $charMap;
    });",
      TRUE
    );
  }
}