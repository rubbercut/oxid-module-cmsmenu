<?php

/**
 * [vt] cmsstructure for OXID eShop 4.9+
 * Copyright (C) 2017  Marat Bedoev
 * info:  m@marat.ws
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 *
 * author: Marat Bedoev
 */

$sMetadataVersion = '1.1';
$aModule = [
   'id'          => 'cmsstructure',
   'title'       => '[vt] CMS Structure',
   'thumbnail'   => 'oxid-vt.jpg',
   'description' => 'assign parent-child relations to cms pages to create category-like tree structure',
   'version'     => '2.0.1 2017-2-27',
   'author'      => 'Marat Bedoev',
   'email'       => 'm@marat.ws',
   'url'         => 'https://github.com/vanilla-thunder/cmsstructure',
   'extend'      => [
      'content'       => 'vt/cmsstructure/extend/content_vtcms',
      'oxcontent'     => 'vt/cmsstructure/extend/oxcontent_vtcms',
      'oxcontentlist' => 'vt/cmsstructure/extend/oxcontentlist_vtcms'
   ],
   'files'       => [
      'vtcms_cfg' => 'vt/cmsstructure/application/core/vtcms_cfg.php'
   ],
   'blocks'      => [
      // BE
      [
         'template' => 'content_list.tpl',
         'block'    => 'admin_content_list_colgroup',
         'file'     => '/application/views/blocks/admin/admin_content_list_colgroup.tpl'
      ], [
         'template' => 'content_list.tpl',
         'block'    => 'admin_content_list_filter',
         'file'     => '/application/views/blocks/admin/admin_content_list_filter.tpl'
      ], [
         'template' => 'content_list.tpl',
         'block'    => 'admin_content_list_sorting',
         'file'     => '/application/views/blocks/admin/admin_content_list_sorting.tpl'
      ], [
         'template' => 'content_list.tpl',
         'block'    => 'admin_content_list_item',
         'file'     => '/application/views/blocks/admin/admin_content_list_item.tpl'
      ], [
         'template' => 'content_main.tpl',
         'block'    => 'admin_content_main_form',
         'file'     => '/application/views/blocks/admin/admin_content_main_form.tpl'
      ],
      // FE
      ['template' => 'widget/header/categorylist.tpl', 'block' => 'cmsmenu_dropdown', 'file' => '/application/views/blocks/cmsmenu_dropdown.tpl'],
      ['template' => 'layout/sidebar.tpl', 'block' => 'cmsmenu_sidebar', 'file' => '/application/views/blocks/cmsmenu_sidebar.tpl']

   ],
   'events'      => [
      'onActivate' => 'vtcms_cfg::setupCmsStructure',
      //'onDeactivate' => 'vtcms_cfg::onDeactivate'
   ]
];
