<?php

$routes = array(
    array('home','default','index'),
    array('contact','contact','contact'),
    array('articles','article','listArticle'),
    array('article','article','show',['id']),
    array('article-delete','article','delete',['id']),
    array('article-add','article','add'),
    array('article-edit','article','edit',['id']),
    array('article-dashboard','admin','dashboard'),
);









