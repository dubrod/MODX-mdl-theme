<?php
/**
 *
 * Resolve Resources
 *
 * THIS RESOLVER IS AUTOMATICALLY GENERATED, NO CHANGES WILL APPLY
 *
 * @package mdl-theme
 * @subpackage build
 */

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

if (!function_exists('setResourceMap')) {
    function setResourceMap($resourceMap) {
        global $modx;

        $assetsPath = rtrim($modx->getOption('mdl-theme.assets_path',null,$modx->getOption('assets_path').'components/mdl-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';
        file_put_contents($rmf, '<?php return ' . var_export($resourceMap, true) . ';');

    }
}

if (!function_exists('createResource')) {
    function createResource($resource) {
        global $modx;

        if (isset($resource['tvs'])) {
            $tvs = $resource['tvs'];
            unset($resource['tvs']);
        } else {
            $tvs = array();
        }

        $res = $modx->runProcessor('resource/create', $resource);
        $resObject = $res->getObject();

        if ($resObject && isset($resObject['id'])) {
            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', array('id' => $resObject['id']));

            if ($modResource) {
                foreach ($tvs as $tv) {
                    $modResource->setTVValue($tv['name'], $tv['value']);
                }

                return $modResource->id;
            }
        }

        return false;
    }
}

if (!function_exists('updateResource')) {
    function updateResource($resource) {
        global $modx;

        if (isset($resource['tvs'])) {
            $tvs = $resource['tvs'];
            unset($resource['tvs']);
        } else {
            $tvs = array();
        }

        $res = $modx->runProcessor('resource/update', $resource);
        $resObject = $res->getObject();

        if ($resObject && isset($resObject['id'])) {
            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', array('id' => $resObject['id']));

            if ($modResource) {
                foreach ($tvs as $tv) {
                    $modResource->setTVValue($tv['name'], $tv['value']);
                }

                return $modResource->id;
            }
        }

        return false;
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
        $resources = array (
  0 => 
  array (
    'pagetitle' => 'Home',
    'alias' => 'index',
    'parent' => 0,
    'content' => '',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 1,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'grid',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '3',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  1 => 
  array (
    'pagetitle' => 'Style Guide',
    'alias' => 'style-guide',
    'parent' => 0,
    'content' => '[[$style-guide-mdl]]',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Style Guide',
    'description' => '',
    'isfolder' => 0,
    'introtext' => 'MODX Revolution is the web content management platform for those that truly care about no-compromise design and exceptional user experience.',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  2 => 
  array (
    'pagetitle' => 'Articles',
    'alias' => 'articles',
    'parent' => 0,
    'content' => '<p>Look you can put text here. Just make sure it\'s something short and to the point because you probably have a big listing section right below this.</p>',
    'context_key' => 'web',
    'class_key' => 'CollectionContainer',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 1,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'listing',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '3',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  3 => 
  array (
    'pagetitle' => 'Keeping MODX Relevant — Part One',
    'alias' => 'keeping-modx-relevant-part-one',
    'parent' => 'Articles',
    'content' => '<p>Deciding when to let go of the past and try new adventures is always stressful, and leading an Open-Source Software project like MODX affords me ample opportunity to experience this nexus of freewill. Unfortunately, it does not always provide the same abundance of time and resources needed to focus on making the hard choices.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Keeping MODX Relevant — Part One',
    'description' => 'It’s been over 10 years since Ryan, Raymond, and myself founded the MODX CMS project and a lot has changed in the world of both content management and web development in that time.',
    'isfolder' => 0,
    'introtext' => 'It’s been over 10 years since Ryan, Raymond, and myself founded the MODX CMS project and a lot has changed in the world of both content management and web development in that time. ',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  4 => 
  array (
    'pagetitle' => 'Accessibility Campaign Update #1',
    'alias' => 'accessibility-campaign-update-1',
    'parent' => 'Articles',
    'content' => '<p>Since then, we’ve had a wonderful response, with generous donors from around the world. To date we’ve raised a $29,648 including the $25,000 from The Ohio State University—just shy of 60% of our goal! The other comes from:</p><ul><li>76 awesome MODX Community members</li><li>Each contributing an average of $57</li><li>Three individuals generously gave $500</li><li>Eight others showed a big thumbs-up with $100</li><li>43% of supporters have made contributions of $25</li></ul>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Accessibility Campaign Update #1',
    'description' => 'We launched our fundraising campaign to make the MODX Revolution Manager accessible just over a week ago.',
    'isfolder' => 0,
    'introtext' => 'We launched our fundraising campaign to make the MODX Revolution Manager accessible just over a week ago.',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '3',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  5 => 
  array (
    'pagetitle' => 'MODXpo 2015',
    'alias' => 'modxpo-2015',
    'parent' => 'Articles',
    'content' => '<p>We’re proud to announce that the fourth, official MODXpo will take place on November 21 and 22 in Munich, Germany.</p><p>The previous official MODXpo was hosted in <a href="http://2013.modxpo.eu/" title="MODXpo 2013 in Cologne, Germany - MODXpo Europe 2013">November 2013 in Cologne, Germany</a>. After a year hiatus (though not without an <a href="https://conference.modmore.com/" title="Reimagined MODX Conference  &amp;bull; modmore.com">awesome MODX conference</a> in between), web designer and MODX Ambassador, <a href="http://www.bdcreative-design.com/" title="Home - BD Website Architecture and Web Design">Benjamin Davis</a>, has taken the reins as chief organizer for the next official MODXpo with major help from the <a href="http://www.meetup.com/MODX-Muenchen/" title="MODX Meetup München (Munich)">MODX Munich Meetup Group</a> and other <a href="http://modx.com/ambassadors" title="MODX Ambassadors">MODX Ambassadors</a>.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'MODXpo 2015',
    'description' => 'Announcing MODXpo 2015 November 21-22 in Munich, Germany',
    'isfolder' => 0,
    'introtext' => 'Announcing MODXpo 2015 November 21-22 in Munich, Germany',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'sidebar',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '7',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  6 => 
  array (
    'pagetitle' => 'MODX Cloud Update June 25',
    'alias' => 'modx-cloud-update-june-25',
    'parent' => 'Articles',
    'content' => '<p>We’ve improved the documentation, made the Dashboard faster to work with, updated to the latest MODX releases including 2.3.5, updated the web server stacks and more. You can also now enable Two-factor Authentication (2fA) for MODX Cloud Dashboard logins, improving security and keeping your data safe.</p><h3>Prepare for PHP 5.6</h3><p>Speaking of PHP, but we wanted to let you know that in the coming weeks, MODX Cloud will upgrade PHP to 5.6.x and nginx to 1.8.x, corresponding with PHP 5.4.x coming to its end of support. Cloud account holders will receive a notice via email as well. We will make a test server available for users that wish to test the build in Cloud.</p>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'MODX Cloud Update June 25',
    'description' => 'We’ve continued improving the underlying technology in Cloud ahead of some exciting new capabilities coming later this Summer.',
    'isfolder' => 0,
    'introtext' => 'We’ve continued improving the underlying technology in Cloud ahead of some exciting new capabilities coming later this Summer.',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  7 => 
  array (
    'pagetitle' => 'MODX Cloud Update July 23',
    'alias' => 'modx-cloud-update-july-23',
    'parent' => 'Articles',
    'content' => '<p>The biggest change in this update is that MODX Cloud now serves your sites via PHP 5.6.x and nginx 1.8.x. Most sites should perform faster thanks to improved opcache and code efficiency, and we’ve ensured your sites will be on a stable, supported server stack. Other highlights include:</p><ul><li>Improved documentation for SSL, nginx rewrites and overall organization.</li><li>Improved reliability and behavior of robots.txt when the same domain was accidentally added to multiple times or to multiple Clouds.</li><li>Fixed a bug with next invoice display for some users.</li><li>Solved a bug where some users had blank pages requiring a refresh when Two-Factor Authentication (2FA) was enabled.</li><li>Updated the billing system to accommodate the upcoming launch of Private Servers.</li><li>And finally, don’t forget anyone can test sites running under SSL for free when building new projects on the internal <em>c000X.paas…</em> MODX Cloud URLs.</li></ul><h3>Ihr habt entschieden!</h3>',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'MODX Cloud Update July 23',
    'description' => 'We’ve continued improving workflows and fixing minor bugs to make for a more pleasant user experience, and to future-proof MODX Cloud.',
    'isfolder' => 0,
    'introtext' => 'We’ve continued improving workflows and fixing minor bugs to make for a more pleasant user experience, and to future-proof MODX Cloud.',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
  8 => 
  array (
    'pagetitle' => 'Contact',
    'alias' => 'contact',
    'parent' => 0,
    'content' => '[[!$mxt.feature_contact_form_[[++mxt.theme]]]]',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
    'richtext' => 0,
  ),
  9 => 
  array (
    'pagetitle' => 'Search Results',
    'alias' => 'search-results',
    'parent' => 0,
    'content' => '[[!SimpleSearch? &containerTpl=`tpl_searchresultwrapper_mdl` &tpl=`tpl_searchresult_mdl`]]',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => '',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 0,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'page',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => '',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
    'hidemenu' => 1,
    'richtext' => 0,
  ),
);

        $resourceMap = getResourceMap();
        $toRemove = $resourceMap;
        $siteStart = $modx->getOption('site_start');

        foreach ($resources as $resource) {
            if (is_string($resource['parent'])) {
                if (isset($resourceMap[$resource['parent']])) {
                    $resource['parent'] = $resourceMap[$resource['parent']];
                } else {
                    /** @var modResource $parent */
                    $parent = $modx->getObject('modResource', array('pagetitle' => $resource['parent']));
                    if ($parent) {
                        $resource['parent'] = $parent->id;
                    }
                }
            } else {
                if ($resource['parent'] != 0) {
                    /** @var modResource $parent */
                    $parent = $modx->getObject('modResource', array('id' => $resource['parent']));
                    if ($parent) {
                        $resource['parent'] = $parent->id;
                    }
                } else {
                    $resource['parent'] = 0;
                }
            }

            if ($resource['template'] !== null) {
                if ($resource['template'] !== 0) {
                    $template = $modx->getObject('modTemplate', array('templatename' => $resource['template']));
                    if ($template) {
                        $resource['template'] = $template->id;
                    }
                } else {
                    $resource['template'] = 0;
                }
            }

            if ($resource['content_type'] !== null) {
                $content_type = $modx->getObject('modContentType', array('name' => $resource['content_type']));
                if ($content_type) {
                    $resource['content_type'] = $content_type->id;
                }
            } else {
                $resource['content_type'] = $modx->getOption('default_content_type', null, 1);
            }

            if (isset($resourceMap[$resource['pagetitle']])) {
                unset($toRemove[$resource['pagetitle']]);

                /** @var modResource $exists */
                $exists = $modx->getObject('modResource', array('id' => $resourceMap[$resource['pagetitle']]));
                if ($exists) {
                    $resource['id'] = $exists->id;
                    $resId = updateResource($resource);

                    if ($resId !== false) {
                        $resourceMap[$resource['pagetitle']] = $resId;
                    }
                } else {
                    if ($resource['set_as_home'] == 1) {
                        unset($resource['set_as_home']);
                        $resource['id'] = $siteStart;

                        $resId = updateResource($resource);

                        if ($resId !== false) {
                            $resourceMap[$resource['pagetitle']] = $resId;
                        }
                    } else {
                        $resId = createResource($resource);

                        if ($resId !== false) {
                            $resourceMap[$resource['pagetitle']] = $resId;
                        }
                    }
                }
            } else {
                $resId = createResource($resource);

                if ($resId !== false) {
                    $resourceMap[$resource['pagetitle']] = $resId;
                }
            }
        }

        foreach ($toRemove as $pageTitle => $resource) {
            unset($resourceMap[$pageTitle]);

            if ($resource == $siteStart) continue;

            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', $resource);
            if ($modResource) {
                $modx->updateCollection('modResource', array('parent' => 0), array('parent' => $resource));

                $modResource->remove();
            }
        }

        setResourceMap($resourceMap);

        break;
    case xPDOTransport::ACTION_UNINSTALL:

        break;
}

return true;