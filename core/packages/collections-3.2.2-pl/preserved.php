<?php return array (
  '415243d290a7da05c1868203b13b9c93' => 
  array (
    'criteria' => 
    array (
      'name' => 'collections',
    ),
    'object' => 
    array (
      'name' => 'collections',
      'path' => '{core_path}components/collections/',
      'assets_path' => '{assets_path}components/collections/',
    ),
  ),
  '2eb9585d5a65540101bd82faed77809e' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.mgr_date_format',
    ),
    'object' => 
    array (
      'key' => 'collections.mgr_date_format',
      'value' => 'M d',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '17f7b3afecccd4a6bd35399c7b8ef2a5' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.mgr_time_format',
    ),
    'object' => 
    array (
      'key' => 'collections.mgr_time_format',
      'value' => 'g:i a',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a4aa02e98b8c5325aeced4a831c666d7' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.mgr_datetime_format',
    ),
    'object' => 
    array (
      'key' => 'collections.mgr_datetime_format',
      'value' => 'M d, g:i a',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '64d4dbf73c2c8c75d43af16a32d29359' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.user_js',
    ),
    'object' => 
    array (
      'key' => 'collections.user_js',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a8eeb6882547648b3b325d0166199c4c' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.user_css',
    ),
    'object' => 
    array (
      'key' => 'collections.user_css',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '622c8dab8216e2d2ad558f39cc5ba4e2' => 
  array (
    'criteria' => 
    array (
      'key' => 'mgr_tree_icon_collectioncontainer',
    ),
    'object' => 
    array (
      'key' => 'mgr_tree_icon_collectioncontainer',
      'value' => 'collectioncontainer',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd7ab1d2bb47b317bc4eaa15ae5a33b2f' => 
  array (
    'criteria' => 
    array (
      'key' => 'mgr_tree_icon_selectioncontainer',
    ),
    'object' => 
    array (
      'key' => 'mgr_tree_icon_selectioncontainer',
      'value' => 'selectioncontainer',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9cdf2f0fce71e6265fb532d2e85f40bb' => 
  array (
    'criteria' => 
    array (
      'key' => 'collections.renderer_image_path',
    ),
    'object' => 
    array (
      'key' => 'collections.renderer_image_path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'collections',
      'area' => 'default',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0192fe825d346f0b0b9461868401a45c' => 
  array (
    'criteria' => 
    array (
      'category' => 'Collections',
    ),
    'object' => 
    array (
      'id' => 12,
      'parent' => 0,
      'category' => 'Collections',
      'rank' => 0,
    ),
  ),
  '5fcbb276ba17ea70b0c30050c83f4fab' => 
  array (
    'criteria' => 
    array (
      'name' => 'getSelections',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'getSelections',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/**
 * getSelections
 *
 * DESCRIPTION
 *
 * This snippet is a helper for getResources call.
 * It will allows you to select all linked resources under specific Selection with a usage of getResources snippet.
 * Returns distinct list of linked Resources for given Selections
 *
 * getResources are required
 *
 * PROPERTIES:
 *
 * &sortdir                 string  optional    Direction of sorting by linked resource\'s menuindex. Default: ASC
 * &selections              string  optional    Comma separated list of Selection IDs for which should be retrieved linked resources. Default: empty string
 * &getResourcesSnippet     string  optional    Name of getResources snippet. Default: getResources
 *
 * USAGE:
 *
 * [[getSelections? &selections=`1` &tpl=`rowTpl`]]
 * [[getSelections? &selections=`1` &tpl=`rowTpl` &sortby=`RAND()`]]
 *
 */

$collections = $modx->getService(\'collections\',\'Collections\',$modx->getOption(\'collections.core_path\',null,$modx->getOption(\'core_path\').\'components/collections/\').\'model/collections/\',$scriptProperties);
if (!($collections instanceof Collections)) return \'\';

$getResourcesSnippet = $modx->getOption(\'getResourcesSnippet\', $scriptProperties, \'getResources\');

$getResourcesExists = $modx->getCount(\'modSnippet\', array(\'name\' => $getResourcesSnippet));
if ($getResourcesExists == 0) return \'getResources not found\';

$sortDir = strtolower($modx->getOption(\'sortdir\', $scriptProperties, \'asc\'));
$selections = $modx->getOption(\'selections\', $scriptProperties, \'\');
$sortBy = $modx->getOption(\'sortby\', $scriptProperties, \'\');

$selections = $modx->collections->explodeAndClean($selections);

if ($sortDir != \'asc\') {
    $sortDir = \'desc\';
}

$linkedResourcesQuery = $modx->newQuery(\'CollectionSelection\');

if (!empty($selections)) {
    $linkedResourcesQuery->where(array(
        \'collection:IN\' => $selections
    ));
}

if ($sortBy == \'\') {
    $linkedResourcesQuery->sortby(\'menuindex\', $sortDir);
}

$linkedResourcesQuery->select(array(
    \'resource\' => \'DISTINCT(resource)\'
));

$linkedResourcesQuery->prepare();

$linkedResourcesQuery->stmt->execute();

$linkedResources = $linkedResourcesQuery->stmt->fetchAll(PDO::FETCH_COLUMN, 0);
$linkedResources = implode(\',\', $linkedResources);

$properties = $scriptProperties;
unset($properties[\'selections\']);

$properties[\'resources\'] = $linkedResources;
$properties[\'parents\'] = -1;

if ($sortBy == \'\') {
    $properties[\'sortby\'] = \'FIELD(modResource.id, \' . $linkedResources . \' )\';
    $properties[\'sortdir\'] = \'asc\';
}

return $modx->runSnippet($getResourcesSnippet, $properties);',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * getSelections
 *
 * DESCRIPTION
 *
 * This snippet is a helper for getResources call.
 * It will allows you to select all linked resources under specific Selection with a usage of getResources snippet.
 * Returns distinct list of linked Resources for given Selections
 *
 * getResources are required
 *
 * PROPERTIES:
 *
 * &sortdir                 string  optional    Direction of sorting by linked resource\'s menuindex. Default: ASC
 * &selections              string  optional    Comma separated list of Selection IDs for which should be retrieved linked resources. Default: empty string
 * &getResourcesSnippet     string  optional    Name of getResources snippet. Default: getResources
 *
 * USAGE:
 *
 * [[getSelections? &selections=`1` &tpl=`rowTpl`]]
 * [[getSelections? &selections=`1` &tpl=`rowTpl` &sortby=`RAND()`]]
 *
 */

$collections = $modx->getService(\'collections\',\'Collections\',$modx->getOption(\'collections.core_path\',null,$modx->getOption(\'core_path\').\'components/collections/\').\'model/collections/\',$scriptProperties);
if (!($collections instanceof Collections)) return \'\';

$getResourcesSnippet = $modx->getOption(\'getResourcesSnippet\', $scriptProperties, \'getResources\');

$getResourcesExists = $modx->getCount(\'modSnippet\', array(\'name\' => $getResourcesSnippet));
if ($getResourcesExists == 0) return \'getResources not found\';

$sortDir = strtolower($modx->getOption(\'sortdir\', $scriptProperties, \'asc\'));
$selections = $modx->getOption(\'selections\', $scriptProperties, \'\');
$sortBy = $modx->getOption(\'sortby\', $scriptProperties, \'\');

$selections = $modx->collections->explodeAndClean($selections);

if ($sortDir != \'asc\') {
    $sortDir = \'desc\';
}

$linkedResourcesQuery = $modx->newQuery(\'CollectionSelection\');

if (!empty($selections)) {
    $linkedResourcesQuery->where(array(
        \'collection:IN\' => $selections
    ));
}

if ($sortBy == \'\') {
    $linkedResourcesQuery->sortby(\'menuindex\', $sortDir);
}

$linkedResourcesQuery->select(array(
    \'resource\' => \'DISTINCT(resource)\'
));

$linkedResourcesQuery->prepare();

$linkedResourcesQuery->stmt->execute();

$linkedResources = $linkedResourcesQuery->stmt->fetchAll(PDO::FETCH_COLUMN, 0);
$linkedResources = implode(\',\', $linkedResources);

$properties = $scriptProperties;
unset($properties[\'selections\']);

$properties[\'resources\'] = $linkedResources;
$properties[\'parents\'] = -1;

if ($sortBy == \'\') {
    $properties[\'sortby\'] = \'FIELD(modResource.id, \' . $linkedResources . \' )\';
    $properties[\'sortdir\'] = \'asc\';
}

return $modx->runSnippet($getResourcesSnippet, $properties);',
    ),
  ),
  '32d0426078f926d57acb63a065e26c2e' => 
  array (
    'criteria' => 
    array (
      'name' => 'Collections',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Collections',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'plugincode' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
    ),
  ),
  '55df0852574c3169cf196dc710255083' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnManagerPageInit',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnManagerPageInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'ed97e3ee19113264c53ce2db7daa16f6' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnBeforeDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnBeforeDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c630c7dbf1544085bab6958ebc852b6c' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnResourceBeforeSort',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnResourceBeforeSort',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '93959dcb15672cadec5b68c64980b51e' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'fecf828381e97198d33c88199f2ff7f5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnBeforeEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnBeforeEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '99cf7e6b59665eef235a284a71d754f9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '872e0c65ec60aa81f0ad9f7d088ab925' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'collections',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 3,
      'namespace' => 'collections',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'collections:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '105a9227302dca1d386f9557c7cd3a05' => 
  array (
    'criteria' => 
    array (
      'text' => 'collections.menu.collection_templates',
    ),
    'object' => 
    array (
      'text' => 'collections.menu.collection_templates',
      'parent' => 'components',
      'action' => '3',
      'description' => 'collections.menu.collection_templates_desc',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
);