<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/22/2016
 * Time: 2:00 PM
 */
// Instacncimi ( Krijimi ) i objekteve
$db = new Database();
// Queries;
$select_all_posts       = "SELECT * FROM posts ORDER BY id DESC ";
$select_all_categories  = "SELECT * FROM posts ORDER BY id DESC ";

// Grab data
$posts      = $db->select($select_all_posts);
$categories = $db->select($select_all_categories);