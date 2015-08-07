<?php  return array (
  0 => 
  array (
    'text' => 'User',
    'parent' => 'usernav',
    'action' => '',
    'description' => '',
    'icon' => '<span id="user-avatar">{$userImage}</span> <span id="user-username">{$username}</span>',
    'menuindex' => 5,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_user',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'user',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Edit Account',
        'parent' => 'user',
        'action' => 'security/profile',
        'description' => 'Update account email, password or info',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'change_profile',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'profile',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Messages',
        'parent' => 'user',
        'action' => 'security/message',
        'description' => 'View and send messages',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'messages',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'messages',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Logout',
        'parent' => 'user',
        'action' => 'security/logout',
        'description' => 'Log out of the Manager',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => 'MODx.logout(); return false;',
        'permissions' => 'logout',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'logout',
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
    'text' => 'Admin',
    'parent' => 'usernav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-gear icon icon-large"></i>',
    'menuindex' => 6,
    'params' => '',
    'handler' => '',
    'permissions' => 'settings',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'admin',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'System Settings',
        'parent' => 'admin',
        'action' => 'system/settings',
        'description' => 'Configure all system settings',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'settings',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'system_settings',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Manager Customization',
        'parent' => 'admin',
        'action' => 'security/forms',
        'description' => 'Manage bespoke MODX Managers',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'customize_forms',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'bespoke_manager',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Dashboards',
        'parent' => 'admin',
        'action' => 'system/dashboards',
        'description' => 'Manage custom login Dashboards',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'dashboards',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'dashboards',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Contexts',
        'parent' => 'admin',
        'action' => 'context',
        'description' => 'Manage Contexts and their settings',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_context',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'contexts',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'Menus',
        'parent' => 'admin',
        'action' => 'system/action',
        'description' => 'Manage the top Manager menu',
        'icon' => '',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'actions',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'edit_menu',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      5 => 
      array (
        'text' => 'Access Control Lists',
        'parent' => 'admin',
        'action' => 'security/permission',
        'description' => 'Manage Permissions through Groups, Roles and Access Policies',
        'icon' => '',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'acls',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      6 => 
      array (
        'text' => 'Property Sets',
        'parent' => 'admin',
        'action' => 'element/propertyset',
        'description' => 'Manage Element property sets',
        'icon' => '',
        'menuindex' => 6,
        'params' => '',
        'handler' => '',
        'permissions' => 'property_sets',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'propertysets',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      7 => 
      array (
        'text' => 'Lexicons',
        'parent' => 'admin',
        'action' => 'workspaces/lexicon',
        'description' => 'Edit Manager language strings',
        'icon' => '',
        'menuindex' => 7,
        'params' => '',
        'handler' => '',
        'permissions' => 'lexicons',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'lexicon_management',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      8 => 
      array (
        'text' => 'Namespaces',
        'parent' => 'admin',
        'action' => 'workspaces/namespace',
        'description' => 'Distinguish between Add-on settings',
        'icon' => '',
        'menuindex' => 8,
        'params' => '',
        'handler' => '',
        'permissions' => 'namespaces',
        'namespace' => 'core',
        'action_controller' => NULL,
        'action_namespace' => NULL,
        'id' => 'namespaces',
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
    'text' => 'About',
    'parent' => 'usernav',
    'action' => 'help',
    'description' => '',
    'icon' => '<i class="icon-question-circle icon icon-large"></i>',
    'menuindex' => 7,
    'params' => '',
    'handler' => '',
    'permissions' => 'help',
    'namespace' => 'core',
    'action_controller' => NULL,
    'action_namespace' => NULL,
    'id' => 'about',
    'children' => 
    array (
    ),
    'controller' => '',
  ),
);