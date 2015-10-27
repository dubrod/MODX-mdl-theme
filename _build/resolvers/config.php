<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;

if (!function_exists('getResourceMap')) {
    function getResourceMap() {
        global $modx;

        $assetsPath = rtrim($modx->getOption('mdl-theme.assets_path',null,$modx->getOption('assets_path').'components/mdl-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';

        if (is_readable($rmf)) {
            $map = include $rmf;
        } else {
            $map = array();
        }

        return $map;
    }
}

if (!function_exists('createClientConfigSettings')) {
    function createClientConfigSettings($rssResource) {
        global $modx;

        $clientConfigCorePath = $modx->getOption('clientconfig.core_path', null, $modx->getOption('core_path', null, MODX_CORE_PATH) . 'components/clientconfig/');
        /** @var ClientConfig $clientConfig */
        $clientConfig = $modx->getService(
            'clientconfig',
            'ClientConfig',
            $clientConfigCorePath . 'model/clientconfig/',
            array(
                'core_path' => $clientConfigCorePath
            )
        );

        $groups = array();

        $group = $modx->getObject('cgGroup', array('label' => 'Style'));
        if (!$group) {
            $group = $modx->newObject('cgGroup');
            $group->set('label', 'Style');
            $group->set('description', '');
            $group->set('sortorder', '0');
            $group->save();
        }
        $groups['style'] = $group->id;

        $group = $modx->getObject('cgGroup', array('label' => 'Custom Styles'));
        if (!$group) {
            $group = $modx->newObject('cgGroup');
            $group->set('label', 'Custom Styles');
            $group->set('description', '');
            $group->set('sortorder', '1');
            $group->save();
        }
        $groups['customstyles'] = $group->id;

        $settings = array(
            array(
                'key' => 'mdl_accent_color',
                'label' => 'Accent Color',
                'xtype' => 'modx-combo',
                'description' => 'Preview colors: http://www.getmdl.io/customize/index.html',
                'is_required' => '0',
                'sortorder' => '1',
                'value' => "deep_orange",
                'default' => '',
                'group' => $groups['style'],
                'options' => 'indigo||light_blue||blue||purple||deep_purple||cyan||teal||green||light_green||lime||yellow||amber||orange||deep_orange||blue_grey||red||pink'
            ),
            array(
                'key' => 'mdl_body_color',
                'label' => 'Body BG Color',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '0',
                'value' => "grey-100",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_ovr_drawer_bg',
                'label' => 'Drawer BG Color',
                'xtype' => 'textfield',
                'description' => 'override default theme. leave blank to cancel',
                'is_required' => '0',
                'sortorder' => '4',
                'value' => "blue-grey-800",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_ovr_drawer_text',
                'label' => 'Drawer Link Icon Color',
                'xtype' => 'textfield',
                'description' => 'override default theme. leave blank to cancel',
                'is_required' => '0',
                'sortorder' => '6',
                'value' => "blue-grey-400",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_font_link',
                'label' => 'Font Link',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '3',
                'value' => "//fonts.googleapis.com/icon?family=Material+Icons",
                'default' => '',
                'group' => $groups['style'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_ovr_header_bg',
                'label' => 'Header BG Color',
                'xtype' => 'textfield',
                'description' => 'override default theme. leave blank to cancel',
                'is_required' => '0',
                'sortorder' => '0',
                'value' => "white",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_ovr_header_text',
                'label' => 'Header Text Color',
                'xtype' => 'textfield',
                'description' => 'override default theme. leave blank to cancel',
                'is_required' => '0',
                'sortorder' => '1',
                'value' => "grey-600",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_js_link',
                'label' => 'JS Link',
                'xtype' => 'textfield',
                'description' => 'appears in footer',
                'is_required' => '0',
                'sortorder' => '4',
                'value' => "//storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js",
                'default' => '',
                'group' => $groups['style'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_ovr_logo_bg',
                'label' => 'Logo BG Color',
                'xtype' => 'textfield',
                'description' => 'override default theme. leave blank to cancel',
                'is_required' => '0',
                'sortorder' => '2',
                'value' => "blue-grey-900",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_ovr_logo_text',
                'label' => 'Logo Text Color',
                'xtype' => 'textfield',
                'description' => 'override default theme. leave blank to cancel',
                'is_required' => '0',
                'sortorder' => '3',
                'value' => "grey-50",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_drawer_button_color',
                'label' => 'Mobile Icon Color',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '99',
                'value' => "E29407",
                'default' => '',
                'group' => $groups['customstyles'],
                'options' => ''
            ),
            array(
                'key' => 'mdl_primary_color',
                'label' => 'Primary Color',
                'xtype' => 'modx-combo',
                'description' => 'Preview colors: http://www.getmdl.io/customize/index.html',
                'is_required' => '0',
                'sortorder' => '0',
                'value' => "blue_grey",
                'default' => '',
                'group' => $groups['style'],
                'options' => 'indigo||light_blue||blue||purple||deep_purple||cyan||teal||green||light_green||lime||yellow||amber||orange||deep_orange||blue_grey||red||pink'
            )
        );

        foreach ($settings as $setting) {
            $settingObject = $modx->getObject('cgSetting', array('key' => $setting['key']));
            if (!$settingObject) {
                $settingObject = $modx->newObject('cgSetting');
                $settingObject->set('key', $setting['key']);
                $settingObject->set('label', $setting['label']);
                $settingObject->set('xtype', $setting['xtype']);
                $settingObject->set('description', $setting['description']);
                $settingObject->set('is_required', $setting['is_required']);
                $settingObject->set('sortorder', $setting['sortorder']);
                $settingObject->set('value', $setting['value']);
                $settingObject->set('default', $setting['default']);
                $settingObject->set('group', $setting['group']);
                $settingObject->set('options', $setting['options']);
                $settingObject->save();
            }
        }
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:

        $themeSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.theme'));
        if ($themeSetting) {
            $themeSetting->set('value','mdl');
            $themeSetting->save();
        }

        $themeCopyrightSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_copyright'));
        if ($themeCopyrightSetting) {
            $themeCopyrightSetting->set('value','&copy;2015 MODX');
            $themeCopyrightSetting->save();
        }

        $themeSloganSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_slogan'));
        if ($themeSloganSetting) {
            $themeSloganSetting->set('value','Material Design');
            $themeSloganSetting->save();
        }

        $themeImgSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_theme_img'));
        if ($themeImgSetting) {
            $themeImgSetting->set('value','assets/components/mdl-theme/images/modx-revo-2_3-icon.png');
            $themeImgSetting->save();
        }

        if (!(isset($options['install_resources'])) || !(empty($options['install_resources']))) {
            $contentType = $modx->getObject('modContentType', array('name' => 'HTML'));
            if ($contentType) {
                $contentType->set('file_extensions', '/');
                $contentType->save();
            }
        }

        break;
    case xPDOTransport::ACTION_UPGRADE:
        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
