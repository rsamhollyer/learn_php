<?php

namespace App\Arrays;

class Post {
    public $title;
    public $published;
    public $author;

    public function __construct($title,  $author, $published) {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}


$posts = [
    new Post('My first post', "SH", true),
    new Post('My second post', "SH", false),
    new Post('My third post', "AH", true),
    new Post('My fourth post', "VH", false),
];


// $unpub = array_filter($posts, function ($post) {
//     return !$post->published;
// });


$modified = array_map(function ($post) {
    return (array) $post;
}, $posts);


$titles = array_column($posts, 'title');

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);


$titles = array_column($posts, 'title');

$authors = array_column($posts, 'author', 'title');
