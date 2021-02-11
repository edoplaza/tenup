<?php

// ----------------------------------- Social Sharing ----------------------------------/

function sharing_buttons() {
  global $post;
  $postURL = get_permalink($post->ID);
  $postTitle = str_replace( ' ', '%20', get_the_title($post->ID));
  $twitterURL = 'https://twitter.com/intent/tweet?text='.$postTitle.'&amp;via=fluentcannabis&amp;hashtags=&amp;url='.$postURL;
  $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$postURL;
  $emailURL = 'mailto:?Subject=' .$postTitle.'&amp;Body=Sharing%20with%20you:%20'.$postURL;
  $social = '';
  $social .= '<a class="twitter" href="'. $twitterURL .'" target="_blank"><i class="fab fa-twitter"></i>Tweet</a>';
  $social .= '<a class="facebook" href="'.$facebookURL.'" target="_blank"><i class="fab fa-facebook-f"></i>Share</a>';
  $social .= '<a class="email" href="'.$emailURL.'" target="_blank"><i class="fa fa-envelope"></i>Send</a>';
  return $social;
}