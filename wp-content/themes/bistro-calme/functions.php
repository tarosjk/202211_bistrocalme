<?php

// titleタグを出力する
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');


// add_filter('フック名', '自分の関数名');
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
  // 元々のデータ: $separator = '-'
  // $separator = '|';
  // return $separator;
  return '|';
}

add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title) {
  // var_dump($title);
  if( is_home() ){
    $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりのビストロです。';
    unset($title['tagline']);//変数の破棄
  }
  
  return $title;
}
