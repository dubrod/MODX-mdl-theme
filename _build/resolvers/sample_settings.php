<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;

if (!function_exists('getResourceMap')) {
    function getResourceMap() {
        global $modx;

        $assetsPath = rtrim($modx->getOption('mdltheme.assets_path',null,$modx->getOption('assets_path').'components/mdl-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';

        if (is_readable($rmf)) {
            $map = include $rmf;
        } else {
            $map = array();
        }

        return $map;
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
        if (isset($options['install_resources']) && empty($options['install_resources'])) return true;

        $resourceMap =  getResourceMap();

        if (!empty($resourceMap['Home'])) {
            /** @var modResource $homeResource */
            $homeResource = $modx->getObject('modResource', $resourceMap['Home']);
        }

        break;
    case xPDOTransport::ACTION_UPGRADE:
        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
