<?php
/**
*
* @package phpBB Extension - RH Topic Tags
* @copyright (c) 2014 Robet Heim
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RH_TOPICTAGS'						=> '标签',

	'RH_TOPICTAGS_TAGCLOUD'				=> '标签云',

	'RH_TOPICTAGS_ALLOWED_TAGS'			=> '允许的标签',
	'RH_TOPICTAGS_WHITELIST_EXP'		=> '只有这些标签被允许',

	// 搜索包含任意这些标签的主题：%s
    'RH_TOPICTAGS_SEARCH_HEADER_OR' => '搜索包含任意这些标签的主题：%s',
    // 搜索包含所有这些标签的主题：%s
    'RH_TOPICTAGS_SEARCH_HEADER_AND' => '搜索包含所有这些标签的主题：%s',
    // 以下标签因无效已被忽略：%s
    'RH_TOPICTAGS_SEARCH_IGNORED_TAGS' => '以下标签因无效已被忽略：%s',

    // 请至少搜索一个有效标签以显示主题。
    'RH_TOPICTAGS_NO_TOPICS_FOR_NO_TAG' => '请至少搜索一个有效标签以在此显示主题。',
    // 没有包含任意这些标签的主题：%s
    'RH_TOPICTAGS_NO_TOPICS_FOR_TAG_OR' => '没有包含任意这些标签的主题：%s',
    // 没有包含所有这些标签的主题：%s
    'RH_TOPICTAGS_NO_TOPICS_FOR_TAG_AND' => '没有包含所有这些标签的主题：%s',

    // 以下标签无效：%s
    'RH_TOPICTAGS_TAGS_INVALID' => '以下标签无效：%s',

    // 显示所有标签。
    'RH_TOPICTAGS_DISPLAYING_TOTAL_ALL' => '显示所有标签。',

    'RH_TOPICTAGS_DISPLAYING_TOTAL' => array(
        // 目前还没有标签。
        0 => '目前还没有标签。',
        // 显示前 %d 个标签。（当只有 1 个标签时）
        1 => '显示前 %d 个标签。',
        // 显示前 %d 个标签。（当有多个标签时）
        2 => '显示前 %d 个标签。',
    ),

    // 标签搜索
    'RH_TOPICTAGS_TAG_SEARCH' => '标签搜索',

    // 未找到 “%s” 的路由
    'RH_TOPICTAGS_TAG_SUGGEST_TAG_ROUTE_ERROR' => '未找到 “%s” 的路由',
));
