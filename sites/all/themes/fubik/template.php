<?php

/**
 * Preprocessor for theme('page').
 */
function fubik_preprocess_html(&$vars) {

  $vars['classes_array'][] = 'fubik';

  if(isset($vars['page']['sidebar_first'])) {
    $vars['classes_array'][] = 'fubik-sidebar-first';
  }
  if(isset($vars['page']['sidebar_second'])) {
    $vars['classes_array'][] = 'fubik-sidebar-second';
  }
  if(isset($vars['page']['sidebar_first']) && isset($vars['page']['sidebar_second'])) {
    $vars['classes_array'][] = 'fubik-two-sidebars';
  }
  if((!isset($vars['page']['sidebar_first']) && isset($vars['page']['sidebar_second'])) || (isset($vars['page']['sidebar_first']) && !isset($vars['page']['sidebar_second']))) {
    $vars['classes_array'][] = 'fubik-one-sidebar';
  }
  if(!isset($vars['page']['sidebar_first']) && !isset($vars['page']['sidebar_second'])) {
    $vars['classes_array'][] = 'fubik-no-sidebars';
  }

  if (_fubik_has_tabs()) {
    $vars['classes_array'][] = 'with-local-tasks';
  }
}

/**
 * Preprocessor for theme('page').
 */
function fubik_preprocess_page(&$vars) {
  // Process local tasks. Only do this processing if the current theme is
  // indeed Rubik. Subthemes must reimplement this call.
  global $theme;

  if ($theme === 'fubik') {
    _rubik_local_tasks($vars);
  }

  // Add body class when we have local tasks.
  // Since we don't have access to body classes here
  //  set a flag for preprocess_html().
  if (!empty($vars['primary_local_tasks'])) {
    _fubik_has_tabs(TRUE);
  }

  // Set a page icon for dashboard links.
  if (empty($vars['page_icon_class'])) {
    $vars['page_icon_class'] = ($item = menu_get_item()) ? implode(' ' , _fubik_icon_classes($item['href'])) : '';
  }
}

/**
 * Override of theme('menu_local_task').
 */
function fubik_menu_local_task($variables) {
  $link = $variables['element']['#link'];
  $link_text = $link['title'];

  if (!empty($variables['element']['#active'])) {
    // Add text to indicate active tab for non-visual users.
    $active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

    // If the link does not contain HTML already, check_plain() it now.
    // After we set 'html'=TRUE the link will not be sanitized by l().
    if (empty($link['localized_options']['html'])) {
      $link['title'] = check_plain($link['title']);
    }
    $link['localized_options']['html'] = TRUE;
    $link_text = t('!local-task-title!active', array('!local-task-title' => $link['title'], '!active' => $active));
  }

  // Render child tasks if available.
  $children = '';
  if (element_children($variables['element'])) {
    $children = drupal_render_children($variables['element']);
    $children = "<ul class='secondary-tabs links clearfix'>{$children}</ul>";
  }

  return '<li' . (!empty($variables['element']['#active']) ? ' class="active"' : '') . '>' . l($link_text, $link['href'], $link['localized_options']) . $children . "</li>\n";
}

/**
 * Preprocessor for theme('help').
 */
function fubik_preprocess_help(&$vars) {
  $vars['hook'] = 'help';
  $vars['attr']['id'] = 'help-text';
  $class = 'path-admin-help clear-block toggleable';
  $vars['attr']['class'] = isset($vars['attr']['class']) ? "{$vars['attr']['class']} $class" : $class;
  $help = menu_get_active_help();
  if (($test = strip_tags($help)) && !empty($help)) {
    // Thankfully this is static cached.
    $vars['attr']['class'] .= menu_secondary_local_tasks() ? ' with-tabs' : '';

    $vars['is_prose'] = TRUE;
    $vars['layout'] = TRUE;
    $vars['content'] = "<span class='icon'></span>" . $help;

    // Link to help section.
    $item = menu_get_item('admin/help');
    if ($item && $item['path'] === 'admin/help' && $item['access']) {
      $vars['links'] = l(t('More help topics'), 'admin/help');
    }
  }
}

/**
 * Helper function used to pass a value from preprocess_page() to preprocess_html().
 */
function _fubik_has_tabs($val = NULL) {
  $vars = &drupal_static(__FUNCTION__, array());

  // If a new value has been passed
  if ($val) {
    $vars = $val;
  }

  return isset($vars) ? $vars : FALSE;
}

/**
 * Generate an icon class from a path.
 * Modified version of _rubik_icon_classes() that allows icon classes for
 * paths with "dashboard" prefixes.
 */
function _fubik_icon_classes($path) {
  $classes = array();
  $args = explode('/', $path);
  if ($args[0] === 'dashboard') {
	print "test"; exit;
    // Add a class specifically for the current path that allows non-cascading
    // style targeting.
    $classes[] = 'path-'. str_replace('/', '-', implode('/', $args)) . '-';
    while (count($args)) {
      $classes[] = drupal_html_class('path-'. str_replace('/', '-', implode('/', $args)));
      array_pop($args);
    }
    return $classes;
  }
  return array();
}
/**
 * Preprocess function.
 * Adds classes for icons in Taxonomy vocabulary overview page.
 *
 * @see theme_taxonomy_overview_vocabularies()
 */
function fubik_preprocess_taxonomy_overview_vocabularies(&$variables) {
  $form =& $variables['form'];

  foreach (element_children($form) as $key) {
    if (isset($form[$key]['name'])) {
      // Add "edit" class.
      if (!isset($form[$key]['edit']['#attributes']['class'])) {
        $form[$key]['edit']['#attributes']['class'] = array();
      }
      $form[$key]['edit']['#attributes']['class'][] = 'action-edit';

      // Add "view" class.
      if (!isset($form[$key]['list']['#attributes']['class'])) {
        $form[$key]['list']['#attributes']['class'] = array();
      }
      $form[$key]['list']['#attributes']['class'][] = 'action-view';

      // Add "add" class.
      if (!isset($form[$key]['add']['#attributes']['class'])) {
        $form[$key]['add']['#attributes']['class'] = array();
      }
      $form[$key]['add']['#attributes']['class'][] = 'action-add';
    }
  }
}

/**
 * Preprocess function.
 * Adds classes for icons in Taxonomy term overview page.
 *
 * @see theme_taxonomy_overview_terms()
 */
function fubik_preprocess_taxonomy_overview_terms(&$variables) {
  $form =& $variables['form'];

  foreach (element_children($form) as $key) {
    if (isset($form[$key]['#term'])) {
      // Add "edit" class.
      if (!isset($form[$key]['edit']['#attributes']['class'])) {
        $form[$key]['edit']['#attributes']['class'] = array();
      }
      $form[$key]['edit']['#attributes']['class'][] = 'action-edit';
    }
  }
}