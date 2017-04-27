<?php

/**
 * [bla] bla-cms2tplblock - inject CMS Pages into TPL Blocks
 * Copyright (C) 2017  bestlife AG
 * info:  oxid@bestlife.ag
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
    'id'          => 'bla-cms2tplblock',
    'title'       => '<strong style="color:#95b900;font-size:125%;">best</strong><strong style="color:#c4ca77;font-size:125%;">life</strong> <strong>CMS to TPL Block</strong>',
    'thumbnail'   => 'bestlife.png',
    'description' => 'inject CMS Pages into TPL Blocks',
    'version'     => '0.0.1 2017-4-27',
    'author'      => 'Marat Bedoev',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'https://github.com/vanilla-thunder/bla-cms2tplblock',
    'extend'      => [
        'oxutilsview' => 'bla/bla-cms2tplblock/extend/oxutilsview_cms2tplblock'
    ]
];
