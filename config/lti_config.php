<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
# @Author: ps158
# @Date:   2017-03-28T16:04:23+11:00
# @Last modified by:   ps158
# @Last modified time: 2017-04-13T15:51:29+10:00




// cache areas
$config['lti_cache'] = '/var/www/lti/cache/';
$config['lti_upload'] = "/var/www/lti/cache/upload/";
$config['lti_secret'] = '/var/www/lti/cache/secret/';
$config['lti_ghost'] = '/var/www/lti/cache/ghost/'; // user for creating new users
$config['lti_cookies'] = '/var/www/lti/cache/cookies/';

// jquery dist.
$config['jquery_src'] = '//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js';
$config['chosen_css'] = '//cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.min.css';

//LTI config items
$config['blackboard_url'] = "http://dev.bb.local:8080/";
$config['blackboard_auth_path'] = 'webapps/login/';
$config['blackboard_gradebook_uri_query'] = '/webapps/gradebook/do/instructor/getJSONData?course_id=';

$config['preview_comments'] = array(
         array("comment" =>
       "Preview was an insightful member of the group.
         Her contributions were always engaging and interesting"),
         array("comment" => "We had differing points of view,
                       but Preview was always respectful and concise in
                       making her point"),
         array("comment" => "Preview always attended group meetings early.
                       She was a great motivator and kept everyone on task,
                       Preview is an excellent leader."),
 );

 $config['preview_user'] = array("group_context_id" => 0,
                         "member_id" => 0,
                         "screen_name" => "Preview User",
                         "score" => 0,
                         "comment" => "",
                         "rubric_json" => "",
                         "locked" => 0,
                         "current" => TRUE,
                     );
