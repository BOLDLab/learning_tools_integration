<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
# @Author: ps158
# @Date:   2017-03-28T16:04:23+11:00
# @Last modified by:   ps158
# @Last modified time: 2017-04-21T11:37:20+10:00
$config['development'] = FALSE;
// cache areas
$config['lti_cache'] = '/var/lti';
$config['lti_upload'] = "'/var/lti/upload/";
$config['lti_secret'] = '/var/lti/secret/';
$config['lti_ghost'] = '/var/lti/ghost/'; // user for creating new users
$config['lti_cookies'] = '/var/lti/cookies/';

// jquery dist.
$config['jquery_src'] = '//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js';
$config['chosen_css'] = '//cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.min.css';

//LTI config items
$config['blackboard_url'] = "https://coolu.edu/";
$config['blackboard_auth_path'] = 'webapps/login/';
$config['blackboard_gradebook_uri_query'] = '/webapps/gradebook/do/instructor/getJSONData?course_id=';

// pagination buttons
$config['prev_link_url'] = "//coolu.edu/images/ci/ng/small_previous.gif";
$config['next_link_url'] = "//coolu.edu/images/ci/ng/small_next.gif";
$config['first_link_url'] = "//coolu.edu/images/ci/ng/small_rewind.gif";
$config['last_link_url'] = "//coolu.edu/images/ci/ng/small_ffwd.gif";

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
