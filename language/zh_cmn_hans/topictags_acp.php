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

// these will be re-used in the definitions below - that is why we need to define and merge them first.
$lang = array_merge($lang, array(
	'ACP_RH_TOPICTAGS_REGEX_DEFAULT'				=> '/^[\- a-z0-9]{3,30}$/i',
	'ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'	=> '-, 0-9, a-z, A-Z, 空格（将被转换为-），最小：3，最大：30',
));

$lang = array_merge($lang, array(
	// forum settings page
	'ACP_RH_TOPICTAGS_ENABLE'								=> '启用主题标签',
	'ACP_RH_TOPICTAGS_ENABLE_EXP'							=> '是否在此论坛中启用主题的标记。（禁用标记时，标记不会从此论坛的主题中删除 - 因此当您再次启用它时，它们仍然存在;如果您确实想删除标签，请使用“从此论坛中删除标签”选项。',
	'ACP_FORUM_SETTINGS_RH_TOPICTAGS_PRUNE'					=> '从此论坛中删除标签',
	'ACP_FORUM_SETTINGS_RH_TOPICTAGS_PRUNE_EXP'				=> '这将删除此论坛主题的所有标签分配。注意：为防止意外删除标签，您需要禁用此论坛的标签。',
	'ACP_FORUM_SETTINGS_RH_TOPICTAGS_PRUNE_CONFIRM'			=> '此选项将删除此论坛主题的所有标签分配，您需要禁用此论坛的标签才能执行此操作。',
	'ACP_RH_TOPICTAGS_PRUNING_REQUIRES_TAGGING_DISABLED'	=> '为防止意外删除标记，您需要为此论坛禁用标记以删除标记分配。',
	'ACP_RH_TOPICTAGS_ERROR'								=> '错误',
	'ACP_RH_TOPICTAGS_UNKNOWN_ERROR'						=> '未知错误。有关服务器响应，请参阅 javascript-console。',

	// config
	'TOPICTAGS_INSTALLED'					=> '安装的版本: v%s',

	'ACP_RH_TOPICTAGS_REGEX_EMPTY'			=> '正则表达式不能留空。',
	'ACP_RH_TOPICTAGS_EXP_FOR_USERS_EMPTY'	=> '允许哪些标签的说明不能留空。',

	'TOPICTAGS_CONFIG'					=> '配置',
	'TOPICTAGS_CONFIG_TAGCLOUD'			=> '标签云设置',
	'TOPICTAGS_CONFIG_TAGS'				=> '标签设置',
	'TOPICTAGS_MAINTENANCE'				=> '维护',
	'TOPICTAGS_TITLE'					=> '主题标签',
	'TOPICTAGS_SETTINGS_SAVED'			=> '配置更新成功',
	'TOPICTAGS_WHITELIST_SAVED'			=> '白名单更新成功',
	'TOPICTAGS_BLACKLIST_SAVED'			=> '黑名单更新成功',

	'TOPICTAGS_DISPLAY_TAGCLOUD_ON_INDEX'		=> '在索引上显示标签云',
	'TOPICTAGS_DISPLAY_TAGCLOUD_ON_INDEX_EXP'	=> '启用后，标签云将显示在索引页面的底部',

	'TOPICTAGS_DISPLAY_TAGCOUNT_IN_TAGCLOUD'		=> '显示标签云中标签的使用计数',
	'TOPICTAGS_DISPLAY_TAGCOUNT_IN_TAGCLOUD_EXP'	=> '启用后，标签云会显示每个标签标记的主题数',

	'TOPICTAGS_MAX_TAGS_IN_TAGCLOUD'			=> '标签云中的最大标签数',
	'TOPICTAGS_MAX_TAGS_IN_TAGCLOUD_EXP'		=> '这会将标签云中显示的标签计数限制为配置的值。',

	'TOPICTAGS_DISPLAY_TAGS_IN_VIEWFORUM'		=> '在 viewforum 中显示标签',
	'TOPICTAGS_DISPLAY_TAGS_IN_VIEWFORUM_EXP'	=> '如果设置为 yes，则为每个主题分配的标签将显示在 topic-lists 中。',

	'TOPICTAGS_ENABLE_IN_ALL_FORUMS_ALREADY'	=> '已为所有论坛启用标记。',
	'TOPICTAGS_ENABLE_IN_ALL_FORUMS'			=> '在所有论坛中启用主题标签',
	'TOPICTAGS_ENABLE_IN_ALL_FORUMS_EXP'		=> '这将<em>在所有论坛中</em>启用标记。您可以在论坛设置中的单个论坛中启用（或禁用）它。',
	'TOPICTAGS_ENABLE_IN_ALL_FORUMS_DONE'	=> array(
			1 => '已为 %d 论坛启用标记。',
			2 => '已为 %d 个论坛启用标记。',
	),

	'TOPICTAGS_DISABLE_IN_ALL_FORUMS_ALREADY'	=> '所有论坛的标记功能都已禁用。',
	'TOPICTAGS_DISABLE_IN_ALL_FORUMS'			=> '在所有论坛中禁用 RH 主题标签',
	'TOPICTAGS_DISABLE_IN_ALL_FORUMS_EXP'		=> '这将禁用<em>所有</em>论坛中的标记。您可以在论坛设置中的单个论坛中启用（或禁用）它。',
	'TOPICTAGS_DISABLE_IN_ALL_FORUMS_DONE'	=> array(
			1 => '已禁用 %d 论坛的标记。',
			2 => '已禁用 %d 个论坛的标记。',
	),

	'TOPICTAGS_PRUNE'					=> '修剪标签',
	'TOPICTAGS_PRUNE_EXP'				=> '这将删除所有未被任何主题使用的标签',
	'TOPICTAGS_PRUNE_CONFIRM'			=> '这将删除所有未使用的标签。',
	'TOPICTAGS_PRUNE_ASSIGNMENTS_DONE'	=> array(
			0 => '',
			1 => '%d topic-tag-assignment 已删除。',
			2 => '%d topic-tag-assignments 已被删除。',
	),
	'TOPICTAGS_PRUNE_TAGS_DONE'			=> array(
			0 => '没有我们可以删除的未使用的标签。',
			1 => '%d 未使用的标签已被删除。',
			2 => '%d 未使用的标签已被删除。',
	),

	'TOPICTAGS_PRUNE_FORUMS'			=> '在禁用标记的情况下从论坛中删除标记',
	'TOPICTAGS_PRUNE_FORUMS_EXP'		=> '这将删除位于禁用标记的论坛中的那些主题的所有标记分配。',
	'TOPICTAGS_PRUNE_FORUMS_CONFIRM'	=> '这将从禁用标签的论坛中的所有主题中删除所有标签。',

	'TOPICTAGS_PRUNE_INVALID_TAGS'				=> '删除无效标签',
	'TOPICTAGS_PRUNE_INVALID_TAGS_EXP'			=> '这将删除所有不再有效的标签（及其分配）。仅当您更改了正则表达式并希望删除无效标记时，才需要这样做。',
	'TOPICTAGS_PRUNE_INVALID_TAGS_CONFIRM'		=> '这将删除所有不符合配置的正则表达式的标签，如果您不小心，可能会删除您的很多东西！',

	'TOPICTAGS_CALC_COUNT_TAGS'					=> '重新计算标签计数',
	'TOPICTAGS_CALC_COUNT_TAGS_EXP'				=> '这将重新计算每个标签的使用频率。',
	'TOPICTAGS_CALC_COUNT_TAGS_DONE'			=> '已重新计算标签计数。',

	'TOPICTAGS_ENABLE_WHITELIST'				=> '启用白名单',
	'TOPICTAGS_ENABLE_WHITELIST_EXP'			=> '如果启用，则只允许符合正则表达式且出现在下方白名单中的标签。<br/>注 1：如果同时开启了黑名单，且标签同时在白名单和黑名单中，则会被拒绝。<br/>注 2：为防止数据意外丢失，已存在于数据库中但不在白名单中的标签不会自动删除，也会显示出来。您必须手动删除现有标签。',

	'TOPICTAGS_WHITELIST'						=> '白名单',
	'TOPICTAGS_WHITELIST_EXP'					=> '允许的标签列表。<br/>注意：标签也必须符合正则表达式，因此请确保所有这些标签都符合下面的正则表达式设置（不会自动检查）。',

	'TOPICTAGS_ENABLE_BLACKLIST'				=> '启用黑名单',
	'TOPICTAGS_ENABLE_BLACKLIST_EXP'			=> '启用后，黑名单中配置的标签即使符合正则，也会被拒绝。<br/>注 1：为防止意外数据丢失，数据库中已有的标签不会自动删除。您必须从每个主题中手动删除它们。<br/>注 2：黑名单永远不会向用户显示。',

	'TOPICTAGS_BLACKLIST'						=> '黑名单',
	'TOPICTAGS_BLACKLIST_EXP'					=> '禁止标签列表。<br/>注意：所有不符合正则表达式的标签始终被拒绝。',

	'TOPICTAGS_ALLOWED_TAGS_REGEX'				=> '允许的标签的正则表达式',
	'TOPICTAGS_ALLOWED_TAGS_REGEX_EXP'			=> '警告： 如果您不知道自己在做什么，请不要更改此设置。<strong>标签最多可以有 30 个字符，分隔符必须是 “/”</strong>，请在正则表达式设计时考虑这一点。<br/>请注意，之后无效的标签是不可搜索的，但仍会显示在主题中。<br/>考虑修剪无效的标签（参见 maintenance-section ）。<br/>默认：' . $lang['ACP_RH_TOPICTAGS_REGEX_DEFAULT'],

	'TOPICTAGS_CONVERT_SPACE_TO_MINUS'			=> '转换 “ ” 为 “-”',
	'TOPICTAGS_CONVERT_SPACE_TO_MINUS_EXP'		=> '如果设置为 yes，则所有空格 （“ ”） 将自动转换为减号 （“-”）。<br/>注 1：在正则表达式中，您必须允许 “-”;否则，带有空格的标签将被拒绝。<br/>注 2：带空格的现有标签不会自动转换。',

	'TOPICTAGS_ALLOWED_TAGS_EXP_FOR_USERS'		=> '用户说明',
	'TOPICTAGS_ALLOWED_TAGS_EXP_FOR_USERS_EXP'	=> '此文本将向用户显示，并应说明允许哪些标记，不允许哪些标记。<br/>默认：' . $lang['ACP_RH_TOPICTAGS_REGEX_EXP_FOR_USERS_DEFAULT'],

	'TOPICTAGS_MANAGE_TAGS_EXP'					=> '该表显示所有现有标记。在这里，您可以<ul><li>删除标记（及其所有分配）。</li><li>编辑标记（双击标记名称可加快工作流）。</li><li>通过编辑标签并设置其名称使其等于另一个标签来合并标签 - 它们将自动合并。</li></ul>',
	'TOPICTAGS_NO_TAGS'							=> '目前还没有标签。',
	'TOPICTAGS_TAG'								=> '标签',
	'TOPICTAGS_ASSIGNMENTS'						=> '分配',
	'TOPICTAGS_NEW_TAG_NAME'					=> '新标签名称',
	'TOPICTAGS_NEW_TAG_NAME_EXP'				=> '请输入新的标签名称。',
	'TOPICTAGS_TAG_DELETE_CONFIRM'				=> '是否确实要删除标签 <em>%s</em>？这将从分配了标签<b>的所有主题</b>中删除该标签。这不能被撤销。',
	'TOPICTAGS_TAG_DELETED'						=> '标签已删除。',
	'TOPICTAGS_MISSING_TAG_ID'					=> '缺少标签 ID。',
	'TOPICTAGS_TAG_CHANGED'						=> '标签已更改。',
	'TOPICTAGS_TAG_MERGED'						=> '标签已与标签 “%s” 合并',
	'TOPICTAGS_MISSING_TAG_NAMES'				=> '缺少标签名称。',
	'TOPICTAGS_TAG_INVALID'						=> '标签 “%s” 无效，请检查您的标签设置。',
	'TOPICTAGS_TAG_DOES_NOT_EXIST'				=> '标签 “%s” 不存在。',
	'TOPICTAGS_NO_MODIFICATION'					=> '标签未更改。',

	'TOPICTAGS_SORT_NAME_ASC'					=> '标签名 A=>Z', // &rArr; is a right-arrow (=>)
	'TOPICTAGS_SORT_NAME_DESC'					=> '标签名 Z=>A', // &rArr; is a right-arrow (=>)
	'TOPICTAGS_SORT_COUNT_ASC'					=> '分配计数升序',
	'TOPICTAGS_SORT_COUNT_DESC'					=> '分配计数降序排列',

));
