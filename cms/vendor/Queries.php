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
if(isset($_GET['post_id'])){
    $select_singel_post     = "SELECT * FROM posts WHERE id=".$_GET['id']." LIMIT 1";
    $singer_post            = $db->select($select_singel_post);
}

if(isset($_GET['category_id'])) {


    $select_all_posts = "SELECT * FROM posts WHERE category_id = ".$_GET['category_id']." ORDER BY id DESC ";
}else {
    $select_all_posts = "SELECT * FROM posts ORDER BY id DESC ";

}

$select_all_categories  = "SELECT * FROM categories ORDER BY id DESC ";

// Grab data
$posts      = $db->select($select_all_posts);

$categories = $db->select($select_all_categories);