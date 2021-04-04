<?php

if(!defined('__XE__')) exit();

/**
 * @file ap_search_option_manage.addon.php
 * @author cydemo (cydemo@gmail.com)
 * @brief Managing search option in board module
**/

if ($called_position !== 'before_module_proc' || $this->module !== 'board' || $this->act !== 'dispBoardContent') return;

if ($addon_info->title_content) array_splice($this->search_option, array_search('title_content', $this->search_option), 1);
if ($addon_info->title) array_splice($this->search_option, array_search('title', $this->search_option), 1);
if ($addon_info->content) array_splice($this->search_option, array_search('content', $this->search_option), 1);
if ($addon_info->comment) array_splice($this->search_option, array_search('comment', $this->search_option), 1);
if ($addon_info->user_name) array_splice($this->search_option, array_search('user_name', $this->search_option), 1);
if ($addon_info->nick_name) array_splice($this->search_option, array_search('nick_name', $this->search_option), 1);
if ($addon_info->user_id) array_splice($this->search_option, array_search('user_id', $this->search_option), 1);
if ($addon_info->tag) array_splice($this->search_option, array_search('tag', $this->search_option), 1);
if ($addon_info->regdate) array_push($this->search_option, 'regdate');
if ($addon_info->readed_count) array_push($this->search_option, 'readed_count');
if ($addon_info->comment_count) array_push($this->search_option, 'comment_count');
if ($addon_info->voted_count) array_push($this->search_option, 'voted_count');
if ($addon_info->blamed_count) array_push($this->search_option, 'blamed_count');

?>