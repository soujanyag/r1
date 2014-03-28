
m http://drushmake.me
; Permanent URL: http://drushmake.me/file.php?token=3c251a7e717b
; ----------------
;
; This is a working makefile - try it! Any line starting with a `;` is a comment.
  
; Core version
; ------------
; Each makefile should begin by declaring the core version of Drupal that all
; projects should be compatible with.
  
core = 7.x
  
; API version
; ------------
; Every makefile needs to declare its Drush Make API version. This version of
; drush make uses API version `2`.
  
api = 2
  
; Core project
; ------------
; In order for your makefile to generate a full Drupal site, you must include
; a core project. This is usually Drupal core, but you can also specify
; alternative core projects like Pressflow. Note that makefiles included with
; install profiles *should not* include a core project.
  
; Drupal 7.x. Requires the `core` property to be set to 7.x.
projects[drupal][version] = 7

  
  
; Modules
; --------
projects[module_filter][version] = 1.7
projects[module_filter][type] = "module"
projects[module_filter][subdir] = "contrib"
projects[ctools][version] = 1.3
projects[ctools][type] = "module"
projects[ctools][subdir] = "contrib"
projects[calendar][version] = 3.4
projects[calendar][type] = "module"
projects[calendar][subdir] = "contrib"
projects[date][version] = 2.6
projects[date][type] = "module"
projects[date][subdir] = "contrib"
projects[devel][version] = 1.3
projects[devel][type] = "module"
projects[devel][subdir] = "contrib"
projects[entity][version] = 1.0
projects[entity][type] = "module"
projects[entity][subdir] = "contrib"
projects[feeds][version] = 2.0-alpha8
projects[feeds][type] = "module"
projects[feeds][subdir] = "contrib"
projects[globalredirect][version] = 1.5
projects[globalredirect][type] = "module"
projects[globalredirect][subdir] = "contrib"
projects[google_analytics][version] = 1.3
projects[google_analytics][type] = "module"
projects[google_analytics][subdir] = "contrib"
projects[logintoboggan][version] = 1.3
projects[logintoboggan][type] = "module"
projects[logintoboggan][subdir] = "contrib"
projects[menu_block][version] = 2.3
projects[menu_block][type] = "module"
projects[menu_block][subdir] = "contrib"
projects[ninesixty][version] = 1.0
projects[ninesixty][type] = "module"
projects[ninesixty][subdir] = "contrib"
projects[nodequeue][version] = 2.0-beta1
projects[nodequeue][type] = "module"
projects[nodequeue][subdir] = "contrib"
projects[pathauto][version] = 1.2
projects[pathauto][type] = "module"
projects[pathauto][subdir] = "contrib"
projects[site_map][version] = 1.0
projects[site_map][type] = "module"
projects[site_map][subdir] = "contrib"
projects[token][version] = 1.5
projects[token][type] = "module"
projects[token][subdir] = "contrib"
projects[print][version] = 1.2
projects[print][type] = "module"
projects[print][subdir] = "contrib"
projects[rules][version] = 2.3
projects[rules][type] = "module"
projects[rules][subdir] = "contrib"
projects[taxonomy_manager][version] = 1.0-rc2
projects[taxonomy_manager][type] = "module"
projects[taxonomy_manager][subdir] = "contrib"
projects[ckeditor][version] = 1.13
projects[ckeditor][type] = "module"
projects[ckeditor][subdir] = "contrib"
projects[extlink][version] = 1.12
projects[extlink][type] = "module"
projects[extlink][subdir] = "contrib"
projects[jquery_update][version] = 2.3
projects[jquery_update][type] = "module"
projects[jquery_update][subdir] = "contrib"
projects[views][version] = 3.7
projects[views][type] = "module"
projects[views][subdir] = "contrib"
projects[views_bulk_operations][version] = 3.1
projects[views_bulk_operations][type] = "module"
projects[views_bulk_operations][subdir] = "contrib"
projects[views_slideshow][version] = 3.0
projects[views_slideshow][type] = "module"
projects[views_slideshow][subdir] = "contrib"
projects[webform][version] = 3.18
projects[webform][type] = "module"
projects[webform][subdir] = "contrib"
projects[xmlsitemap][version] = 2.0-rc2
projects[xmlsitemap][type] = "module"
projects[xmlsitemap][subdir] = "contrib"

  

; Themes
; --------

  
  
; Libraries
; ---------
libraries[jquery][download][type] = "file"
libraries[jquery][download][url] = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"


