<?php  return array (
  0 => 
  array (
    'text' => 'Content',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_site',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'site',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'New Resource',
        'parent' => 'site',
        'action' => 'resource/create',
        'description' => 'Create a Resource — usually a web page',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'new_document',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'new_resource',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Preview Site',
        'parent' => 'site',
        'action' => '',
        'description' => 'View your website in a new window',
        'icon' => '',
        'menuindex' => 4,
        'params' => '',
        'handler' => 'MODx.preview(); return false;',
        'permissions' => '',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'preview',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Import HTML',
        'parent' => 'site',
        'action' => 'system/import/html',
        'description' => 'Import HTML files to Resources',
        'icon' => '',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'import_static',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'import_site',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Import Static Resources',
        'parent' => 'site',
        'action' => 'system/import',
        'description' => 'Import any Content Type based on file extension to Static Resources',
        'icon' => '',
        'menuindex' => 6,
        'params' => '',
        'handler' => '',
        'permissions' => 'import_static',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'import_resources',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'Resource Groups',
        'parent' => 'site',
        'action' => 'security/resourcegroup',
        'description' => 'Assign Resources to Groups',
        'icon' => '',
        'menuindex' => 7,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'resource_groups',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      5 => 
      array (
        'text' => 'Content Types',
        'parent' => 'site',
        'action' => 'system/contenttype',
        'description' => 'Add content types for resources, such as .html, .js, etc.',
        'icon' => '',
        'menuindex' => 8,
        'params' => '',
        'handler' => '',
        'permissions' => 'content_types',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'content_types',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  1 => 
  array (
    'text' => 'Media',
    'parent' => 'topnav',
    'action' => '',
    'description' => 'media_desc',
    'icon' => '',
    'menuindex' => 1,
    'params' => '',
    'handler' => '',
    'permissions' => 'file_manager',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'media',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Media Browser',
        'parent' => 'media',
        'action' => 'media/browser',
        'description' => 'View, upload and manage media',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'file_manager',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'file_browser',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Media Sources',
        'parent' => 'media',
        'action' => 'source',
        'description' => 'Media sources for use of media from remote services or servers',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'sources',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'sources',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  2 => 
  array (
    'text' => 'Extras',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '',
    'menuindex' => 2,
    'params' => '',
    'handler' => '',
    'permissions' => 'components',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'components',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Installer',
        'parent' => 'components',
        'action' => 'workspaces',
        'description' => 'Manage Add-ons and Distributions',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'packages',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'installer',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'modDevTools',
        'parent' => 'components',
        'action' => '1',
        'description' => 'Comfortable management of elements',
        'icon' => 'images/icons/plugin.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_chunk,view_template',
        'namespace' => 'core',
        'action_controller' => 'index',
        'action_namespace' => 'moddevtools',
        'id' => 'moddevtools',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Configuration',
        'parent' => 'components',
        'action' => '2',
        'description' => 'Set and update site configuration.',
        'icon' => 'images/icons/plugin.gif',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => '',
        'namespace' => 'core',
        'action_controller' => 'index',
        'action_namespace' => 'clientconfig',
        'id' => 'clientconfig',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  3 => 
  array (
    'text' => 'Manage',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '',
    'menuindex' => 3,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_tools',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'manage',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Users',
        'parent' => 'manage',
        'action' => 'security/user',
        'description' => 'Manage Users and their Permissions',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_user',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'users',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Clear Cache',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Delete Cache files in all Contexts',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'MODx.clearCache(); return false;',
        'permissions' => 'empty_cache',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'refresh_site',
        'children' => 
        array (
          0 => 
          array (
            'text' => 'Refresh URIs',
            'parent' => 'refresh_site',
            'action' => '',
            'description' => 'Regenerate system Resource URIs.',
            'icon' => '',
            'menuindex' => 0,
            'params' => '',
            'handler' => 'MODx.refreshURIs(); return false;',
            'permissions' => 'empty_cache',
            'namespace' => 'core',
            'action_controller' => NULL,
            'action_namespace' => NULL,
            'id' => 'refreshuris',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Remove Locks',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Remove all locks on Manager pages',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '
MODx.msg.confirm({
    title: _(\'remove_locks\')
    ,text: _(\'confirm_remove_locks\')
    ,url: MODx.config.connectors_url
    ,params: {
        action: \'system/remove_locks\'
    }
    ,listeners: {
        \'success\': {fn:function() {
            var tree = Ext.getCmp("modx-resource-tree");
            if (tree && tree.rendered) {
                tree.refresh();
            }
         },scope:this}
    }
});',
        'permissions' => 'remove_locks',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'remove_locks',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Flush Your Permissions',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Reload this session’s Permissions',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_access\')
    ,text: _(\'flush_access_confirm\')
    ,url: MODx.config.connector_url
    ,params: {
        action: \'security/access/flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'flush_access',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'Logout All Users',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Immediately destroy all sessions',
        'icon' => '',
        'menuindex' => 4,
        'params' => '',
        'handler' => 'MODx.msg.confirm({
    title: _(\'flush_sessions\')
    ,text: _(\'flush_sessions_confirm\')
    ,url: MODx.config.connector_url
    ,params: {
        action: \'security/flush\'
    }
    ,listeners: {
        \'success\': {fn:function() { location.href = \'./\'; },scope:this}
    }
});',
        'permissions' => 'flush_sessions',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'flush_sessions',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      5 => 
      array (
        'text' => 'Reports',
        'parent' => 'manage',
        'action' => '',
        'description' => 'Admin reports for your MODX install',
        'icon' => '',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'menu_reports',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'reports',
        'children' => 
        array (
          0 => 
          array (
            'text' => 'Site Schedule',
            'parent' => 'reports',
            'action' => 'resource/site_schedule',
            'description' => 'View Resources with upcoming publish or unpublish dates.',
            'icon' => '',
            'menuindex' => 0,
            'params' => '',
            'handler' => '',
            'permissions' => 'view_document',
            'namespace' => 'core',
            'action_controller' => NULL,
            'action_namespace' => NULL,
            'id' => 'site_schedule',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
          1 => 
          array (
            'text' => 'Manager Actions',
            'parent' => 'reports',
            'action' => 'system/logs',
            'description' => 'View the recent manager activity.',
            'icon' => '',
            'menuindex' => 1,
            'params' => '',
            'handler' => '',
            'permissions' => 'logs',
            'namespace' => 'core',
            'action_controller' => NULL,
            'action_namespace' => NULL,
            'id' => 'view_logging',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
          2 => 
          array (
            'text' => 'Error Log',
            'parent' => 'reports',
            'action' => 'system/event',
            'description' => 'View the MODX error.log.',
            'icon' => '',
            'menuindex' => 2,
            'params' => '',
            'handler' => '',
            'permissions' => 'view_eventlog',
            'namespace' => 'core',
            'action_controller' => NULL,
            'action_namespace' => NULL,
            'id' => 'eventlog_viewer',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
          3 => 
          array (
            'text' => 'System Info',
            'parent' => 'reports',
            'action' => 'system/info',
            'description' => 'View server information, such as phpinfo, database info, and more.',
            'icon' => '',
            'menuindex' => 3,
            'params' => '',
            'handler' => '',
            'permissions' => 'view_sysinfo',
            'namespace' => 'core',
            'action_controller' => NULL,
            'action_namespace' => NULL,
            'id' => 'view_sysinfo',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
);