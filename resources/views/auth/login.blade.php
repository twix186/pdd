
<!DOCTYPE html>
<html  lang='en' dir='ltr'>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="/images/icons/favicons/fav_logo.ico?6" />

<link rel="apple-touch-icon" href="/images/icons/pwa/apple/default.png?11">

<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
<meta http-equiv="origin-trial" content="AlWF3ZBTYSsnKHhmA2M7PYvp/oeFfIO75mbC0fqdSYGB2uiEWXINDKmxjFgX3eZ1YZrGoj14MAuEXokLmPfgGg4AAABceyJvcmlnaW4iOiJodHRwczovL3ZrLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViQ29kZWNzIiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZX0="><meta name="description" content="VK is the largest European social network with more than 100 million active users. Our goal is to keep old friends, ex-classmates, neighbors and colleagues in touch." />

<title>Welcome&#33; | VK</title>

<noscript><meta http-equiv="refresh" content="0; URL=/badbrowser.php"></noscript>

<link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/common.8f7500238e5d2edcdc1f.css" /><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/base.4c2a78c41509ec6ec286.css" /><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/fonts_utf.eec972e88e8225e52172.css" /><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/fonts_cnt.f3d1ee5b2249668f0667.css" />

<script type="text/javascript">
(function(){"use strict";var e,t,n,i,r,o,a,c,u,s,f,p;function l(){}return r={passive:!0,capture:!0},o=new Date,a=function n(){i=[],t=-1,e=null,f(addEventListener)},c=function i(r,o){e||(e=o,t=r,n=new Date,f(removeEventListener),u())},u=function r(){if(t>=0&&t<n-o){var a={entryType:"first-input",name:e.type,target:e.target,cancelable:e.cancelable,startTime:e.timeStamp,processingStart:e.timeStamp+t};i.forEach((function(e){e(a)})),i=[]}},s=function e(t){if(t.cancelable){var n=(t.timeStamp>1e12?new Date:performance.now())-t.timeStamp;"pointerdown"==t.type?(function(e,t){var n=function n(){c(e,t),o()},i=function e(){o()},o=function e(){removeEventListener("pointerup",n,r),removeEventListener("pointercancel",i,r)};addEventListener("pointerup",n,r),addEventListener("pointercancel",i,r)})(n,t):c(n,t)}},f=function e(t){["mousedown","keydown","touchstart","pointerdown"].forEach((function(e){return t(e,s,r)}))},p="hidden"===document.visibilityState?0:1/0,addEventListener("visibilitychange",(function e(t){"hidden"===document.visibilityState&&(p=t.timeStamp,removeEventListener("visibilitychange",e,!0))}),!0),a(),!void(self.webVitals={firstInputPolyfill:function e(t){i.push(t),u()},resetFirstInputPolyfill:a,get firstHiddenTime(){return p}}),l})()({});;

(function() {
var alertCont;
function trackOldBrowserEvent(event) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '/badbrowser_stat.php?act=track&event=' + event);
  xhr.send();
}
function exposeGlobals() {
  window.hideOldBrowser = function() {
    alertCont.remove();
    var date = new Date();
    date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000));
    var expiresDate = date.toGMTString();
    var domain = window.locDomain;
    document.cookie = 'remixoldbshown=1; expires=' + expiresDate + '; path=/' + (domain ? '; domain=.' + domain : '') + ';secure';
    trackOldBrowserEvent('hideAlert_atom');
  }
}
function checkOldBrowser() {
  if(!document.body) {
    setTimeout(checkOldBrowser, 100);
    return;
  }
  try {
    if ((false || !('noModule' in HTMLScriptElement.prototype)) && !false) {
      exposeGlobals();
      var alert = '<div class="OldBrowser__container OldBrowser__container--atom" style="width:960px;">  Your browser is out of date. For speed and stability when using VK, try <a href="https://vk.com/away.php?to=https%3A%2F%2F1l-go.mail.ru%2Fr%2Fadid%2F3209702_2015861%2Fpid%2F102819%2Fpof%2F1%2Ff%2F3%2F%3F_1larg_sub%3D505014%26rfr%3D505014%26utm_source%3Dvk%26utm_medium%3Dstripeall%26utm_campaign%3DExpVk&badbrowser=atom&badbrowser_meta=_badbrowser_alert" target="_blank">Atom</a>. <a href="https://vk.com/away.php?to=https%3A%2F%2F1l-go.mail.ru%2Fr%2Fadid%2F3209702_2015861%2Fpid%2F102819%2Fpof%2F1%2Ff%2F3%2F%3F_1larg_sub%3D505014%26rfr%3D505014%26utm_source%3Dvk%26utm_medium%3Dstripeall%26utm_campaign%3DExpVk&badbrowser=atom&badbrowser_meta=_badbrowser_alert" target="_blank">More</a>  <span class="OldBrowser__close" aria-label="Close" role="button" onclick="hideOldBrowser();"></span></div>';
      alertCont = document.createElement('div');
      alertCont.className = 'OldBrowser';
      alertCont.id = 'old_browser_wrap';
      alertCont.innerHTML = alert;
      document.body.appendChild(alertCont);
      trackOldBrowserEvent('showAlert_atom');
    } else {
      if (browserVersion < lastVersions[browserName] - 1) {
        trackOldBrowserEvent('badBrowser' + (lastVersions[browserName] - browserVersion));
      }
    }
  } catch(e) {}
}
setTimeout(checkOldBrowser, 0);
})();
var vk = {
  ads_rotate_interval: 120000,
  al: parseInt('3') || 4,
  id: 0,
  sex: 0,
  intnat: '1' ? true : false,
  host: 'vk.com',
  loginDomain: 'https://login.vk.com/',
  lang: 3,
  statsMeta: {"platform":"web2","st":false,"time":1624726864,"hash":"FBAD1pwhVSzPm9jlZFUxtTtkMKYk4zj6D0UwfTTXps0"},
  loaderNavSection: '',
  rtl: parseInt('') || 0,
  version: 13187848,
  stDomains: 0,
  stDomain: 'https://st3-16.vk.com',
  navPostfix: "",
  wsTransport: 'https://stats.vk-portal.net',
  stExcludedMasks: ["loader_nav","lang","sw\/"],
  zero: false,
  contlen: 18926,
  loginscheme: 'https',
  ip_h: 'bc8ed6cc4207dba667',
  navPrefix: '/',
  dt: parseInt('0') || 0,
  fs: parseInt('13') || 13,
  ts: 1624726864,
  tz: 10800,
  pd: 0,
  vcost: 7,
  time: [2021, 6, 26, 20, 1, 4],
  sampleUser: -1, spentLastSendTS: new Date().getTime(),
  a11y: 0,
  statusExportHash: '',
  audioAdsConfig: {"_":"_"},
  longViewTestGroup: "every_view",
  cma: 1,
  lpConfig: {
    enabled: 0,
    key: '',
    ts: 0,
    url: '',
    lpstat: 0,
    sseUrl: 'https://papi.vk.com/pushsse/ruim'
  },

  pr_tpl: "<div class=\"pr %cls%\" id=\"%id%\"><div class=\"pr_bt\"><\/div><div class=\"pr_bt\"><\/div><div class=\"pr_bt\"><\/div><\/div>",
  push_hash: '47661af28be572de9a',

  audioInlinePlayerTpl: "<div class=\"audio_inline_player _audio_inline_player no_select\">\n  <div class=\"audio_inline_player_right\">\n    <div class=\"audio_inline_player_volume\"><\/div>\n  <\/div>\n  <div class=\"audio_inline_player_left\">\n    <div class=\"audio_inline_player_progress\"><\/div>\n  <\/div>\n<\/div>",

  pe: {"vk_apps_svg_qr":1,"upload.send_upload_stat":1,"push_notifier":1,"notify_new_events_box":1,"mini_apps_web_add_to_favorites":1,"mini_apps_web_add_to_menu":1,"mini_apps_m_web_new_stub_page":1,"cookie_class_samesite":1,"cookie_secure_default_true":1,"widgets_xdm_same_origin":1,"stickers_money_transfer_suggestions":1,"web2_story_box_enabled":1,"bridge_mobile_story_box_enabled":1,"navigation_timespent":1,"market_item_recommendations_view_log":1,"market_item_others_view_log":1,"web_stats_transport_story_view":1,"registration_item_stat":1,"mvk_lazy_static_reload":1,"mute_mvk_err_peaks":1,"notifications_view_new":1,"ads_market_autopromotion_bookmarks_stats":1,"mini_apps_web_call_api_form_data":1,"web_new_photo_editor":1,"web_new_photo_editor_crop":1,"web_photo_editor_hide_entrypoint":1,"web_stats_try_send":1,"page_loading_stat":1,"update_private_snippets_by_queue":1,"stickers_catalog_reload_after_buy":1,"web_stats_send_on_events_limit":1,"batchify_web_stats":1,"stickers_web_new_ui":1,"ads_new_reports_web_tgb":1,"ads_autopromotion_web_cashback":1,"ads_autopromotion_web_geo":1,"recognize_mock_turn_off":1,"photo_recognition_web":1,"aliexpress_app_links_with_partner_links":1,"ads_new_reports_web_histories":1,"ads_new_reports_mvk_histories":1,"audio_unauth_preview":1,"audio_unauth_preview_box":1,"ads_easy_promote_goods_new_create_api":1,"unauthorized_media_layer_box":1,"mail_history_unread_counter_observer":1,"pinned_conversations":1,"messenger_empty_pinned_support":1,"market_catalog_fixed_header":1,"force_act_in_get_params":1,"vk_mini_apps_new_web_snippet":1,"market_suggest_search_queries":1,"mail_longpoll_unread_counter":1,"faq_clean_up_extra_spaces":1,"nospam_use_new_conditions_editor":1,"mvk_quick_search_canceled_requests":1,"mvk_new_avatar_crop":1,"test_folder_masks":1,"mt_log_disable":1,"static_bump_for_unexpected_state":1,"microlandings_blocks":1},
  ex: [],
  countryISO: 'RU',
  apiConfigDomains: {
    apiDomain: 'api.vk.com',
    loginDomain: 'login.vk.com',
    connectDomain: 'connect.vk.com',
  },

  isCallsDevEnv: '' ? true : false,
};;vk.rv="107655";;if (!window.constants) { window.constants = {Groups: {
  GROUPS_ADMIN_LEVEL_USER: 0,
  GROUPS_ADMIN_LEVEL_MODERATOR: 1,
  GROUPS_ADMIN_LEVEL_EDITOR: 2,
  GROUPS_ADMIN_LEVEL_ADMINISTRATOR: 3,
  GROUPS_ADMIN_LEVEL_HOST: 4,
  GROUPS_ADMIN_LEVEL_EVENT_CREATOR: 5,
  GROUPS_ADMIN_LEVEL_CREATOR: 6,
  GROUPS_ADMIN_PSEUDO_LEVEL_ADVERTISER: 100
}}; };

window.locDomain = vk.host.match(/[a-zA-Z]+\.[a-zA-Z]+\.?$/)[0];
var _ua = navigator.userAgent.toLowerCase();
if (/opera/i.test(_ua) || !/msie 6/i.test(_ua) || document.domain != locDomain) document.domain = locDomain;
var ___htest = (location.toString().match(/#(.*)/) || {})[1] || '', ___to;
___htest = ___htest.split('#').pop();
if (vk.al != 1 && ___htest.length && ___htest.substr(0, 1) == vk.navPrefix) {
  if (vk.al != 3 || vk.navPrefix != '!') {
    ___to = ___htest.replace(/^(\/|!)/, '');
    if (___to.match(/^([^\?]*\.php|login|mobile|away)([^a-z0-9\.]|$)/)) ___to = '';
    location.replace(location.protocol + '//' + location.host + '/' + ___to);
  }
}

var StaticFiles = {
  'dist/web/common_web.js' : {v: '254'},
  'al/common.8f7500238e5d2edcdc1f.css':{v:''},'common.css':{v:1},'al/base.4c2a78c41509ec6ec286.css':{v:''},'base.css':{v:1},'al/fonts_utf.eec972e88e8225e52172.css':{v:''},'fonts_utf.css':{v:1},'al/fonts_cnt.f3d1ee5b2249668f0667.css':{v:''},'fonts_cnt.css':{v:1}
  ,'dist/bundles/evbus.db620810d528de983a46.js':{v:'ee27312926fddca49e6a'},'dist/bundles/lottie.786b1fc6717e2a8eb385.js':{v:'3672aabe71f1c1e08d44'},'dist/bundles/audioplayer.f00f2fb481cf42bf7d74.js':{v:'5962671039fee38754a9'},'dist/bundles/common.0d8da36be427741eea19.js':{v:'4d042d5f3644b78e3407'},'dist/web/common_web.82119d0dfc8684fc5fcb.js':{v:'1a4f87332366dcf180ce702895102e49'},'lang3_0.js': {v: 27078781},'al/index.e06ca25c3515c29ad213.css':{v:''},'index.css':{v:1},'dist/web/index.0def992c7a10cb136acb.js':{v:'88e926ae10f9e738a465f48c6cc10519'},'dist/web/index.js':{v:1},'al/login.ed881196edbe20d6df54.css':{v:''},'login.css':{v:1},'dist/web/language.4af08357f4ab5a1b323f.js':{v:'5ac1487729c3ba4ec32779ce0a0db046'},'dist/web/language.js':{v:1},'dist/web/join.5b02de061b8627d54d1b.js':{v:'29c527a0abf350ed650852e85af25ade'},'dist/web/join.js':{v:1},'al/join.ba494657faf371ec2d73.css':{v:''},'join.css':{v:1},'ui_controls.js':{v:189},'ui_controls.39dce12cd031aff5949c.css':{v:''},'ui_controls.css':{v:1},'dist/bundles/357d86c29236f9e0b370e05bc45991c9.27104be9e67d1099819a.js':{v:'fae5b026433125aea400'},'dist/web/raven_logger.a27c2b3a1f3295318317.js':{v:'72b0fd628df02dc54aafe6826f13c555'},'dist/web/raven_logger.js':{v:1},'dist/web/css_types.67632998ba4ebcf650f3.js':{v:'bfca8119b4fa8cf3d45e'},'dist/web/css_types.js':{v:1},'dist/web/unauthorized.304c3747a45ef8bb641b.js':{v:'f21c4b37c67bd6df1c559bc6ac94eea2'},'dist/web/unauthorized.js':{v:1},'dist/web/jobs_devtools_notification.6ab0dea1d10c5561cf2e.js':{v:'812b0bbd8db11a934640bcb9281ba478'},'dist/web/jobs_devtools_notification.js':{v:1},'dist/web/page_layout.48e6150b92b16a704123.js':{v:'1850c1853ecbea64eb8f09d843e6c0fd'},'dist/web/page_layout.js':{v:1},'dist/bundles/291a33328af5e5ffc982f744fa49e488.4cbf808c89c3bff69c97.js':{v:'16b1d99bf666843d1cef'},'dist/bundles/8c7cb80fc750b3d5a6ad025449fb24a3.75ad1fb97f33dda88972.js':{v:'aaafc4d54e1d998011f4'},'dist/web/ui_common.21a71194b3d63da86aa6.js':{v:'5eb26a16d7dbd285de5ed33f6836f173'},'ui_common.js':{v:1},'al/ui_common.f64b319c06267c65814f.css':{v:''},'ui_common.css':{v:1},'dist/bundles/f8a3b0b69a90b5305d627c89f0bd674e.ab54764e7392d894995b.js':{v:'04b7e8ebb4f0e7efe8e1'},'dist/web/likes.10eb4d44c5864d75d44d.js':{v:'9aa15c9fea1d838a96c59d628f547013'},'dist/web/likes.js':{v:1}
}
var abp;
</script>

<script type="text/javascript" src="/js/loader_nav214713185701_3.js"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/evbus.db620810d528de983a46.js?ee27312926fddca49e6a"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/lottie.786b1fc6717e2a8eb385.js?3672aabe71f1c1e08d44"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/audioplayer.f00f2fb481cf42bf7d74.js?5962671039fee38754a9"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/common.0d8da36be427741eea19.js?4d042d5f3644b78e3407"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/common_web.82119d0dfc8684fc5fcb.js?1a4f87332366dcf180ce702895102e49"></script><script type="text/javascript" src="/js/lang3_0.js?27078781"></script><script type="text/javascript" src="/js/lib/px.js?ch=1"></script><script type="text/javascript" src="/js/lib/px.js?ch=2"></script><link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.vk.com/" /><link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/" /><meta name="msApplication-ID" content="C6965DD5.VK" /><meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" /><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/index.e06ca25c3515c29ad213.css" /><script type="text/javascript" src="https://st3-16.vk.com/dist/web/index.0def992c7a10cb136acb.js?88e926ae10f9e738a465f48c6cc10519"></script><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/login.ed881196edbe20d6df54.css" /><script type="text/javascript" src="/dist/web/language.4af08357f4ab5a1b323f.js?5ac1487729c3ba4ec32779ce0a0db046"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/join.5b02de061b8627d54d1b.js?29c527a0abf350ed650852e85af25ade"></script><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/join.ba494657faf371ec2d73.css" /><script type="text/javascript" src="https://st3-16.vk.com/js/lib/ui_controls.js?189"></script><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/ui_controls.39dce12cd031aff5949c.css" /><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/357d86c29236f9e0b370e05bc45991c9.27104be9e67d1099819a.js?fae5b026433125aea400"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/raven_logger.a27c2b3a1f3295318317.js?72b0fd628df02dc54aafe6826f13c555"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/css_types.67632998ba4ebcf650f3.js?bfca8119b4fa8cf3d45e"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/unauthorized.304c3747a45ef8bb641b.js?f21c4b37c67bd6df1c559bc6ac94eea2"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/jobs_devtools_notification.6ab0dea1d10c5561cf2e.js?812b0bbd8db11a934640bcb9281ba478"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/page_layout.48e6150b92b16a704123.js?1850c1853ecbea64eb8f09d843e6c0fd"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/291a33328af5e5ffc982f744fa49e488.4cbf808c89c3bff69c97.js?16b1d99bf666843d1cef"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/8c7cb80fc750b3d5a6ad025449fb24a3.75ad1fb97f33dda88972.js?aaafc4d54e1d998011f4"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/ui_common.21a71194b3d63da86aa6.js?5eb26a16d7dbd285de5ed33f6836f173"></script><link type="text/css" rel="stylesheet" href="https://st3-16.vk.com/css/al/ui_common.f64b319c06267c65814f.css" /><script type="text/javascript" src="https://st3-16.vk.com/dist/bundles/f8a3b0b69a90b5305d627c89f0bd674e.ab54764e7392d894995b.js?04b7e8ebb4f0e7efe8e1"></script><script type="text/javascript" src="https://st3-16.vk.com/dist/web/likes.10eb4d44c5864d75d44d.js?9aa15c9fea1d838a96c59d628f547013"></script>

</head>

<body onresize="onBodyResize()" class="index_page new_header_design ">
  <div style="display:none" id="a11y_mvk_proposal" aria-label="The screen reader performs better on the mobile version of VK. Open the mobile version."></div>
  <div id="system_msg" class="fixed"></div>
  <div id="utils"></div>

  <div id="layer_bg" class="fixed"></div><div id="layer_wrap" class="scroll_fix_wrap fixed layer_wrap"><div id="layer"></div></div>
  <div id="box_layer_bg" class="fixed"></div><div id="box_layer_wrap" class="scroll_fix_wrap fixed"><div id="box_layer"><div id="box_loader"><div class="pr pr_baw pr_medium" id="box_loader_pr"><div class="pr_bt"></div><div class="pr_bt"></div><div class="pr_bt"></div></div><div class="back"></div></div></div></div>

  <div id="stl_left"></div><div id="stl_side"></div>

  <script type="text/javascript">window.domStarted && domStarted();</script>

  <div class="scroll_fix_wrap _page_wrap" id="page_wrap"><style>
:root {
  --layout-width: 960px;
}
</style>
<div><div class="scroll_fix">
  
  <div id="page_header_cont" class="page_header_cont">
    <div id="page_header_wrap" class="page_header_wrap">
      <a class="top_back_link" href="" id="top_back_link" onclick="if (nav.go(this, event, {back: true}) === false) { showBackLink(); return false; }"></a>
      <header id="page_header" class="p_head1 p_head_l3">
        <ul id="top_nav" class="HeaderNav">
  <li class="HeaderNav__item HeaderNav__item--logo">
    <a class="TopHomeLink" href="/" aria-label="Home" accesskey="1" >
      <svg width="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 14.375C0 7.599 0 4.21 2.105 2.105 4.21 0 7.6 0 14.375 0h1.25c6.776 0 10.165 0 12.27 2.105C30 4.21 30 7.6 30 14.375v1.25c0 6.776 0 10.165-2.105 12.27C25.79 30 22.4 30 15.625 30h-1.25c-6.776 0-10.165 0-12.27-2.105C0 25.79 0 22.4 0 15.625v-1.25z" fill="#2787F5"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.125 9.375H5.938c-.625 0-.75.294-.75.619 0 .579.741 3.453 3.453 7.253 1.807 2.596 4.354 4.003 6.671 4.003 1.391 0 1.563-.313 1.563-.85v-1.962c0-.625.132-.75.572-.75.325 0 .88.162 2.179 1.413 1.483 1.484 1.727 2.149 2.561 2.149h2.188c.625 0 .938-.313.757-.93-.197-.614-.905-1.506-1.845-2.563-.51-.602-1.274-1.251-1.506-1.576-.325-.417-.232-.602 0-.973 0 0 2.665-3.754 2.943-5.029.14-.463 0-.804-.662-.804h-2.187c-.556 0-.813.294-.952.619 0 0-1.112 2.711-2.688 4.472-.51.51-.742.673-1.02.673-.139 0-.34-.163-.34-.626v-4.334c0-.556-.161-.804-.625-.804h-3.438c-.347 0-.556.258-.556.503 0 .527.788.649.869 2.132v3.221c0 .707-.127.835-.406.835-.741 0-2.545-2.724-3.615-5.84-.21-.606-.42-.851-.979-.851z" fill="#fff"/></svg>
      
    </a>
  </li>
  <li class="HeaderNav__item HeaderNav__item--gap"><div id="ts_wrap" class="TopSearch" onmouseover="TopSearch.initFriendsList();">
  <input name="disable-autofill" style="display: none;" />
  <input type="text" onmousedown="event.cancelBubble = true;" ontouchstart="event.cancelBubble = true;" class="TopSearch__input" id="ts_input" autocomplete="off" name="disable-autofill" placeholder="Search" aria-label="Search" />
</div></li>
  <li class="HeaderNav__item HeaderNav__btns"><div id="top_audio_layer_place" class="top_audio_layer_place"></div></li>
  <li class="HeaderNav__item HeaderNav__item--player"></li>
  <li class="HeaderNav__item"><a class="top_nav_link" href="" id="top_switch_lang" style="display: none;" onclick="Language.changeLang(this, 3, ''); return false;">
  Switch to English
</a><a class="top_nav_link" href="/join" id="top_reg_link" style="display: none" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)">
  sign up
</a></li>
</ul>
<div id="ts_cont_wrap" class="ts_cont_wrap" ontouchstart="event.cancelBubble = true;" onmousedown="event.cancelBubble = true;"></div>
      </header>
    </div>
  </div>

  <div id="page_layout">
    <div id="side_bar" class="side_bar fl_l  sticky_top_force" style="display: none">
      <div id="side_bar_inner" class="side_bar_inner">
        <div id="quick_login" class="quick_login">
  <form method="POST" name="login" id="quick_login_form" action="{{ url('/login') }}">
    <input type="hidden" name="act" value="login" />
    <input type="hidden" name="role" value="al_frame" />
    <input type="hidden" name="expire" id="quick_expire_input" value="" />
    <input type="hidden" name="to" id="quick_login_to" value="" />
    <input type="hidden" name="recaptcha" id="quick_recaptcha" value="" />
    <input type="hidden" name="captcha_sid" id="quick_captcha_sid" value="" />
    <input type="hidden" name="captcha_key" id="quick_captcha_key" value="" />
    <input type="hidden" name="_origin" value="https://vk.com" />
    <input type="hidden" name="ip_h" value="bc8ed6cc4207dba667" />
    <input type="hidden" name="lg_h" value="2a345e4e04178ccfb1" />
    <input type="hidden" name="ul" id="quick_login_ul" value="" />
    <div class="label">Phone or email</div>
    <div class="labeled"><input type="text" name="email" class="dark" id="email" value="" /></div>
    <div class="label">Password</div>
    <div class="labeled"><input type="password" name="password" class="dark" id="password" onkeyup="toggle('quick_expire', !!this.value);toggle('quick_forgot', !this.value)" /></div>
    <input type="submit" class="submit" />
  </form>
  <button class="quick_login_button flat_button button_wide" id="quick_login_button">Sign in</button>
  <button class="quick_reg_button flat_button button_wide" id="quick_reg_button" style="display: none" onclick="top.showBox('join.php', {act: 'box', from: nav.strLoc})">Sign up</button>
  <div class="clear forgot"><div class="checkbox" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';">Don&#39;t remember me</div><a id="quick_forgot" class="quick_forgot" href="/restore" target="_top">Forgot your password?</a></div>
</div>
      </div>
    </div>

    <div id="page_body" class="fl_r " style="width: 960px;">
      
      <div id="wrap_between"></div>
      <div id="wrap3"><div id="wrap2">
  <div id="wrap1">
    <div id="content"><div class="IndexPageContent">
<div class="IndexPageContent__content">
<div class="page_block VKComboIndexPromo VKComboIndexPromo--morgen">
  <div class="VKComboIndexPromo__main" style="background-image: url(https://sun1-23.userapi.com/iCbv-09IATR-PSn19R_puuwYLLkyyISQfNbo5Q/R_qvl-psuaY.jpg)">
    <div class="VKComboIndexPromo__in">
      <h3 class="VKComboIndexPromo__header">Two new albums from<br>MORGENSHTERN right on VK</h3>
      <div class="VKComboIndexPromo__subheader">30-day subscription for free after <a data-task-click="IndexComboPromo/register" data-prevent="1" href="#">signing up</a></div>

      <div class="VKComboIndexPromo__content"><div class="VKComboIndexPromoAlbumCover">
  <img class="VKComboIndexPromoAlbumCover__thumb" draggable="false" src="https://sun3-17.userapi.com/6zCmJHqmGO4BzJRWvB8nZNFc5qonv58fJl1Vog/usCFoB_ntXs.jpg" srcset="https://sun3-17.userapi.com/6zCmJHqmGO4BzJRWvB8nZNFc5qonv58fJl1Vog/usCFoB_ntXs.jpg 1x, https://sun3-12.userapi.com/vjddC1HLX2lItvwPXoGPCslOhX_TcbEkVN1bog/6raeyzpz9nY.jpg 2x" alt="" />

  <button class="FlatButton FlatButton--overlay-primary FlatButton--size-l VKComboIndexPromoAlbumCover__button" type="button" data-task-click="IndexComboPromo/register" data-source="audio">
  <span class="FlatButton__in">
    <span class="FlatButton__before FlatButton__before--icon24"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.67 10.92c.82.49.82 1.67 0 2.16l-8.79 5.17c-.83.5-1.88-.1-1.88-1.08V6.83c0-.97 1.05-1.57 1.88-1.08l8.8 5.17z" fill="currentColor"/></svg></span>
    <span class="FlatButton__content">
      Sign up and listen
    </span>
  </span>
</button>
</div></div>

      <div class="VKComboIndexPromo__footer">
        <div class="VKComboIndexPromo__comboIcon">
          <svg fill="none" height="24" viewBox="0 0 108 24" width="108" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M24 8.32C24 1.6 22.4 0 15.68 0H8.32C1.6 0 0 1.6 0 8.32v7.36C0 22.4 1.6 24 8.32 24h7.36C22.4 24 24 22.4 24 15.68zM4.5 7.5h1.75c.45 0 .62.2.78.68.86 2.5 2.3 4.67 2.9 4.67.22 0 .32-.1.32-.67V9.61c-.04-.74-.3-1.05-.49-1.29-.11-.14-.2-.26-.2-.42 0-.2.16-.4.44-.4h2.75c.37 0 .5.2.5.64v3.47c0 .37.16.5.27.5.22 0 .41-.13.82-.54C15.6 10.17 16.49 8 16.49 8c.11-.25.32-.49.76-.49H19c.53 0 .64.27.53.64-.2.95-2.06 3.6-2.32 3.98l-.04.05c-.18.3-.25.44 0 .78.1.12.3.31.51.53.23.23.5.48.7.73a7.51 7.51 0 011.48 2.05c.14.49-.11.74-.61.74H17.5c-.47 0-.7-.26-1.21-.83-.22-.24-.49-.54-.84-.89-1.04-1-1.48-1.13-1.74-1.13-.35 0-.46.1-.46.6v1.57c0 .43-.14.68-1.25.68-1.85 0-3.9-1.13-5.34-3.2C4.5 10.76 3.9 8.46 3.9 8c0-.26.1-.5.6-.5zm82.62 10.73c3.43 0 5.84-2.6 5.84-6.21s-2.41-6.21-5.84-6.21a5.73 5.73 0 00-4.41 2.05V1.79h-2.65V18h1.98l.55-1.93a5.82 5.82 0 004.53 2.16zm-.64-2.37c-2.23 0-3.77-1.59-3.77-3.84s1.54-3.84 3.77-3.84c2.2 0 3.72 1.59 3.72 3.84s-1.51 3.84-3.72 3.84zm-48 2.37c2.51 0 4.88-1.29 5.78-3.8l-2.48-.4a3.43 3.43 0 01-3.13 1.79c-2.14 0-3.64-1.57-3.64-3.8 0-2.23 1.5-3.8 3.64-3.8 1.38 0 2.53.72 3.03 1.75l2.49-.41c-.88-2.46-3.13-3.75-5.68-3.75a5.98 5.98 0 00-6.24 6.21 5.98 5.98 0 006.24 6.21zm13.08 0c3.75 0 6.4-2.58 6.4-6.21s-2.65-6.21-6.4-6.21-6.4 2.58-6.4 6.21 2.65 6.21 6.4 6.21zm0-2.42c-2.16 0-3.63-1.54-3.63-3.79s1.47-3.8 3.63-3.8 3.64 1.55 3.64 3.8-1.48 3.8-3.64 3.8zM62.65 18H60V6.04h1.98l.49 1.7a3.78 3.78 0 013.38-1.93c1.6 0 2.94.83 3.54 2.16a4 4 0 013.66-2.16c2.5 0 4.27 2.05 4.27 4.92V18h-2.64v-7.01c0-1.64-.94-2.81-2.32-2.81s-2.37 1.17-2.37 2.8V18h-2.65v-7.01c0-1.64-.94-2.81-2.32-2.81s-2.37 1.17-2.37 2.8zm44.46-5.98c0 3.63-2.64 6.21-6.4 6.21-3.74 0-6.38-2.58-6.38-6.21s2.64-6.21 6.39-6.21c3.75 0 6.4 2.58 6.4 6.21zm-10.02 0c0 2.25 1.47 3.8 3.63 3.8s3.63-1.55 3.63-3.8-1.47-3.8-3.63-3.8-3.63 1.55-3.63 3.8z" fill="currentColor" fill-rule="evenodd"/></svg>
        </div>

        <div class="VKComboIndexPromo__legal">
          The VK Combo trial period lasts 30 days from the moment it's activated. <br/> For new subscription users only. <a class="wikiExtLink" href="/away.php?to=http%3A%2F%2Fvkcombo.ru%2Ftrial-rules" target="_blank" onclick="return goAway('http://vkcombo.ru/trial-rules')">Learn more</a> (RU only) 
        </div>
      </div>
    </div>
  </div>
  <div class="VKComboIndexPromo__vkApp">
    <div class="SmallVKAppPromo">
  <div class="SmallVKAppPromo__icon">
    <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M13 20a1 1 0 100 2h2a1 1 0 100-2z"/><path clip-rule="evenodd" d="M6 8.4c0-2.24 0-3.36.44-4.22a4 4 0 011.74-1.74C9.04 2 10.16 2 12.4 2h3.2c2.24 0 3.36 0 4.22.44a4 4 0 011.74 1.74c.44.86.44 1.98.44 4.22v11.2c0 2.24 0 3.36-.44 4.22a4 4 0 01-1.74 1.74c-.86.44-1.98.44-4.22.44h-3.2c-2.24 0-3.36 0-4.22-.44a4 4 0 01-1.74-1.74C6 22.96 6 21.84 6 19.6zM12.4 4h3.2c1.15 0 1.9 0 2.46.05.55.04.75.12.85.17.37.19.68.5.87.87.05.1.13.3.17.85A34 34 0 0120 8.4v11.2a34 34 0 01-.05 2.46c-.04.55-.12.75-.17.85a2 2 0 01-.87.87c-.1.05-.3.13-.85.17a34 34 0 01-2.46.05h-3.2a34 34 0 01-2.46-.05 2.28 2.28 0 01-.85-.17 2 2 0 01-.87-.87c-.05-.1-.13-.3-.17-.85C8 21.5 8 20.76 8 19.6V8.4c0-1.15 0-1.9.05-2.46.04-.55.12-.75.17-.85a2 2 0 01.87-.87c.1-.05.3-.13.85-.17C10.5 4 11.24 4 12.4 4z" fill-rule="evenodd"/></g></svg>
  </div>
  <div class="SmallVKAppPromo__label">
    Always stay in touch<br>with the VK app
  </div>

  <div class="SmallVKAppPromo__links">
    <a href="https://play.google.com/store/apps/details?id=com.vkontakte.android" class="SmallVKAppPromo__link">
      <span class="SmallVKAppPromo__linkIcon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 2.47a.5.5 0 01.87.5l-1.34 2.3A8 8 0 0116 12.05H0a8 8 0 013.62-6.7L2.25 2.97a.5.5 0 01.87-.5l1.37 2.38a7.97 7.97 0 016.92-.05l1.34-2.33zM13 9.04a1 1 0 11-2 0 1 1 0 012 0zm-9 1a1 1 0 100-2 1 1 0 000 2z" fill="currentColor"/></svg></span>
      Android
    </a>

    <a href="https://itunes.apple.com/ru/app/id564177498" class="SmallVKAppPromo__link">
      <span class="SmallVKAppPromo__linkIcon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.83 7.44c-.01-1.77 1.45-2.62 1.52-2.67a3.28 3.28 0 00-2.57-1.38c-1.1-.11-2.13.64-2.69.64-.55 0-1.4-.63-2.31-.61-1.2.02-2.3.69-2.9 1.75-1.25 2.15-.33 5.32.88 7.06.59.85 1.3 1.8 2.22 1.77.89-.03 1.22-.57 2.3-.57 1.07 0 1.37.57 2.32.55.95-.01 1.56-.86 2.14-1.72.68-.98.96-1.94.98-1.99-.02 0-1.87-.71-1.89-2.83zm-1.77-5.2c.5-.6.83-1.42.74-2.24-.71.03-1.57.47-2.07 1.06a2.93 2.93 0 00-.75 2.17c.79.06 1.6-.4 2.08-1z" fill="currentColor"/></svg></span>
      iOS
    </a>
  </div>
</div>
  </div>
</div>
</div>
<div id="index_rcolumn" class="index_rcolumn">
  <div id="index_login" class="page_block index_login">
    <form method="post" name="login" id="index_login_form" action="https://login.vk.com/?act=login">
      <input type="hidden" name="act" id="act" value="login">
      <input type="hidden" name="role" value="al_frame" />
      <input type="hidden" name="expire" id="index_expire_input" value="" />
      <input type="hidden" name="_origin" value="https://vk.com" />
      <input type="hidden" name="ip_h" value="bc8ed6cc4207dba667" />
      <input type="hidden" name="lg_h" value="2a345e4e04178ccfb1" />
      <input type="text" class="big_text" name="email" id="index_email" value="" placeholder="Phone or email" />
      <input type="password" class="big_text" name="pass" id="index_pass" value="" placeholder="Password" onkeyup="toggle('index_expire', !!this.value);toggle('index_forgot', !this.value)" />
      <button id="index_login_button" class="index_login_button flat_button button_big_text">Sign in</button>
      <div class="forgot">
        <div class="checkbox" id="index_expire" onclick="checkbox(this);ge('index_expire_input').value=isChecked(this)?1:'';">Don&#39;t remember me</div>
        <a id="index_forgot" class="index_forgot" href="/restore" target="_top">Forgot your password?</a>
      </div>
    </form>
  </div>

  <div class="page_block">
    <div class="JoinForm">
  <div class="JoinForm__in">
    <div class="JoinForm__top">
      <div class="JoinForm__header">First time here?</div>
      <div class="JoinForm__subheader">Sign up for VK</div>
      <div class="JoinForm__text"></div>
    </div>

    <div class="JoinForm__error"></div>

    <div class="JoinForm__form">
      <div class="JoinForm__textInputRow">
        <input type="text" class="JoinForm__textInput big_text" name="first_name" value="" placeholder="Your first name" />
      </div>
      <div class="JoinForm__textInputRow">
        <input type="text" class="JoinForm__textInput big_text" name="last_name" value="" placeholder="Your last name" />
      </div>

      <div class="JoinForm__birthdate">
        <div class="JoinForm__label">
          Birthday
          <span class="hint_icon" data-title="&lt;b&gt;By providing your birthday&lt;/b&gt;, your friends will be able to find you more easily and help us select interesting content to recommend to you.&lt;br&gt;You can edit your profile to manage who can view your birthday." onmouseover="showHint(this);"></span>
        </div>

        <div class="JoinForm__birthdateIn">
          <div class="JoinForm__birthdateDay">
            <input type="text" name="bday" class="JoinForm__birthdateDayInput big_text" />
          </div>
          <div class="JoinForm__birthdateMonth">
            <input type="text" name="bmonth" class="JoinForm__birthdateMonthInput big_text" />
          </div>
          <div class="JoinForm__birthdateYear">
            <input type="text" name="byear" class="JoinForm__birthdateYearInput big_text" />
          </div>
        </div>
      </div>

      <div class="JoinForm__sex ">
        <div class="JoinForm__label">Your gender</div>

        <div class="JoinForm__sexIn">
          <div class="JoinForm__sexRadio radiobtn" data-sex="1">Female</div>
          <div class="JoinForm__sexRadio radiobtn" data-sex="2">Male</div>
        </div>
      </div>

      <button class="JoinForm__submitButton flat_button flat_button_positive button_wide button_big_text">Continue registration</button>

      <div class="JoinForm__facebookLogin FacebookLogin FacebookLogin--noNative">
        <div class="FacebookLogin__button fb-login-button"
          data-use-continue-as="true"
          data-width="264"
          data-max-rows="1"
          data-size="medium"
          data-button-type="continue_with"
          data-placeholder="Sign in with Facebook"
        ></div>
      </div>
    </div>

    
  </div>
</div>

  </div>

    <div id="vk_connect_registration_faq" class="page_block index_vk_connect_faq">
    After registering, you&#39;ll get access to all of VK Connect&#39;s features.
    <br />
    <a href="https://connect.vk.com/promo" target="_blank">
      Learn more
    </a>
  </div>
</div>
</div>
<div id="index_footer_wrap" class="footer_wrap index_footer_wrap">
  <div class="footer_nav" id="bottom_nav">
  <div class="footer_copy"><a href="/about">VK</a> &copy; 2006–2021</div>
  <div class="footer_links">
    <a class="bnav_a" href="/about">About VK</a>
    <a class="bnav_a" href="/support?act=home" style="display: none;">Help</a>
    <a class="bnav_a" href="/terms">Terms</a>
    <a class="bnav_a" href="/biz?utm_source=vk_inside&utm_medium=authorization" target="_blank" style="display: none;">For business</a>
    
    <a class="bnav_a" href="/dev">Developers</a>
    <a class="bnav_a" href="/jobs" style="display: none;">Careers</a>
  </div>
  <div class="footer_lang"><a class="footer_lang_link" onclick="Language.changeLang(this, 3, '6b19f139ffcd97d442')">English</a><a class="footer_lang_link" onclick="Language.changeLang(this, 0, '6b19f139ffcd97d442')">Русский</a><a class="footer_lang_link" onclick="Language.changeLang(this, 1, '6b19f139ffcd97d442')">Українська</a><a class="footer_lang_link" onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;">all languages »</a></div>
</div>

<div class="footer_bench clear">
  
</div>
</div></div>
  </div>
</div></div>
    </div>

    <div id="footer_wrap" class="footer_wrap fl_r" style="width: 960px;"><div class="footer_nav" id="bottom_nav">
  <div class="footer_copy"><a href="/about">VK</a> &copy; 2006–2021</div>
  <div class="footer_links">
    <a class="bnav_a" href="/about">About VK</a>
    <a class="bnav_a" href="/support?act=home" style="display: none;">Help</a>
    <a class="bnav_a" href="/terms">Terms</a>
    <a class="bnav_a" href="/biz?utm_source=vk_inside&utm_medium=authorization" target="_blank" style="display: none;">For business</a>
    
    <a class="bnav_a" href="/dev">Developers</a>
    <a class="bnav_a" href="/jobs" style="display: none;">Careers</a>
  </div>
  <div class="footer_lang"><a class="footer_lang_link" onclick="Language.changeLang(this, 3, '6b19f139ffcd97d442')">English</a><a class="footer_lang_link" onclick="Language.changeLang(this, 0, '6b19f139ffcd97d442')">Русский</a><a class="footer_lang_link" onclick="Language.changeLang(this, 1, '6b19f139ffcd97d442')">Українська</a><a class="footer_lang_link" onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;">all languages »</a></div>
</div>

<div class="footer_bench clear">
  
</div></div>

    <div class="clear"></div>
  </div>
</div></div><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2579437;js=na" style="border:0;" height="1" width="1" />
</div></noscript></div>
  <div class="progress" id="global_prg"></div>

  <script type="text/javascript">
    if (parent && parent != window && (browser.msie || browser.opera || browser.mozilla || browser.chrome || browser.safari || browser.iphone)) {
      document.getElementsByTagName('body')[0].innerHTML = '';
    } else {
      window.domReady && domReady();
      (function(){"use strict";function e(e){var o=e.balance;updateMoney(o),window.initPageLayoutUI(),(browser.iphone||browser.ipad||browser.ipod)&&setStyle(bodyNode,{webkitTextSizeAdjust:"none"})}return e})()({"balance":0});(function(){"use strict";function i(i){var n=i.globalWarning,o=i.globalHttpsRequestError,e=ge("quick_login_form"),t=ge("quick_login"),u=ge("quick_email"),r=ge("quick_pass"),w=ge("quick_login_button"),a=w,c=function i(){setTimeout((function(){t.insertBefore(ce("div",{innerHTML:'<iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"></iframe>'}),e),e.target="quick_login_frame",u.onclick=window.loginByCredential,r.onclick=window.loginByCredential}),1)};window.top&&window.top!=window?window.onload=c:setTimeout(c,0),e.onsubmit=function(){return!!ge("quick_login_frame")&&(val("quick_login_ul")||trim(u.value)?trim(r.value)?(window.lockButton(window.__qfBtn=a),a=w,clearTimeout(window.__qlTimer),window.__qlTimer=setTimeout(window.loginSubmitError,35e3),domFC(domPS(e)).onload=function(){clearTimeout(window.__qlTimer),window.__qlTimer=setTimeout(window.loginSubmitError,3500)},!0):(window.notaBene(r),!1):(window.notaBene(u),!1))},window.loginSubmitError=function(){window.showFastBox(n,o)},window.focusLoginInput=function(){scrollToTop(0),window.notaBene("quick_email")},window.changeQuickRegButton=function(i){window.cur.noquickreg=i,i?hide("top_reg_link","quick_reg_button"):show("top_reg_link","quick_reg_button"),toggle("top_switch_lang",i&&window.langConfig&&3!=window.langConfig.id)},window.submitQuickLoginForm=function(i,n,o){window.setQuickLoginData(i,n,o),o&&o.prg&&(a=o.prg),e.onsubmit()&&e.submit()},window.setQuickLoginData=function(i,n,o){void 0!==i&&(ge("quick_email").value=i),void 0!==n&&(ge("quick_pass").value=n);var t=o&&o.params||{};each(t,(function(i,n){var o=ge("quick_"+i)||ge("quick_login_"+i);o?val(o,t[i]):e.appendChild(ce("input",{type:"hidden",name:i,id:"quick_login_"+i,value:n}))}))},window.loginByCredential=function(){if(!browserFeatures.cmaEnabled||!window.submitQuickLoginForm||window._loginByCredOffered)return!1;window._loginByCredOffered=!0,navigator.credentials.get({password:!0,mediation:"required"}).then((function(i){return!!i&&(window.submitQuickLoginForm(i.id,i.password),!0)}))},w&&(w.onclick=function(){e.onsubmit()&&e.submit()}),browser.opera_mobile&&show("quick_expire")}return i})()({"globalWarning":"Warning","globalHttpsRequestError":"Unable to complete encrypted authorization. This can happen if your date and time settings are not configured correctly on your system. Please check your date &amp; time settings and restart the browser."});(function(){"use strict";function t(t){var i;t.hideSupport&&hide("support_link_td","top_support_link"),TopSearch.init()}return t})()({"hideSupport":true});(function(){"use strict";function r(){window.shortCurrency&&shortCurrency()}return r})()({});(function(){"use strict";function a(a){var n=a.params;window.handlePageParams&&handlePageParams(n)}return a})()({"params":{"id":0,"loc":"","noleftmenu":1,"wrap_page":1,"width":960,"width_dec":0,"width_dec_footer":0,"body_class":"index_page new_header_design ","to":"aW5kZXgucGhw","counters":[],"pvbig":0,"pvdark":1}});(function(){"use strict";function n(){addEvent(document,"click",window.onDocumentClick)}return n})()({});
addLangKeys({"index_sel_bday":"Day","global_apps":"Apps","global_friends":"Friends","global_communities":"Communities","head_search_results":"Search results","global_chats":"Chats","global_show_all_results":"Show all results","global_news_search_results":"Search results by news","global_emoji_cat_recent":"Frequently Used","global_emoji_cat_1":"Faces","global_emoji_cat_2":"Animals &amp; Nature","global_emoji_cat_3":"Hands &amp; People","global_emoji_cat_4":"Food &amp; Drink","global_emoji_cat_5":"Activity","global_emoji_cat_6":"Travel &amp; Transport","global_emoji_cat_7":"Objects","global_emoji_cat_8":"Symbols","global_emoji_cat_9":"Flags","stories_archive_privacy_info":"Only you can see your archived stories","stories_remove_warning":"Are you sure you want to delete this story?<br>This can&#39;t be undone.","stories_remove_from_narrative_warning":"Are you sure you want to delete this story?<br>It&#39;ll also be removed from the narrative.","stories_narrative_remove_warning":"Are you sure you want to delete this narrative?<br>This can&#39;t be undone.","stories_remove_confirm":"Delete","stories_answer_placeholder":"Message...","stories_answer_sent":"Message sent","stories_blacklist_title":"Hidden from Stories","stories_settings":"Settings","stories_add_blacklist_title":"Hide from stories","stories_add_blacklist_message":"This user&#39;s stories won&#39;t appear in your feed, but you&#39;ll stay friends.","stories_add_blacklist_button":"Hide from stories","stories_add_blacklist_message_group":"This community&#39;s stories won&#39;t appear in your feed, but you&#39;ll still be a follower.","stories_remove_from_blacklist_button":"Show in stories","stories_error_cant_load":"Unable to load the story.","stories_try_again":"Try again","stories_error_expired":"&#8203;&#8203;The story could have been viewed<br>within 24 hours after being created","stories_error_deleted":"Story deleted","stories_error_private":"Story hidden by author","stories_error_one_time_seen":"This story is no longer available","stories_mask_tooltip":"Try this mask","stories_mask_sent":"Mask sent to phone","stories_followed":"Started following&#33;","stories_unfollowed":"You&#39;ve unfollowed","stories_is_ad":"Advertisment","stories_mask_from":["","Mask from {domain}","Mask from {domain}"],"stories_private_story":"Private<br>story","stories_expired_story":"Story<br>expired","stories_deleted_story":"Story<br>deleted","stories_bad_browser":"Stories are not supported by your browser","stories_delete_all_replies_confirm":"Are you sure you want to delete all of {name}&#39;s replies from last 24 hours?<br>This can&#39;t be undone.","stories_hide_reply_button":"Hide reply","stories_reply_hidden":"Story reply hidden.","stories_restore":"Restore","stories_hide_reply_continue":"Return to replies","stories_hide_all_replies":["","Hide all of his replies from the last 24 hours","Hide all of her replies from the last 24 hours"],"stories_reply_add_to_blacklist":"Block","stories_hide_reply_warning":"Are you sure you want to hide this reply?<br>This can&#39;t be undone.","stories_replies_more_button":["","Show %s more commenter","Show %s more commenters"],"stories_all_replies_hidden":"All replies hidden","stories_ban_confirm":"Are you sure you want to block {name}?<br>This can&#39;t be undone.","stories_banned":"The user has been blocked","stories_share":"Share","stories_like":"Like","stories_app":"Mini app","stories_write_message":"Write message","stories_follow":"Follow","stories_unfollow":"Unfollow","stories_report":"Report","stories_report_sent":"Report sent","stories_narrative_show":"View narrative","stories_narrative_bookmark_added":"Narrative added to {link}Bookmarks{\/link}","stories_narrative_bookmark_deleted":"Narrative removed from Bookmarks","stories_narrative_edit_button":"Edit narrative","stories_set_cover_narrative":"Make narrative cover","stories_story_is_cover_narrative":"Narrative cover","stories_remove_from_narrative":"Remove from narrative","stories_narrative_cover_updated":"Narrative cover changed","stories_remove_only_from_narrative_warning":"Are you sure you want to remove this story from the narrative?","stories_narrative_add_bookmark_button":"Add to Bookmarks","stories_narrative_remove_bookmark_button":"Remove from Bookmarks","stories_narrative_copy_link":"Copy link","stories_narrative_copy_link_done":"Link copied","stories_show_hashtag_link":"Search hashtag","stories_go_to_place":"Go to place","stories_go_to_group":"Open community","stories_go_to_profile":"Open profile","stories_go_to_post":"Go to post","stories_go_to_story":"Open story","stories_share_question":"Give feedback","stories_live_ended_title":"Thanks for watching&#33;","stories_live_ended_desc_club":"{name} finished <br>the live stream.","stories_live_ended_desc_user":["","{name} finished the live stream.","{name} finished the live stream."],"stories_live_ended_open_club":"Open community","stories_live_ended_open_user":"Open profile","stories_live_ended_watch_next":"Watch next","stories_live_N_watching":["","%s watching now","%s watching now"],"stories_live_chat_msg_too_long":"Message too long","stories_questions_title":"Feedback","stories_question_reply":"Respond","stories_question_reply_error":"Unfortunately, your message cannot be sent due to this user&#39;s privacy settings.","stories_question_reply_send":"Send","stories_question_reply_placeholder":"Write a message...","stories_question_delete":"Delete feedback","stories_question_author_ban":"Block","stories_question_author_unban":"Unblock author","stories_question_author_blocked":"Author blocked","stories_question_author_unblocked":"Author unblocked","stories_question_author_report":"Report","stories_question_report_title":"Report feedback","stories_question_report_send":"Send","stories_question_more":"More options","stories_question_sent":"You gave feedback to {name}","stories_question_reply_box_title":"Message to {name}","stories_question_ask_placeholder":"Enter your feedback...","stories_question_ask_box_title":"Feedback on {name}&#39;s story","stories_question_report_reason":"Select a reason","stories_question_forbidden":"You can&#39;t give feedback","stories_audio_add":"Add to my music","stories_audio_added":"Track added","stories_audio_delete":"Delete track","stories_audio_deleted":"Track deleted","stories_audio_next_audio":"Play next","stories_reactions_title":"Quick reactions","stories_reactions_tooltip_feature":"Now you can quickly react to the story","stories_go_to_market_item":"More info","stories_market_access_error_title":"Error","stories_market_access_error_text":"Product unavailable","stories_groups_feed_block":"Communities","stories_settings_box_tab_all":"All","stories_settings_box_tab_separately":"Shown separately","stories_settings_box_tab_grouped":"Grouped","stories_settings_box_search_placeholder":"Search communities","stories_settings_box_put_back":"Show last","stories_groups_grid_title":"Community stories","stories_go_to_app":"Go to mini app","stories_groups_grid_text":"This is where you can find stories from communities that you&#39;re following","stories_groups_tooltip":"Mark stories that you want to see in your stories feed","stories_detailed_stats":"Detailed statistics","stories_privacy_feedback_hint":"Access to your stories is limited. You can change this in your privacy settings.","stories_privacy_empty_views_hint":"Only you can see your stories. Make them available to everyone to get more views.","stories_go_to_settings":"Go to settings","stories_mark_not_interested":"Not interesting","stories_thanks_feedback":"Thanks for helping to improve our recommendations&#33;","stories_stat_counter_off":"off","stories_add_to_narrative":"Add to narrative","stories_feature_narrative_users":"Create narratives from stories","stories_question_select_public":"Publicly","stories_question_select_author_only":"Author only","stories_question_select_anonymous":"Anonymously","stories_question_about_user_tooltip":"<b>Public<\/b><br>{name} will be able to add your name when sharing your feedback.<br><br><b>Name visible to author<\/b><br>{name} will see your name but won&#39;t be able to add it when sharing your feedback.<br><br><b>Anonymous<\/b><br>{name} won&#39;t see your name and won&#39;t be able to add it when sharing your feedback.","stories_question_about_group_tooltip":"<b>Public<\/b><br>Community managers will be able to add your name when sharing your feedback.<br><b>Name visible to author<\/b><br>Community managers will see your name but won&#39;t be able to add it when sharing your feedback.<br><b>Anonymous<\/b><br>Community managers won&#39;t see your name and won&#39;t be able to add it when sharing your feedback.","stories_question_about_user_tooltip_without_anon":"<b>Public<\/b><br>{name} will be able to add your name when sharing your feedback.<br><br><b>Name visible to author<\/b><br>{name} will see your name but won&#39;t be able to add it when sharing your feedback.","stories_question_about_group_tooltip_without_anon":"<b>Public<\/b><br>Community managers will be able to add your name when sharing your feedback.<br><br><b>Name visible to author<\/b><br>Community managers will see your name but won&#39;t be able to add it when sharing your feedback.","stories_voting_show_result":"Show results","stories_new_avatar_story_title_header":"New profile{br}photo","stories_new_avatar_story_poll_sticker_title":"Which is better?","stories_poll_sticker_vote_button_text":"Vote","stories_new_avatar_story_success_box_text":"Profile photo updated and published in a story","stories_new_avatar_story_success_box_open_story":"Open story"}, true);
addLangKeys({"box_cancel":"Cancel","box_close":"Close","box_no":"No","box_yes":"Yes","calls_actions":"Actions","calls_add":"Add","calls_add_participants":"Add participants","calls_add_participants_to_call":"Invite to call","calls_admin_pin_dialog_action":"Turn on microphone","calls_admin_pin_dialog_cancel":"Later","calls_admin_pin_dialog_description":"The administrator has pinned your video for everyone. Turn on microphone and start talking?","calls_admin_pin_dialog_title":"Turn on microphone","calls_already_in_call_error":"End the current call to join a new one.","calls_and":"{before} and {after}","calls_app_title":"VK Calls","calls_apps_for_all_platform":"Apps for all operating systems","calls_back":"Back","calls_busy":"Busy","calls_busy_error":"The user is already on a call. Please call again later.","calls_call_all":"Call everyone","calls_call_by_name_audio_button":"Voice call","calls_call_by_name_join_by":"Join as yourself","calls_call_by_name_list_header":"Your profiles and communities","calls_call_by_name_not_found":"Profiles and communities not found","calls_call_by_name_search_placeholder":"Search","calls_call_by_name_select":"Select","calls_call_by_name_selected":"Selected","calls_call_by_name_title":"Call as","calls_call_by_name_video_button":"Video call","calls_call_menu_debug":"Download debug logs","calls_call_menu_enable_media_request":"Request participants to turn on microphones and videos","calls_call_menu_mute_audio_video_all":"Turn off participants&#39; microphone and video","calls_call_menu_settings":"Video and audio settings","calls_call_menu_translation":"Live stream call","calls_call_participants":"Call participants","calls_call_via_native_app_join":"Join via app","calls_callee_is_offline":"Offline","calls_calls_start_lesson_in_browser":"Start call from browser","calls_calls_troubles_with_app":"Having problems with the app?","calls_cancel":"Cancel","calls_chat":"Open chat","calls_chat_busy_error":"You can&#39;t start a call in this chat because there is already a call in progress.","calls_chat_group_members":"Community members","calls_chat_members":"Chat members","calls_close":"Close","calls_collapse":"Minimize","calls_dialog_assign_admin_role_action_later":"Later","calls_dialog_assign_admin_role_action_primary":"Appoint administrator","calls_dialog_assign_admin_role_description":"Are you sure you want to give control of the call to {name}?","calls_dialog_assign_admin_role_title":"Appoint administrator","calls_dialog_creator_exit_action":"Appoint and leave call","calls_dialog_creator_exit_select":"Select","calls_dialog_creator_exit_selected":"Selected","calls_dialog_creator_exit_title":"Appoint call administrator","calls_dialog_unmute_request_action":"Turn on microphone and video","calls_dialog_unmute_request_description":"The administrator requested you to turn on your microphone and video","calls_dialog_unmute_request_mic_only_action":"Turn on only microphone","calls_dialog_unmute_request_title":"Turn on microphone and video","calls_download_and_install_app_for_pc":"Please download and install the desktop version","calls_download_app":"Download app","calls_download_started":"Download started","calls_downloading_file":"Downloading {file}","calls_error":"Error","calls_error_cameralock":"Failed to access camera. Another app may already be using the camera.","calls_error_force_call_finish":"Failed to end the call for everyone.","calls_error_miclock":"Failed to access microphone. Another app may already be using it.","calls_error_no_cam":"Camera access required.","calls_error_no_cam_and_mic":"Camera and microphone access required.","calls_error_no_mic":"Microphone access required.","calls_error_nomic":"Microphone not found","calls_error_screenlock":"Failed to access screen sharing. Another app may already be sharing your screen.","calls_error_screenpermission":"Please provide access to screen sharing","calls_exit_menu":"End call","calls_feedback_advance_title":"What went wrong?","calls_feedback_custom_reason_placeholder":"Other","calls_feedback_default_title":"Please rate the quality of the call","calls_feedback_reason_bad_sound_quality":"Poor sound quality","calls_feedback_reason_bad_video_quality":"Poor video quality","calls_feedback_reason_did_not_hear_interlocutor":"I couldn&#39;t hear the other person","calls_feedback_reason_did_not_see_interlocutor":"I couldn&#39;t see the other person","calls_feedback_reason_failed_to_turn_on_camera_or_microphone":"Unable to turn on camera or microphone","calls_feedback_reason_sound_did_not_match_the_video":"Video and sound out of sync","calls_feedback_reason_very_quiet_sound":"Sound was too quiet","calls_feedback_reason_video_freezes":"Video froze","calls_feedback_send":"Send","calls_feedback_skip":"Close","calls_feedback_success":"Sent&#33; Thanks for your feedback.","calls_flood_error":"You are calling too often. Try again later.","calls_force_call_finish":"End call for everyone","calls_friends":"Invite friends to join the call","calls_get_url_link_error_text":"Failed to get call URL.","calls_go_to_chat_with_community":"Message community","calls_go_to_chat_with_participant":"Write message","calls_go_to_community":"Go to community","calls_go_to_profile":"Open profile","calls_hangup_description":"Are you sure you want to end the call?","calls_hint_admin_pin_for_admin":"Unpin video for everyone","calls_hint_admin_pin_for_user":"Video pinned by administrator","calls_hint_user_pin":"Unpin video","calls_incoming_audiocall":"Incoming voice call","calls_incoming_collapsed":"Incoming","calls_incoming_process_error":"Someone is calling you, but you can&#39;t accept the call on the desktop version of the website due to an error.<br>Try accepting the call on the mobile app. If this doesn&#39;t help, refresh the page and ask the person to call back.","calls_incoming_videocall":"Incoming video call","calls_info_translation_share_menu_item":"Share stream","calls_invite":"Call invite","calls_join_call_after_install_app":"After installing the app, tap <b>Join call<\/b>","calls_join_call_in_app":"Join call","calls_join_call_in_browser":"Join call from browser","calls_join_error_banned":"Вы были исключены из этого звонка.","calls_join_error_require_access":"You can&#39;t join a call in this closed chat. Ask the administrator to add you to the chat.","calls_join_error_require_auth":"Please sign in to join this call","calls_join_error_text":"The host ended the call.","calls_join_with_audio":"Join with audio","calls_join_with_video":"Join with video","calls_kick_participant_kick_button_text":"Remove","calls_kick_participant_text":["","{user} will be removed from the call","{user} will be removed from the call"],"calls_kick_participant_title":"Remove from call","calls_kick_participant_with_ban_setting":"Allow them to rejoin the call","calls_leave_call":"Leave call","calls_link_copied":"Copied","calls_link_copy":"Copy","calls_link_invalidate":"Update link","calls_management_add_warning":"New participants will be added to the chat","calls_management_link":"Call link","calls_management_link_allow_anonymous":"Allow callers to join anonymously","calls_management_link_anonymous_disallowed_hint":"Anonymous entry not allowed","calls_management_link_info_desc":"Copy the link and send it to those you want to invite.","calls_management_participants":"Participants","calls_members_list_label":["","{name} and %s other person","{name} and %s other people"],"calls_menu_link":"Call link","calls_menu_link_copied":"Copied","calls_menu_link_copy":"Copy","calls_mute":"Turn off microphone","calls_mute_all_participants_dialog_description":"The microphone and video will be turned off for all current and new call participants","calls_mute_all_participants_dialog_permanent_toggle":"Allow participants to turn on their microphone and video after you&#39;ve turned them off","calls_mute_all_participants_dialog_title":"Turn off participants&#39; microphone and video","calls_mute_participant_dialog_action":"Turn off","calls_mute_participant_dialog_description":"{name}&#39;s microphone and video will be turned off","calls_mute_participant_dialog_permanent_toggle":"Allow microphone and video to be turned on after you&#39;ve turned them off","calls_mute_participant_dialog_title":"Turn off {name}&#39;s microphone and video","calls_name_placeholder":"Enter a name","calls_new_call_title":"Call","calls_no":"No","calls_no_camera":"Camera not found","calls_noise_neural":"Auto","calls_noise_none":"Off","calls_noise_simple":"Low","calls_notification_admin_mute":"The administrator has turned off your microphone and video","calls_notification_admin_permanent_mute":"The administrator has restricted you from turning on your microphone and video. Raise your hand to get attention.","calls_notification_admin_pinned_self":"Administrator pinned your video for everyone","calls_notification_admin_pinned_user":"Administrator pinned {name}&#39;s video","calls_notification_admin_role_granted":"You&#39;re now the administrator","calls_notification_bad_network_connection":"Poor connection quality","calls_notification_bad_network_connection_disable_camera":"Your camera was disabled due to poor connection quality","calls_notification_mic_is_mute":"Your microphone is muted","calls_notification_raised_hand":["","{user} raised his hand","{user} raised her hand"],"calls_notification_screen_sharing_started":"Screen sharing","calls_notification_user_granted_with_admin_role":"{name} is now the administrator","calls_notification_user_started_screen_sharing":["","{user} started sharing his screen","{user} started sharing her screen"],"calls_oops":"Error","calls_open_app_list":"Open app list","calls_own_label":"You","calls_participant_list_header":"Call participants","calls_participant_menu_assign_admin_role":"Appoint as administrator","calls_participant_menu_enable_media_request":"Request to turn on microphone and video","calls_participant_menu_kick":"Remove from call","calls_participant_menu_mute":"Mute microphone","calls_participant_menu_mute_audio_video":"Mute and disable video","calls_participant_menu_pin":"Pin video for everyone","calls_participant_menu_pin_cancel":"Unpin video for everyone","calls_participant_menu_revoke_admin_role":"Demote administrator","calls_participants_not_found":"No participants found","calls_participants_plural":["","%s participant","%s participants"],"calls_participants_speak":["","Speaking: {names}","Speaking: {names}"],"calls_privacy_error":"Call failed because the privacy settings of one of the parties do not allow calls.","calls_reject":"Decline","calls_reject_call":"Decline call","calls_reject_description":"Are you sure you want to decline the call?","calls_reject_title":"Decline call","calls_rejected_status":"Call rejected","calls_remove_token":"Remove","calls_reply":"Answer","calls_reply_with_audio":"Answer with audio","calls_reply_with_video":"Answer with video","calls_restore":"Maximize","calls_save":"Save","calls_screen_share_stop":"Stop sharing","calls_search_participants_placeholder":"Enter a first or last name","calls_selected":"{selected} of {limit} selected","calls_settings":"Settings","calls_settings_camera":"Camera","calls_settings_mic":"Microphone","calls_settings_no_camera":"Camera not found","calls_settings_no_mic":"Microphone not found","calls_settings_noise":"Background noise<br>suppression","calls_settings_noise_description":"Select <b>Auto<\/b> so that background noise doesn&#39;t interfere with your call","calls_settings_video_resolution":"Video","calls_show_all_friends":"Show all friends","calls_show_all_group_members":"Show all community members","calls_show_all_members":"Show all chat members","calls_show_grid":"Show participants in a grid","calls_show_orator":"Show active speaker","calls_sorry_error":"An unknown error has occurred","calls_start_call_after_install_app":"After installing the app, tap <b>Start call<\/b>","calls_start_error":"An error occurred during the call. Please try again later.","calls_start_in_app":"Start call","calls_start_screen_share":"Share screen","calls_status_connecting":"Connecting","calls_status_hangup":"Ending call","calls_status_no_permissions":"No permissions","calls_status_waiting":"Waiting","calls_stop_screen_share":"Stop sharing screen","calls_sure_leave_call":"Are you sure you want to end the call?","calls_tooltip_fullscreen_off":"Regular","calls_tooltip_fullscreen_on":"Full screen","calls_tooltip_lower_hand":"Lower hand","calls_tooltip_raise_hand":"Raise hand","calls_translation_box_title":"Create live stream call","calls_translation_cancel_button":"Cancel live stream call","calls_translation_date_label_soon":"Coming up","calls_translation_description":"Description","calls_translation_description_placeholder":"What is your live stream about?","calls_translation_host_info":"{name} is hosting a live stream call","calls_translation_host_info_unknown":"Live stream call in progress","calls_translation_link":"Live stream call link","calls_translation_link_copied":"Copied","calls_translation_link_copy":"Copy","calls_translation_link_info":"You can share the link to the live stream call below.","calls_translation_menu_link":"Live stream call page","calls_translation_menu_stop":"End stream","calls_translation_menu_title":"Live stream call","calls_translation_name_placeholder":"Enter a title","calls_translation_notification_warning":"Please let the call participants know that the call will be streamed","calls_translation_owner_title":"Streamer","calls_translation_postponed_reset":"Cancel","calls_translation_postponed_title":"Planned live stream","calls_translation_privacy_all_users":"All users","calls_translation_privacy_friends_and_chat":"Friends and chat members","calls_translation_privacy_only_me_and_chat":"Only me and chat members","calls_translation_select_upcoming_box_title":"Select live stream","calls_translation_select_video_link":"Select","calls_translation_start":"Start live stream call","calls_translation_stop":"End","calls_translation_stop_confirmation":"End stream","calls_translation_stop_menu_item":"End stream","calls_translation_stop_sure":"Are you sure you want to end the live stream call?","calls_translation_title":"Title","calls_translation_title_default_value":"Group call %s","calls_translation_upcoming_time_more_day":["","Live stream starts in one day","Live stream starts in %s days"],"calls_translation_who_can_see_video_privacy":"Who can see this post","calls_translation_who_can_see_video_privacy_hint":"After the live stream call starts, it&#39;ll appear in the chat and be accessible to call participants and those you&#39;ve shared the stream with","calls_try_manual_join_lesson":"If the window doesn&#39;t appear, press Join call below","calls_try_manual_start_lesson":"If the window doesn&#39;t appear, press &#39;&#39;&#39;Start call&#39;&#39;&#39; below","calls_unban_participant_cancel_button_text":"Cancel","calls_unban_participant_description_text_more_persons":["","{users} and {users_count} other user were blocked by the administrator","{users} and {users_count} others were blocked by the administrator"],"calls_unban_participant_description_text_one_person":["","{user} was blocked by the administrator","{user} was blocked by the administrator"],"calls_unban_participant_description_text_two_persons":"{users} were blocked by the administrator","calls_unban_participant_disallowed_button_text":"Got it","calls_unban_participant_ok_button_text":"Unblock and add","calls_unban_participant_text":["","You&#39;re trying to add a blocked user to the call","You&#39;re trying to add blocked users to the call"],"calls_unban_participant_title":"Add to call","calls_unknown_error":"Unknown error","calls_unmute":"Turn on microphone","calls_video_resolution_fhd":"High definition","calls_video_resolution_hd":"Good quality","calls_video_resolution_sd":"High performance","calls_wait_until_app_downloaded":"Please wait while the Calls app is downloading","calls_yes":"Yes","calls_you_are_screen_sharer":"You&#39;re sharing your screen","captcha_cancel":"Cancel","captcha_enter_code":"Enter the code from the picture","captcha_send":"Send","global_age_days":["","%s day","%s days"],"global_age_months":["","%s month","%s months"],"global_age_seconds":["","%s second","%s seconds"],"global_age_weeks":["","%s week","%s weeks"],"global_age_years":["","%s year old","%s years old"],"global_and":"{before} and {after}","global_apps":"Apps","global_back":"Back","global_box_title_back":"Back","global_cancel":"Cancel","global_captcha_input_here":"Enter code","global_chats":"Chats","global_close":"Close","global_communities":"Communities","global_date":["","{day} {month} {year}","yesterday","today","tomorrow"],"global_date_l":["","{day} {month} {year}","yesterday","today","tomorrow"],"global_days_accusative":["","%s day","%s days"],"global_delete":"Delete","global_error":"Error","global_friends":"Friends","global_hours":["","%s hour","%s hours"],"global_hours_accusative":["","%s hour","%s hours"],"global_hours_ago":["","%s hour ago","%s hours ago"],"global_just_now":"just now","global_mins_ago":["","%s minute ago","%s minutes ago"],"global_minutes":["","%s minute","%s minutes"],"global_minutes_accusative":["","%s minute","%s minutes"],"global_money_amount_rub":["","%s ruble","%s rubles"],"global_months_accusative":["","%s month","%s months"],"global_news_search_results":"Search results by news","global_online_long_ago":["","seen a long time ago","seen a long time ago"],"global_online_this_month":["","seen this month","seen this month"],"global_online_was_recently":["","seen recently","seen recently"],"global_online_was_week":["","seen this week","seen this week"],"global_open":"Open","global_recaptcha_title":"Confirm action","global_save":"Save","global_seconds_accusative":["","%s second","%s seconds"],"global_secs_ago":["","%s second ago","%s seconds ago"],"global_short_date":["","{month} {day}","yesterday","today","tomorrow"],"global_short_date_time":["","{day} {month} at {hour}:{minute} {am_pm}","yesterday at {hour}:{minute} {am_pm}","today at {hour}:{minute} {am_pm}","tomorrow at {hour}:{minute} {am_pm}"],"global_short_date_time_l":["","{day} {month} at {hour}:{minute} {am_pm}","yesterday at {hour}:{minute} {am_pm}","today at {hour}:{minute} {am_pm}","tomorrow at {hour}:{minute} {am_pm}"],"global_show_all_results":"Show all results","global_to_top":"Go up","global_user_is_online":"online","global_user_is_online_mobile":"online from mobile","global_warning":"Warning","global_weeks_accusative":["","%s week","%s weeks"],"global_word_hours_ago":["","one hour ago","two hours ago","three hours ago","four hours ago","five hours ago"],"global_word_mins_ago":["","one minute ago","two minutes ago","three minutes ago","4 minutes ago","5 minutes ago"],"global_word_secs_ago":["","one second ago","two seconds ago","three seconds ago","four seconds ago","five seconds ago"],"global_years_accusative":["","%s year","%s years"],"head_search_results":"Search results","index_sel_bday":"Day","login_blocked_delete_page_header":"Delete profile","login_blocked_sure_delete_page_question":"Are you sure you want to delete your profile?","login_fast_unblocked_wait_description":"Account unblocked. You&#39;ll be able to use VK again in a few seconds.","mail_ad_tag_easy_promoted_market":"From product ad","mail_ad_tag_no_access_box_text":"Insufficient permissions in the advertising account to view this ad.","mail_ad_tag_no_access_box_title":"Error","mail_ad_tag_no_access_text":"From ad","mail_ad_tag_text_prefix":"AD","mail_added_article":"Article","mail_added_artist":"Artist","mail_added_audio":"Audio file","mail_added_audio_album":"Album","mail_added_audio_playlist":"Playlist","mail_added_audiomsg":"Voice message","mail_added_audios":["","Audio","%s audios"],"mail_added_call":"Call","mail_added_clips":"Clips","mail_added_curator":"Curator","mail_added_doc":"File","mail_added_docs":"File","mail_added_geo":"Map","mail_added_gift":"Gift","mail_added_graffiti":"Graffiti","mail_added_group":"Group","mail_added_link":"Link","mail_added_market_item":"Product","mail_added_mask":"Mask","mail_added_money_request":"Money request","mail_added_money_transfer":"Money transfer","mail_added_msg":"Message","mail_added_msgs":"Messages","mail_added_photo":"Photo","mail_added_photos":["","Photo","%s photos"],"mail_added_podcast":"Podcast","mail_added_poll":"Poll","mail_added_sticker":"Sticker","mail_added_story":"Story","mail_added_video":"Video","mail_added_videos":["","Video","%s videos"],"mail_added_vkpay":"VK Pay","mail_added_wall":"Wall post","mail_added_wall_reply":"Wall comment","mail_added_widget":"Widget","mail_allow_comm_messages":"Allow messages","mail_and_peer":"and {count} more {typing}","mail_and_peer_one":"and","mail_block_comm_messages":"Block messages","mail_block_notify_messages":"Disable notifications","mail_block_user":"Block user","mail_by_you":"You","mail_call_declined":"Call declined","mail_call_snippet_canceled":"Canceled","mail_call_snippet_declined":"Declined","mail_call_snippet_finished":"Ended","mail_call_snippet_group":"Group call","mail_call_snippet_incoming":"Incoming call","mail_call_snippet_incoming_video":"Incoming video call","mail_call_snippet_missed":"Missed","mail_call_snippet_outgoing":"Outgoing call","mail_call_snippet_outgoing_video":"Outgoing video call","mail_callback_popup_text":"{name} is asking if you want to open {domain}","mail_callback_popup_title":"Open link?","mail_chat_leave_confirm":"If you leave, you won&#39;t receive any new messages from this chat. You can only return if there is enough room.","mail_chat_sure_to_delete_all":"Are you sure you want to <b>delete the entire message history<\/b> for this chat?<br><br>This <b>can&#39;t<\/b> be undone.","mail_clear_recent":"Clear","mail_creation_count_mr_service_msg":["","%s invite sent (only you can see this)","%s invites sent (only you can see this)"],"mail_delete":"Delete","mail_delete_for_all":"Delete for everyone","mail_deleteall1":"Delete all messages","mail_deleted_stop":"Message deleted.","mail_dialog_msg_delete_N":["","Are you sure you want to <b>delete<\/b> this message?","Are you sure you want to <b>delete<\/b> %s messages?"],"mail_dialog_msg_delete_title":"Delete message","mail_error":"Error","mail_expired_message":"Message self-destructed","mail_fwd_msgs":["","%s message","%s messages"],"mail_gift_message_sent":["","sent a gift","sent a gift"],"mail_group_calls_im_search_new_year_tt":"Celebrate with loved ones! <br\/> VK Calls bring everyone together ","mail_group_calls_im_search_tt":"Start a group call here","mail_group_sure_to_delete_all":"Are you sure you want to <b>delete the entire message history<\/b> with this community?<br><br>This <b>can&#39;t<\/b> be undone.","mail_header_online_status":"online","mail_hide_unpin_hover":"Hide","mail_im_accepted_message_request":"This is {contact} from your contact list","mail_im_accepted_message_request_no_name":"an unnamed contact","mail_im_add_to_chat":"Add to chat","mail_im_call_app":"Call on app","mail_im_call_audio":"Voice call","mail_im_call_by_name":"Call as","mail_im_call_video":"Video call","mail_im_chat_created":["","{from} created {title}","{from} created {title}"],"mail_im_chat_kick_don":"You were removed from the chat because your paid subscription to the community expired","mail_im_chat_own_screenshot":"You took a screenshot of the chat","mail_im_chat_screenshot":["","{from} took a screenshot of the chat","{from} took a screenshot of the chat"],"mail_im_create_chat_with":"Add members","mail_im_delete_all_history":"Clear message history","mail_im_delete_email_contact":"Delete chat","mail_im_goto_conversation":"Go to chat","mail_im_invite_by_call_link":["","{from} joined the call via link","{from} joined the call via link"],"mail_im_invite_by_link":["","{from} joined the chat via link","{from} joined the chat via link"],"mail_im_invite_by_message_request":["","{user} invited {from} to the chat","{user} invited {from} to the chat"],"mail_im_invite_to_chat":"Invite to chat","mail_im_invited":["","{from} added {user}","{from} added {user}"],"mail_im_invited_to_call":["","{from} added {user} to the call","{from} added {user} to the call"],"mail_im_kick_user_call_block":["","{from} removed {user} from call","{from} removed {user} from call"],"mail_im_kicked_from_chat":["","{from} removed {user}","{from} removed {user}"],"mail_im_left":["","{from} left the chat","{from} left the chat"],"mail_im_mention_all":"All chat members","mail_im_mention_online":"Everyone who is online right now","mail_im_mute":"Disable notifications","mail_im_n_chat_members":["","%s member","%s members"],"mail_im_new_messages":["","%s new message","%s new messages"],"mail_im_peer_profile_delete_note_success":"Comment deleted","mail_im_peer_profile_extra_tags":["","%s tag","%s tags"],"mail_im_peer_profile_info_empty":"none","mail_im_peer_profile_info_label_text":"Information:","mail_im_peer_profile_join_date_empty_text":["","Not following","Not following"],"mail_im_peer_profile_join_date_label_text":"Started following:","mail_im_peer_profile_manage_tags":"Manage tags","mail_im_peer_profile_manage_tags_add_link":"Add tag","mail_im_peer_profile_manage_tags_box_title":"Manage","mail_im_peer_profile_manage_tags_placeholder":"New tag","mail_im_peer_profile_manage_tags_remove":"Delete tag","mail_im_peer_profile_manage_tags_success":"Tags saved","mail_im_peer_profile_note_add_link":"Add comment","mail_im_peer_profile_note_box_placeholder":"Enter text...","mail_im_peer_profile_note_box_title":"Administrator&#39;s comment","mail_im_peer_profile_note_delete_confirmation_text":"Are you sure you want to delete this comment?","mail_im_peer_profile_note_delete_link":"Delete comment","mail_im_peer_profile_note_edit_link":"Edit","mail_im_peer_profile_note_label_text":"Comment:","mail_im_peer_profile_save_note_success":"Comment saved","mail_im_peer_profile_tag_delete_confirmation_text":["","The tag &quot;{tag_name}&quot; is used in %s chat. If you delete this tag, it will be removed from all chats. Are you sure you want to do this?","The tag &quot;{tag_name}&quot; is used in %s chats. If you delete this tag, it will be removed from all chats. Are you sure you want to do this?"],"mail_im_peer_profile_tag_delete_confirmation_text_single":"The tag &quot;{tag_name}&quot; is used in one chat. If you delete this tag, it will be removed from the chat. Are you sure you want to do this?","mail_im_peer_profile_tags_empty":"No tags","mail_im_peer_profile_tags_label_text":"Tags:","mail_im_peer_profile_toggle_tags_off":"Hide available tags","mail_im_peer_profile_toggle_tags_on":"Show available tags","mail_im_peer_search":"Search message history","mail_im_photo_removed":["","{from} deleted the chat photo","{from} deleted the chat photo"],"mail_im_photo_removed_channel":["","{from} deleted the channel cover","{from} deleted the channel cover"],"mail_im_photo_set":["","{from} updated the chat photo","{from} updated the chat photo"],"mail_im_pin_message":["","{from} pinned a message: {msg}","{from} pinned a message: {msg}"],"mail_im_pin_message_empty2":["","{from} pinned {link}a message{\/link}","{from} pinned {link}a message{\/link}"],"mail_im_returned_to_chat":["","{from} returned to the chat","{from} returned to the chat"],"mail_im_search_empty":"No matching messages found.","mail_im_show_media_history":"Show attachments","mail_im_show_media_history_group":"Show attachments","mail_im_start_group_call":["","{from} started a group call","{from} started a group call"],"mail_im_title_updated_channel":["","{from} changed the channel name: {title}","{from} changed the channel name: {title}"],"mail_im_title_updated_dot":["","{from} renamed the chat to {title}","{from} renamed the chat to {title}"],"mail_im_unmute":"Enable notifications","mail_im_unpin_message":["","{from} unpinned &quot;{msg}&quot;","{from} unpinned &quot;{msg}&quot;"],"mail_im_unpin_message_empty2":["","{from} unpinned {link}the message{\/link}","{from} unpinned {link}the message{\/link}"],"mail_invitation_sended_ago":"Invite sent {when}","mail_join_invite_error_title":"Error joining the chat","mail_keyboard_label_location":"Send your location","mail_keyboard_label_vkpay":"Pay with VK Pay","mail_last_activity_tip":["","{user} last seen {time}","{user} last seen {time}"],"mail_leave_channel":"Leave channel","mail_leave_chat":"Leave chat","mail_marked_as_spam":"Message marked as spam and deleted.","mail_menu_mark_unread":"Mark as unread","mail_menu_pin_hide":"Hide pinned message","mail_menu_pin_show":"Show pinned message","mail_menu_unpin":"Unpin message","mail_message_edited":"edited","mail_message_request_reject":"Decline","mail_message_wait_until_uploaded":"Please wait while we&#39;re uploading the files.","mail_messages_expired":["","{count} message self-destructed","{count} messages self-destructed"],"mail_money_amount_rub":["","%s rub.","%s rub."],"mail_money_request_collected_amount":"{amount} collected","mail_money_request_collected_amount_from":"{amount} of {total_amount} collected","mail_money_request_held_amount":"({amount} pending)","mail_money_request_message_sent":["","requested a money transfer","requested a money transfer"],"mail_money_tranfer_message_sent":["","transferred money","transferred money"],"mail_no_support":"Message not supported by your application.","mail_peer_profile_likes_replies_tooltip":"Likes and comments data is shown for the past 100 days","mail_pin_chat":"Pin to chat list","mail_recent_searches":"Recent searches","mail_recommend_block_action_find_friends":"Find by name","mail_recommend_block_action_import_google":"Import from Gmail","mail_recommend_block_action_import_ok":"Import from OK","mail_recommend_block_action_invite":"Invite by number","mail_recording_audio_several":["","is recording audio","are recording audio"],"mail_reject_mr_confirmation_text":"Are you sure you want to decline the chat invite?","mail_reject_mr_confirmation_title":"Decline invite","mail_restore":"Undo","mail_restored":"Message restored","mail_return_to_chat":"Return to chat","mail_return_to_vkcomgroup":"Join channel","mail_search_conversations_sep":"Chats","mail_search_dialogs_sep":"People and communities","mail_search_messages":"Messages","mail_search_only_messages":"Search your messages","mail_search_only_messages_comm":"Search in community messages","mail_send_message_error":"Error sending message","mail_settings":"Chat info","mail_source_info":"Со страницы: {link}<br>{info}","mail_sure_to_delete_all":"Are you sure you want to <b>delete your entire message history<\/b> with this user?<br><br>This <b>can&#39;t<\/b> be undone.","mail_typing_several":["","is typing","are typing"],"mail_unfollow_channel":"Leave","mail_unfollow_channel_confirmation":"Are you sure you want to <b>leave<\/b> this channel and <b>delete all messages<\/b>?","mail_unpin":"Unpin message","mail_unpin_chat":"Unpin from chat list","mail_unpin_text":"Are you sure you want to unpin this message? All chat members will see this change.","mail_unpin_title":"Unpin message","mail_unread_message":"Unread message","mail_vkcomgroup_leave_confirm":"If you unfollow, you will no longer receive new messages from this channel. You can re-follow at any time.","mail_vkcomgroup_settings":"Channel info","months_of":{"1":"January","2":"February","3":"March","4":"April","5":"May","6":"June","7":"July","8":"August","9":"September","10":"October","11":"November","12":"December"},"months_sm_of":{"1":"Jan","2":"Feb","3":"Mar","4":"Apr","5":"May","6":"Jun","7":"Jul","8":"Aug","9":"Sep","10":"Oct","11":"Nov","12":"Dec"},"reg0_change_mail":"Change email","reg0_error_bad_email":"Incorrect email.","text_N_symbols_remain":["","%s character remaining","%s characters remaining"],"text_exceeds_symbol_limit":["","You have exceeded the limit by %s character.","You have exceeded the limit by %s characters."],"votes_flex":["","vote","votes"],"notifications_native_common_error":"An error occurred while enabling notifications.","global_language_beta_version":"Beta version","join_code_failed":"<b>Code entered incorrectly too many times<\/b>.<br>Please try using a different phone number.","join_need_contacts":"Select country","join_need_email":"Enter email","join_need_school":"Select school","join_need_uni":"Select university","join_new_page_sure":"Please note that a number can only be linked to <b>one<\/b> VK account.<br>We only recommend creating a new account in case<br>the old account does <b>not belong to you<\/b>.","join_new_page_sure_submit":"Yes, <b>unlink<\/b> my number from the old account","join_new_page_sure_title":"Warning","join_no_sms":"Send code again","join_pass_tip":"Please create a <b>password<\/b> for your VK page.<br><br>Password example: <b>{password}<\/b>","join_pwd_level0":"Password too short","join_pwd_level1":"Password too weak","join_pwd_level2":"Weak password","join_pwd_level3":"Good password","join_pwd_level4":"Strong password","join_pwd_level5":"A password cannot contain spaces","join_resend_sms_time":"Resend SMS in %s","join_send_code_sms":"Send SMS","join_send_code_sms_time":"Send SMS in %s","join_sorry_code":"This code is just an example. Please enter the code you&#39;ll receive in the <b>message<\/b>.","join_sure_detach":"A profile is already linked to this phone number","join_tries_left":"Attempts remaining: <b>{count}<\/b>","join_wrong_code":"<b>Incorrect number<\/b>.<br>Please enter the code that you&#39;ve just received."});
addTemplates({"_":"_","stickers_sticker_url":"https:\/\/vk.com\/sticker\/1-%id%-%size%"});
window.cur = window.cur || {};
cur['emojiHintsSendLogHash']="a39f0049b60b3a3d70";
Index.initNew();Join.initIndexJoinForm({"from":"","bdateMonths":[[0,"Month"],[1,"January"],[2,"February"],[3,"March"],[4,"April"],[5,"May"],[6,"June"],[7,"July"],[8,"August"],[9,"September"],[10,"October"],[11,"November"],[12,"December"]],"bdateYears":[[0,"Year"],[2007,"2007"],[2006,"2006"],[2005,"2005"],[2004,"2004"],[2003,"2003"],[2002,"2002"],[2001,"2001"],[2000,"2000"],[1999,"1999"],[1998,"1998"],[1997,"1997"],[1996,"1996"],[1995,"1995"],[1994,"1994"],[1993,"1993"],[1992,"1992"],[1991,"1991"],[1990,"1990"],[1989,"1989"],[1988,"1988"],[1987,"1987"],[1986,"1986"],[1985,"1985"],[1984,"1984"],[1983,"1983"],[1982,"1982"],[1981,"1981"],[1980,"1980"],[1979,"1979"],[1978,"1978"],[1977,"1977"],[1976,"1976"],[1975,"1975"],[1974,"1974"],[1973,"1973"],[1972,"1972"],[1971,"1971"],[1970,"1970"],[1969,"1969"],[1968,"1968"],[1967,"1967"],[1966,"1966"],[1965,"1965"],[1964,"1964"],[1963,"1963"],[1962,"1962"],[1961,"1961"],[1960,"1960"],[1959,"1959"],[1958,"1958"],[1957,"1957"],[1956,"1956"],[1955,"1955"],[1954,"1954"],[1953,"1953"],[1952,"1952"],[1951,"1951"],[1950,"1950"],[1949,"1949"],[1948,"1948"],[1947,"1947"],[1946,"1946"],[1945,"1945"],[1944,"1944"],[1943,"1943"],[1942,"1942"],[1941,"1941"],[1940,"1940"],[1939,"1939"],[1938,"1938"],[1937,"1937"],[1936,"1936"],[1935,"1935"],[1934,"1934"],[1933,"1933"],[1932,"1932"],[1931,"1931"],[1930,"1930"],[1929,"1929"],[1928,"1928"],[1927,"1927"],[1926,"1926"],[1925,"1925"],[1924,"1924"],[1923,"1923"],[1922,"1922"],[1921,"1921"],[1920,"1920"],[1919,"1919"],[1918,"1918"],[1917,"1917"],[1916,"1916"],[1915,"1915"],[1914,"1914"],[1913,"1913"],[1912,"1912"],[1911,"1911"],[1910,"1910"],[1909,"1909"],[1908,"1908"],[1907,"1907"],[1906,"1906"],[1905,"1905"],[1904,"1904"],[1903,"1903"],[1902,"1902"]],"proceedAs":false,"fbApp":"128749580520227","fbState":"147fc842d5472ca7ed","fbLocale":"en_US"});
;(function (d, w) {
if (w.__dev) {
  return
}
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);;(function (d, w) {
if (w.__dev) {
  return;
}
if(!w._tns){w._tns = {}};
w._tns.tnsPixelSocdem = "13"
w._tns.tnsPixelType = "unauth"
})(document, window);
      window.curReady && window.curReady();
    }
  </script>
</body>

</html>
