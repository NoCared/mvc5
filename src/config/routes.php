<?php

$routes = array(
    array('home','default','index'),
    array('contact','contact','contact'),
    array('articles','article','listArticle'),
    array('article','article','show',['id']),
    array('article-delete','article','delete',['id']),
    array('article-add','article','add'),
    array('article-edit','article','edit',['id']),
    array('article-dashboard','admin','dashboardArticles'),
    array('users','user','listUsers'),
    array('user','user','show',['id']),
    array('user-delete','user','delete',['id']),
    array('user-add','user','add'),
    array('user-edit','user','edit',['id']),
    array('user-dashboard','admin','dashboardUsers'),
);









