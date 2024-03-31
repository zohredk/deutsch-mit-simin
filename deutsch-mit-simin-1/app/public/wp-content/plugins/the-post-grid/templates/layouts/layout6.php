<?php
/**
 * Layout Template - 6
 *
 * @package RT_TPG
 */

use RT\ThePostGrid\Helpers\Fns;

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

$html = $metaData = $metaHtml = $catHtml = null;

if ( in_array( 'categories', $items ) && $categories ) {
	$catHtml .= "<span class='categories-links'>";

	if ( $catIcon ) {
		$catHtml .= "<i class='".Fns::change_icon( 'fas fa-folder-open', 'folder' )."'></i>";
	}

	$catHtml .= "{$categories}</span>";
}

if ( in_array( 'post_date', $items ) && $date ) {
	$metaHtml .= "<span class='date-meta'>";

	if ( $metaIcon ) {
		$metaHtml .= "<i class='" . Fns::change_icon( 'far fa-calendar-alt', 'calendar' ) . "'></i>";
	}

	$metaHtml .= "{$date}</span>";
}

if ( in_array( 'author', $items ) ) {
	$metaHtml .= "<span class='author'>";

	if ( $metaIcon ) {
		$metaHtml .= "<i class='" . Fns::change_icon( 'fa fa-user', 'user' ) . "'></i>";
	}

	$metaHtml .= "{$author}</span>";
}

$metaHtml .= $catHtml;

if ( in_array( 'tags', $items ) && $tags ) {
	$metaHtml .= "<span class='post-tags-links'>";

	if ( $metaIcon ) {
		$metaHtml .= "<i class='" . Fns::change_icon( 'fa fa-tags', 'tag' ) . "'></i>";
	}

	$metaHtml .= "{$tags}</span>";
}

if ( in_array( 'comment_count', $items ) ) {
	$metaHtml .= '<span class="comment-count">';

	if ( $metaIcon ) {
		$metaHtml .= "<i class='". Fns::change_icon( 'fas fa-comments', 'chat' ) . "'></i>";
	}

	$metaHtml .= $comment . '</span>';
}

$html .= sprintf( '<div class="%s" data-id="%d">', esc_attr( implode( ' ', [ $grid, $class ] ) ), $pID );
$html .= '<div class="rt-holder">';
$html .= '<div class="overlay">';

if ( ! empty( $metaHtml ) && $metaPosition == 'above_title' ) {
	$html .= "<div class='post-meta-user {$metaSeparator}'>$metaHtml</div>";
}

if ( in_array( 'title', $items ) ) {
	$html .= sprintf( '<%1$s class="entry-title"><a data-id="%2$s" class="%3$s" href="%4$s"%5$s>%6$s</a></%1$s>', $title_tag, $pID, $anchorClass, $pLink, $link_target, $title );
	$html .= "<div class='line'></div>";
}

if ( ! empty( $metaHtml ) && ( empty( $metaPosition ) || $metaPosition == 'above_excerpt' ) ) {
	$html .= "<div class='post-meta-user {$metaSeparator}'>$metaHtml</div>";
}

if ( in_array( 'excerpt', $items ) ) {
	$html .= "<div class='tpg-excerpt'>{$excerpt}</div>";
}

if ( ! empty( $metaHtml ) && $metaPosition == 'below_excerpt' ) {
	$html .= "<div class='post-meta-user {$metaSeparator}'>$metaHtml</div>";
}

$postMetaBottom = null;

if ( in_array( 'read_more', $items ) ) {
	$postMetaBottom .= "<span class='read-more'><a data-id='{$pID}' class='{$anchorClass}' href='{$pLink}'{$link_target}>{$read_more_text}</a></span>";
}

if ( ! empty( $postMetaBottom ) ) {
	$html .= "<div class='post-meta {$btn_alignment_class}'>$postMetaBottom</div>";
}

$html .= '</div>';

if ( $imgSrc ) {
	$html .= "<a data-id='{$pID}' class='{$anchorClass}' href='{$pLink}'{$link_target}>{$imgSrc}</a>";
}

$html .= '</div>';
$html .= '</div>';

Fns::print_html( $html );
