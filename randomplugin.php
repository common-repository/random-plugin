<?php
/*
Plugin Name: Random plugin
Plugin URI: http://goldjaguar.ru/?page_id=101
Description: In the admin panel, in the upper right corner will show random plugins and a link to this plugin, where you can download it and read the detailed description of this plugin. The database has 360 plugins, they will be constantly replenished, within one month of planning to add all the plugins.
Author: Aleksey Rodionov
Version: 1.0.0
Author URI: http://goldjaguar.ru/
*/

function project_goldjaguar_from_zeleniy() {
	$lyrics = "(page) <a href='http://wordpress.org/extend/plugins/page2cat/'>Category Page</a>-Use pages as category archive header, or list some posts from a category into a post/page.
(page) <a href='http://wordpress.org/extend/plugins/enzymes/'>Enzymes</a>-Retrieve properties and custom fields of posts, pages, and authors, right into the visual editor of posts and pages, and everywhere else.
(page) <a href='http://wordpress.org/extend/plugins/nanowrimo-report-card/'>NaNoWriMo Report Card</a>-Plugin Url: <a href='http://davidized.com/plugins/nanorc/' rel='nofollow'>http://davidized.com/plugins/nanorc/</a> Author Url: <a href='http://davidized.com/' rel='nofollow'>http://davidized.com/</a> An easy way to keep track of your novel's progress for everyone to
(page) <a href='http://wordpress.org/extend/plugins/add-me-dichev/'>Add Me Dichev</a>-Renders social bookmark buttons after the post. Bulgarian social networks are included too. For the full networks list see the plugin details.
(page) <a href='http://wordpress.org/extend/plugins/drain-hole-1/'>Drain Hole</a>-Drain Hole is a centralized download manager with full monitoring, statistics, versioning, SVN support, and proper SEO download URLs (no nasty query p
(page) <a href='http://wordpress.org/extend/plugins/pageview/'>PageView</a>-Allows the insertion of code to display an external webpage within an iframe, along with a title and description.
(page) <a href='http://wordpress.org/extend/plugins/disclose-secret/'>Disclose-Secret</a>-Only shows WordPress articles to other users if the user meets certain access criteria.
(page) <a href='http://wordpress.org/extend/plugins/ajax-save-post/'>Ajax Post Save</a>-This plugin enables you to save any WordPress post/page with Ajax.
(page) <a href='http://wordpress.org/extend/plugins/templatedia/'>Templatedia</a>-Create and manage dynamic templates for use in posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/wp-last-posts/'>WP Last Posts</a>-Provides a template tag that displays the last few posts from your blog.
(page) <a href='http://wordpress.org/extend/plugins/templatedia-chess/'>Templatedia Chess</a>-Creates a new template in Templatedia for displaying chess moves.
(page) <a href='http://wordpress.org/extend/plugins/multi-pages-widget/'>Multi Pages widget</a>-MultiPages allows to easily organize your pages into your sidebar. You can have up to 9 widgets with subpages selection, exclusions and choose order..
(page) <a href='http://wordpress.org/extend/plugins/jump-to/'>Jump To</a>-Adds a drop-down listbox to the bottom of multi-page posts. The purpose of this box is to allow the user to jump directly to a named page, rather than
(page) <a href='http://wordpress.org/extend/plugins/google-ad-wrap/'>Google Ad Wrap</a>-Section Targeting is a way of embedding special tags inside HTML to give Google's omnipresent spider a better idea of what's important on your page
(page) <a href='http://wordpress.org/extend/plugins/order-pages/'>ShiftThis | Order Pages</a>-A handy plugin for re-arranging your page-order easily.
(page) <a href='http://wordpress.org/extend/plugins/livesig/'>LiveSig</a>-Adds a Custom Signature from MyLiveSignature at the bottom of every post.
(page) <a href='http://wordpress.org/extend/plugins/collapsing-objects/'>Collapsing Objects</a>-A plugin that puts a collapsible div in a post or a page.
(page) <a href='http://wordpress.org/extend/plugins/hs-tag-cloud/'>HS Tag Cloud</a>-With this plugin you are able to print out a tag cloud in a page or post.
(page) <a href='http://wordpress.org/extend/plugins/page-template-extended/'>Page Template Extended</a>-Create templates for a specific page by its ID - like categories. Subpages inherit templates from their parents.
(page) <a href='http://wordpress.org/extend/plugins/html-templates/'>HTML Templates</a>-Allows you to create small HTML templates to use inside your posts or pages. The templates can contain dynamic fields, wich you set the value when wri
(page) <a href='http://wordpress.org/extend/plugins/wp-live-chat/'>WP-Live-Chat</a>-Chat Meets Blog - A Love/Chat Relationship. An IRC web client for your blog.
(page) <a href='http://wordpress.org/extend/plugins/rbl-listtag/'>Rbl-listtag</a>-Version: 1.0.0 Display of the last comments or post filtered by categories or tag .
(page) <a href='http://wordpress.org/extend/plugins/show-my-pagerank/'>Show-My-PageRank</a>-Plugin which exposing your page rank to your blog/site readers. You can configure your page rank  anywhere in your blog
(page) <a href='http://wordpress.org/extend/plugins/restore-exact-time/'>Restore Exact Time</a>-Changes the date columns in the post and page interfaces to display exact times that a post or page was published.
(page) <a href='http://wordpress.org/extend/plugins/tell-a-friend/'>Tell a Friend</a>-Adds a 'Share This Post' button after each post. The share botton supports e-mail address book, social bookmarks and favorites.
(page) <a href='http://wordpress.org/extend/plugins/tags4page/'>tags4page</a>-This plugin allows you to insert tags to pages too and not only to posts.
(page) <a href='http://wordpress.org/extend/plugins/privateplus/'>Private Plus</a>-Allow the administrator to choose which groups can see private posts.
(page) <a href='http://wordpress.org/extend/plugins/sidepress/'>Sidepress</a>-Administering panel for the Sidepress script that displays last news from Wordpress into a static HTML page.
(page) <a href='http://wordpress.org/extend/plugins/shantz-wordpress-qotd/'>Shantz Wordpress QOTD</a>-Shantz WP QOTD is the coolest plugin to add quotes to your wordpress blog posts and sidebars in a few easy clicks.
(page) <a href='http://wordpress.org/extend/plugins/linked/'>Linked</a>-Automatically adds  tags to emails, urls, Post/Page/Category Titles and any other keywords you setup.
(page) <a href='http://wordpress.org/extend/plugins/seo-pagebar-21/'>SEO Pagebar 2 WordPress Plugin</a>-The plugin provides a more advanced SEO pagination for WordPress to be configured with several options.
(page) <a href='http://wordpress.org/extend/plugins/xavins-list-subpages/'>Xavin's List Subpages</a>-Adds a tag that you can use in your pages to display a list of it's subpages.
(page) <a href='http://wordpress.org/extend/plugins/zazzle-store-gallery/'>Zazzle Store Gallery</a>-Seamlessly integrate a Zazzle store gallery and sell a variety of custom products (t-shirts, mugs, hats, etc...).
(page) <a href='http://wordpress.org/extend/plugins/page-excerpt/'>Page Excerpt</a>-This plugin adds the same functionality of the excerpt feature in posts to pages.
(page) <a href='http://wordpress.org/extend/plugins/blog-linkit/'>WP_LinkTools</a>-Add your permalinks to Delicious. Synchronise you links with Delicious or another blog. Insert them into you posts. All done automatically.
(page) <a href='http://wordpress.org/extend/plugins/most-recent-visitors/'>Most Recent Visitors</a>-Show most recently visitors on your siderbar widget
(page) <a href='http://wordpress.org/extend/plugins/wp-post-banners/'>WP-Post-Banners</a>-WP-POST-BANNERS HAS BEEN RENAMED TO FEATPLUG. Please instead use (page) <a href='http://wordpress.org/extend/plugins/featplug' rel='nofollow'>http://wordpress.org/extend/plugins/featplug</a> and redownload the plugin
(page) <a href='http://wordpress.org/extend/plugins/allow-numeric-stubs/'>Allow Numeric Stubs</a>-Allows children Pages to have a stub that is only a number. Sacrifices the paging ability in Pages to accomplish it.
(page) <a href='http://wordpress.org/extend/plugins/nice-trailingslashit/'>Nice Trailingslashit</a>-The plugin will be allways add '/' at the permalink's end but the content(single) page's end.
(page) <a href='http://wordpress.org/extend/plugins/wp-contactme/'>WP_ContactMe</a>-WP_ContactMe is a free WordPress plug-in that provides you with a very configurable contact form. Allowing multiple subjects, user defined forms and a
(page) <a href='http://wordpress.org/extend/plugins/anyvar/'>AnyVar</a>-AnyVar is a simple search and replace plugin. It lets you add changeable variables (text snippets) to posts, sidebars, widgets, links &amp; themes.
(page) <a href='http://wordpress.org/extend/plugins/wp-deliciouspost/'>WP_DeliciousPost</a>-WP_DeliciousPost has been merged into WP_LinkTools, WP_DeliciousPost Will No longer be updated
(page) <a href='http://wordpress.org/extend/plugins/usertracker/'>UserTracker</a>-This plugin will let you track which pages your users who are logged in are viewing. It logs the username, ip, datetime, referer and url viewed.
(page) <a href='http://wordpress.org/extend/plugins/image-browser-extender/'>Image Browser Extender</a>-Extends the features of the rich text editor for Wordpress by adding a new button that will allow you to easily browse all you image attachments
(page) <a href='http://wordpress.org/extend/plugins/wp-addonchat/'>WP-AddonChat</a>-WP-AddonChat provides an easy and quick way to integrate AddonInteractive's AddonChat software into your WordPress install.
(page) <a href='http://wordpress.org/extend/plugins/blogshotr/'>BlogShotR</a>-Show the Commentators Blog Shot
(page) <a href='http://wordpress.org/extend/plugins/html-on-pages/'>.html on PAGES</a>-Appends .html to the URL of PAGES when using permalinks	
(page) <a href='http://wordpress.org/extend/plugins/vote-it/'>Vote It!</a>-Vote It! Buttons for Blogpostings. Set very simple a digg, sphinn or another social-news-button in your blogpost.
(page) <a href='http://wordpress.org/extend/plugins/last-viewed-posts/'>Last Viewed Posts</a>-This plugin displays the posts (and pages - if you want) that have been recently viewed by the visitor (single view). Data is saved in cookie for eac
(page) <a href='http://wordpress.org/extend/plugins/embed-iframe/'>Embed Iframe</a>-Allows the insertion of code to display an external webpage within an iframe.
(page) <a href='http://wordpress.org/extend/plugins/categories4page/'>categories4page</a>-This plugin allows you to insert categories to pages too and not only to posts.
(page) <a href='http://wordpress.org/extend/plugins/dewtube-video-player/'>DewTube</a>-DewTube Wordpress plugin - Insert DewTube (Flash Video Player) in posts/pages.
(page) <a href='http://wordpress.org/extend/plugins/featplug/'>FeatPlug</a>-Featplug is wordpress plugin that can mine your Wordpress site and generate 'featured' section using the found items.
(page) <a href='http://wordpress.org/extend/plugins/aws-easy-page-link/'>AWS Easy Page Link</a>-Using the External Link List feature of TinyMCE, this makes it easy to create a link to another page on your website.
(page) <a href='http://wordpress.org/extend/plugins/my-co2-campaign/'>Meine CO2 Kampagne</a>-'Meine CO2 Kampagne' widget can display the counter of your co2 campaign.
(page) <a href='http://wordpress.org/extend/plugins/count-posts/'>Count Posts</a>-Count Posts is a simple plugin that provides a template function to count posts, as well as filtering by category and over time in days. The function
(page) <a href='http://wordpress.org/extend/plugins/xavins-review-ratings/'>Xavin's Review Ratings</a>-Adds a shortcode tag [xrr rating=4/5] that displays a rating in one of several formats. Intended for sites doing reviews.
(page) <a href='http://wordpress.org/extend/plugins/password-protect-enhancement/'>Password Protect enhancement</a>-Enhance the password protection for posts and pages. Optional setting to display an excerpt, and change the current 'This post is password protected.
(page) <a href='http://wordpress.org/extend/plugins/jp-staticpagex/'>Static Page eXtended</a>-Inline PHP in posts and pages. Posts and pages can redirect based on category, id and title. Pages may be replaced by external php scripts. Pages and
(page) <a href='http://wordpress.org/extend/plugins/wp-extra-template-tags/'>WP Extra Template Tags</a>-This plugin provides Wordpress users with extra template tags. It can be used in themes or plugins.
(page) <a href='http://wordpress.org/extend/plugins/cimy-navigator/'>Cimy Navigator</a>-Display header and/or sidebar menu with pages or categories list.
(page) <a href='http://wordpress.org/extend/plugins/js-typograph-button/'>WP JavaScript Typograph Button</a>-Russian typography for Wordpress. Javascript version, add button to visual editor.
(page) <a href='http://wordpress.org/extend/plugins/different-posts-per-page/'>Different Posts Per Page</a>-Show different number of posts in home, category, search or archive page.
(page) <a href='http://wordpress.org/extend/plugins/postrank/'>PostRank</a>-The ranking of your posts. Visit Jeeker for usage information and project news.
(page) <a href='http://wordpress.org/extend/plugins/socibookcom-christmas-social-bookmarking-button/'>Socibookcom Christmas Social Bookmarking Button</a>-They are 3 specialy designed buttons for your site or blog from socibook.com. Put the button to your blog. Visit plugin page.
(page) <a href='http://wordpress.org/extend/plugins/wp-vidavee-film-manager/'>WP-Vidavee</a>-Easily upload and publish video in your WordPress blog.
(page) <a href='http://wordpress.org/extend/plugins/posttabs/'>postTabs</a>-postTabs allows you to easily split your post/page content into Tabs that will be shown to your visitors
(page) <a href='http://wordpress.org/extend/plugins/top-social-bookmarking-buttons/'>Top Social Bookmarking Buttons</a>-The plugin contains Top Social Bookmarking buttons on the NET. Post all your content to the social bookmarking sites to get traffic for your website o
(page) <a href='http://wordpress.org/extend/plugins/smooth-scrolling-links-ssl/'>Smooth Scroll Links [SSL]</a>-This plugin will give special smooth scroll effect to your **BACK TO TOP**, **TOP TO BOTTOM** like links. It also has capacity to add such links in yo
(page) <a href='http://wordpress.org/extend/plugins/singsong/'>SingSong</a>-Add a Background sound or music to each section of your Blog.
(page) <a href='http://wordpress.org/extend/plugins/wpsleep/'>wpSLEEP</a>-wpSLEEP puts text parts delayed offline.
(page) <a href='http://wordpress.org/extend/plugins/smartcounter/'>SmartCounter</a>-SmartCounter is a simple counter which can track downloads, clicks or hits.
(page) <a href='http://wordpress.org/extend/plugins/dewplayer-flash-mp3-player/'>Dewplayer</a>-Dewplayer Wordpress plugin - Insert Dewplayer (Flash Mp3 Player) in posts/pages.
(page) <a href='http://wordpress.org/extend/plugins/ganbatte/'>Ganbatte</a>-Simple games to aid the process of learning the Japanese language
(page) <a href='http://wordpress.org/extend/plugins/albumize/'>Albumize</a>-This plugin organizes different WordPress 2.5+ galleries into albums for easy display and navigation by using parent/child pages and custom fields.
(page) <a href='http://wordpress.org/extend/plugins/ps-auto-sitemap/'>PS Auto Sitemap</a>-Auto generator of a customizable and designed sitemap page.
(page) <a href='http://wordpress.org/extend/plugins/hackadelic-series/'>Hackadelic Series</a>-Lightweight, complete series management solution for WordPress.
(page) <a href='http://wordpress.org/extend/plugins/tdd-recent-posts/'>TDD Recent Posts</a>-Simple widget that displays the recent posts with a short content preview. Control the number returned and length of the content preview
(page) <a href='http://wordpress.org/extend/plugins/community-cloud/'>Community Cloud Plugin</a>-This plugin searches your wordpress database and displays a 'tag cloud' of all the people in your community who have contributed to our blog by commen
(page) <a href='http://wordpress.org/extend/plugins/absolute-links/'>Absolute Links</a>-Prevents dead links between any post or page by guaranteeing that all links always point to the current addresses (permlinks).
(page) <a href='http://wordpress.org/extend/plugins/wp-background-tile/'>WP Background Tile</a>-Insert a tiled background image into your wordpress template
(page) <a href='http://wordpress.org/extend/plugins/ufave-social-bookmarking-widget/'>uFave Social Bookmarking Widget</a>-----------------------------------------------------------------------
(page) <a href='http://wordpress.org/extend/plugins/indigestion/'>Indigestion</a>-Generates a daily post digest from many customisable Feed sources.
(page) <a href='http://wordpress.org/extend/plugins/embedded-slideshow/'>Embedded Slideshow</a>-This plugin help you to insert a Picasa embedded slideshow to your post or page easily.
(page) <a href='http://wordpress.org/extend/plugins/amazon-s3-url-generator/'>Amazon S3 Expiring URL Generator</a>-Generate a Amazon S3 expiring URL based on your key and secret. Prevents hotlinking to your media.
(page) <a href='http://wordpress.org/extend/plugins/sb-child-list/'>SB Child List</a>-A Plugin to introduce some shortcodes to use on parent pages which give dynamic information on it's children
(page) <a href='http://wordpress.org/extend/plugins/private-network/'>Private Network</a>-Allows Administrators at different WP installations, for example alice.com and bob.com, to share remotely their private and public posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/add-to-your-socibook-social-bookmarking-button/'>Add to your Socibook.com Social Bookmarking Button</a>-This plugin puts a social bookmarking button on every post so that user can add content to socibook.com. When a post from your site is added to socibo
(page) <a href='http://wordpress.org/extend/plugins/wpnamedusers/'>wpNamedUsers</a>-Intranet / Extranet plugin for Wordpress that allows users to specify which users and/or groups can access specific posts or pages.
(page) <a href='http://wordpress.org/extend/plugins/winex/'>WineX</a>-A lightweight script used to display the contents of your CellarTracker cellar on your website.
(page) <a href='http://wordpress.org/extend/plugins/index-tag-page/'>Index tag page</a>-With this plugin, you will be able to display an index with all your tags, sort alphabeticaly.
(page) <a href='http://wordpress.org/extend/plugins/pagerestrict/'>Page Restrict</a>-Restrict certain pages to logged in users.
(page) <a href='http://wordpress.org/extend/plugins/featured-content-gallery/'>Featured Content Gallery</a>-Used to create a customizable rotating image gallery anywhere within your WordPress site.
(page) <a href='http://wordpress.org/extend/plugins/snipt-embed/'>Snipt.net code embed plugin</a>-Easily embed Snipt.net code snipts in your posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/add-drafts/'>Add drafts</a>-Displays a box with the last 10 recent drafts in the edit post page.
(page) <a href='http://wordpress.org/extend/plugins/bbcode-annotator/'>Annotation Plugin</a>-Creates an annotation link to take out 'unneeded' text.	
(page) <a href='http://wordpress.org/extend/plugins/p2pconverter/'>p2pConverter</a>-This plugin allows you to easily convert a post to a page and vice versa through an easy to use interface. You may either click on your Manage tab in
(page) <a href='http://wordpress.org/extend/plugins/wp-categories-and-posts/'>WP Categories and Posts</a>-This plugin adds in a template tag you can use to display categories and sub categories and the posts underneath those categories.
(page) <a href='http://wordpress.org/extend/plugins/blog-directory-blogville/'>blogville-directory-plugin</a>-Blogville Blog Direcotry Plugin updates your blog listing at the blogville blog directory with the date your blog was last updated.
(page) <a href='http://wordpress.org/extend/plugins/say-hello/'>Say Hello</a>-Say Hello displays a 'Hello!' in randomly selected languages.
(page) <a href='http://wordpress.org/extend/plugins/page-link-manager/'>Page Link Manager</a>-Adds an administration panel that allows you to pick which page links are included in your site's navigation. If your theme uses widgets, Page Link Ma
(page) <a href='http://wordpress.org/extend/plugins/wp-snap/'>WP-SNAP!</a>-WP-SNAP! (WordPress System for Navigating Alphabetized Posts) creates an user interface for navigating alphabetized post titles.
(page) <a href='http://wordpress.org/extend/plugins/pagemash/'>pageMash &gt; Page Management</a>-Manage your multitude of pages with pageMash's slick drag-and-drop style, ajax interface. Allows for quick sorting, hiding and organising of page pare
(page) <a href='http://wordpress.org/extend/plugins/phpinclusion/'>PHPInclusion</a>-PHP File Inclusion in posts &amp; pages using require, include or similar statements.
(page) <a href='http://wordpress.org/extend/plugins/shantz-wp-prefix-suffix/'>Shantz Wordpress Prefix Suffix</a>-Shantz WP Prefix Suffix is a light plugin to quickly add text/htm/css before and/or after your posts and/or pages.
(page) <a href='http://wordpress.org/extend/plugins/wp-typograph-full/'>WP Typograph Full</a>-Russian typography for Wordpress. Full version with settings.
(page) <a href='http://wordpress.org/extend/plugins/wp-russian-typograph/'>WP Typograph Lite</a>-Russian typography for Wordpress. Lite version.
(page) <a href='http://wordpress.org/extend/plugins/remove-link-from-current-page/'>Remove Link to Current Page</a>-Removes the link from the current page in wp_list_pages()
(page) <a href='http://wordpress.org/extend/plugins/custom-shortcodes/'>Custom Shortcodes</a>-Manage custom fields using the insert shortcodes or HTML comment in text of post.
(page) <a href='http://wordpress.org/extend/plugins/post-to-post-links-ii/'>Post-to-Post Links II</a>-Using a shortcode, easily link to another post, page, or category in your WordPress blog.
(page) <a href='http://wordpress.org/extend/plugins/mm-breaking-news/'>MM-Breaking News</a>-Displays lists of posts from selected categories. You can select how many different lists you want, sort posts by date or random.
(page) <a href='http://wordpress.org/extend/plugins/wp-cms-post-control/'>WP-CMS Post Control</a>-Complete control over write post/pages admin - hide all unwanted items, disable flash upload, post revisions, autosave &amp; add a personal message.
(page) <a href='http://wordpress.org/extend/plugins/wishads-for-cafepress-search/'>Wishads for CafePress Search</a>-Accesses the CafePress API via shortcodes to display millions of products based on search terms and product types. PHP5 is required.
(page) <a href='http://wordpress.org/extend/plugins/quicktables/'>QuickTables</a>-Quickly add tables to any post or page using simple shortcode tags.
(page) <a href='http://wordpress.org/extend/plugins/thickbox-content/'>ThickBox Content</a>-ThickBox Content provides a quick and easy way to insert any type of content into a thickbox (via page/post editor). It supports thickbox iFrame, Ajax
(page) <a href='http://wordpress.org/extend/plugins/quote-this/'>Quote This</a>-Allows the user to call random quotes with the quote_this() function, [quote-this] shortcode, or Quote This widget.
(page) <a href='http://wordpress.org/extend/plugins/fast-tube/'>Fast Tube</a>-Fast and easy way to insert videos from YouTube right into your WordPress blog posts or pages.
(page) <a href='http://wordpress.org/extend/plugins/singlecat/'>SingleCat</a>-Display a specified number of posts from a category using shortcodes.
(page) <a href='http://wordpress.org/extend/plugins/authors-index-page/'>Index Authors page</a>-With this plugin, you will be able to display an index with all your authorss, sort alphabeticaly.
(page) <a href='http://wordpress.org/extend/plugins/edit-page-list-design/'>Edit Page, List Design</a>-An alternative 'Edit Page' list design. Makes it easier to get an overview of the page list. Just activate, nothing else.
(page) <a href='http://wordpress.org/extend/plugins/smscoin-r-key/'>SMS paid content/Ïðîäàæà êîíòåíòà çà ñìñ - SmsCoin R-Key</a>-Selling content of blog for the SMS message. This Plugin allows you to hide any content on your blog, that will be visible only after user sends sms m
(page) <a href='http://wordpress.org/extend/plugins/no-frames/'>No Frames</a>-Frees your site from browser frames.
(page) <a href='http://wordpress.org/extend/plugins/must-read-posts/'>Must Read Posts</a>-Retrieves posts and pages with a certain custom field (e.g. to permanently show your most recommended posts in a widget) and displays them in a list.
(page) <a href='http://wordpress.org/extend/plugins/wordics-page-summary/'>Wordics: Page Summary</a>-Wordics creates colorful word clouds from the text in your blog. They are summaries of your blog posts in the way search engines would do them.
(page) <a href='http://wordpress.org/extend/plugins/compositepost/'>Composite Post</a>-Compose a post or page with other posts or pages.
(page) <a href='http://wordpress.org/extend/plugins/yank-widget/'>Yank Widget</a>-Yank Widget allows you to place page content into sidebar widgets for different pages and posts.
(page) <a href='http://wordpress.org/extend/plugins/autodownload/'>Autodownload</a>-Autodownload enables you to link to files in a directory in your posts and pages without interacting with WordPress.
(page) <a href='http://wordpress.org/extend/plugins/wishads-for-cafepress-store/'>Wishads for CafePress Store</a>-Accesses the CafePress API via shortcodes to display products from specific store sections. Site hosting needs PHP5 with XMLDOM enabled.
(page) <a href='http://wordpress.org/extend/plugins/evanto-marketplace-feeds/'>Envato Marketplace Feeds</a>-Lets you add feeds from the Envato Marketplaces to your blog. Requires PHP 5+ to run.
(page) <a href='http://wordpress.org/extend/plugins/addmarx/'>Addmarx - Bookmark/Share/Email Dropdown</a>-Let your visitors bookmark, email, share and link to your pages.  Get this fast, customizable dropdown button.
(page) <a href='http://wordpress.org/extend/plugins/xslprocessor/'>Xslt Processor</a>-The plugin aims to allow XML document transformed through XSLT to be outputted in a WordPress Page. It also now allows to pass parameters to the XSL d
(page) <a href='http://wordpress.org/extend/plugins/wp-nofollowpost/'>WP-NofollowPost</a>-Simply adds a nofollow tag to all links within a post.
(page) <a href='http://wordpress.org/extend/plugins/yd-zoomify/'>YD Zoomify</a>-Allows for simple insertion of a Zoomify zoomable web image in a post content, page or template.
(page) <a href='http://wordpress.org/extend/plugins/wp-list-sub-pages/'>wp_list_sub_pages</a>-wp_list_sub_pages will list only pages within the same category (top-level parent) as the current page.
(page) <a href='http://wordpress.org/extend/plugins/parteibuch-aggregator/'>Parteibuch Aggregator</a>-Easy to use RSS aggregator for pages and sidebars of your blog with search capability.
(page) <a href='http://wordpress.org/extend/plugins/is-page-or-ancestor/'>Is Page or Ancestor</a>-Recursively test if the page you pass into this function is the current page or ancestor of that page.
(page) <a href='http://wordpress.org/extend/plugins/real-estate/'>Real Estate</a>-Real Estate plugin enables you to use wordpress as a property listings platform, and to have simple and accessible image galleries in your posts.
(page) <a href='http://wordpress.org/extend/plugins/usecurex/'>USecureX</a>-An easy to use script that allows you to create user groups and then manage their acess to specific pages within your website.
(page) <a href='http://wordpress.org/extend/plugins/template-tag-shortcodes/'>Template Tag Shortcodes</a>-A plugin that turns many of the WP template tags into shortcodes (40+ shortcodes).
(page) <a href='http://wordpress.org/extend/plugins/pages-autolink/'>Pages Autolink</a>-Pages Autolink automatically turns page names in posts and pages in links to the corresponding page URLs. Keeps the original words case in text.
(page) <a href='http://wordpress.org/extend/plugins/simply-show-ids/'>Simply Show IDs</a>-Simply shows the ID of Posts, Pages, Media, Links, Categories, Tags and Users in the admin tables for easy access.
(page) <a href='http://wordpress.org/extend/plugins/wp-pagenavi/'>WP-PageNavi</a>-Adds a more advanced paging navigation your WordPress blog.
(page) <a href='http://wordpress.org/extend/plugins/wp-commentnavi/'>WP-CommentNavi</a>-Adds a more advanced paging navigation for your comments to your WordPress 2.7 and above blog.
(page) <a href='http://wordpress.org/extend/plugins/tidy-up/'>Tidy Up</a>-This plugin provides the ability to run HTML Tidy through all your posts, pages, and comments, generating a report on just how dirty your code is.
(page) <a href='http://wordpress.org/extend/plugins/drain-hole/'>Drain Hole</a>-Drain Hole is a centralized download manager with full monitoring, statistics, versioning, SVN support, and proper SEO download URLs (no nasty query p
(page) <a href='http://wordpress.org/extend/plugins/sniplets/'>Sniplets</a>-Sniplets is a generic text insertion plugin.  Use it to manually or automatically insert data, PHP, syntax highlight, and almost anything else!
(page) <a href='http://wordpress.org/extend/plugins/mass-page-remover/'>Mass Page Remover</a>-Mass Page Remover makes it easy to remove multiple pages at once.
(page) <a href='http://wordpress.org/extend/plugins/pjw-query-child-of/'>PJW Query Child Of</a>-Allows you to use query_posts to list the children of a page.
(page) <a href='http://wordpress.org/extend/plugins/bookmark-me/'>Bookmark Me</a>-Bookmark Me is a plugin to add bookmark buttons (even non english bookmark sites) to your post or page.
(page) <a href='http://wordpress.org/extend/plugins/spreadx/'>SpreadX</a>-A very easy way to get your site onto Digg, Stumble, Del.icio.us, Slashdot, Twitter, Mixx, Dzone, Sphinn, Google, and Technorati.  It is a very easy w
(page) <a href='http://wordpress.org/extend/plugins/allowcomments/'>Allow Comments to Old Posts</a>-Allow comments to posts with custom field 'allow_comments' even if option 'close comments to old posts' is on.
(page) <a href='http://wordpress.org/extend/plugins/query-posts/'>Query Posts</a>-A WordPress widget that gives you unlimited control over showing posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/postlists/'>PostLists</a>-This WordPress plugin provides placeholders for configurable dynamic lists of posts. The placeholders can be used in posts, pages or widgets, and will
(page) <a href='http://wordpress.org/extend/plugins/tags2keywords/'>Tags2Keywords</a>-The plugin automatically adds keywords in heading from tags.
(page) <a href='http://wordpress.org/extend/plugins/introduce-you/'>Introduce You</a>-Allows you to introduce individuals, one per page
(page) <a href='http://wordpress.org/extend/plugins/remove-admin-meta-boxes/'>Remove Admin Meta Boxes</a>-This plugin allows you to remove selectively the various panels (or meta-boxes) within the post/page screens.
(page) <a href='http://wordpress.org/extend/plugins/wp-copyprotect/'>WP-CopyProtect [Protect your posts]</a>-Protect your blog content from getting copied. A simple plug-in developed to stop the Copy cats
(page) <a href='http://wordpress.org/extend/plugins/tagforme/'>TagFor.Me</a>-TagFor.Me is a unique service that allows you to inform the world about the changes of your personal status.
(page) <a href='http://wordpress.org/extend/plugins/quotmarks-replacer/'>Quotmarks Replacer</a>-Quotmarks Replacer is a plugin disables wptexturize founction that keeps all quotation marks and suspension points in half-width form.
(page) <a href='http://wordpress.org/extend/plugins/pagespot/'>PageSpot</a>-PageSpot facilitates more complex layout options for Pages, and dynamically assignable sidebar content on a per-Page basis.
(page) <a href='http://wordpress.org/extend/plugins/ple-repeat/'>PostLists-Extension Repeat</a>-With this extension for the WordPress plugin PostLists PostLists-lists can be configured to be repeated for each category, tag, author or postparent.
(page) <a href='http://wordpress.org/extend/plugins/ple-ec3/'>PostLists-Extension EC3</a>-This PostLists Extension provides orderby options, conditions and placeholders for the events created with Event Calendar 3 to be used for each post w
(page) <a href='http://wordpress.org/extend/plugins/media2layout/'>Media2Layout</a>-This plugin facilitates the dynamic inclusion, on a per-Page basis, of media library artwork into predefined places in your site's theme.
(page) <a href='http://wordpress.org/extend/plugins/article2pdf/'>article2pdf</a>-Article2pdf let your visitors download a post as PDF file: images, formats, lists, tables included. You can use a PDF as template file and much more.
(page) <a href='http://wordpress.org/extend/plugins/ajaxify-faqtastic/'>AJAXify FAQ-Tastic</a>-Used to add AJAX open/close effects to the FAQ-Tastic WordPress plugin.
(page) <a href='http://wordpress.org/extend/plugins/subpage-view/'>Subpage View</a>-A plugin for showing subpages on a given page. Insert shortcode into MCE and a list of subpages will be shown.
(page) <a href='http://wordpress.org/extend/plugins/twitterwidget/'>TwitterWidget</a>-Displays your Twitter timeline in the sidebar of your blog. The plugin is widget ready and comes with many configuration options!
(page) <a href='http://wordpress.org/extend/plugins/alexarank/'>AlexaRank</a>-Displays the Alexa traffic rank in the sidebar of your blog via widget interface or anywhere else via function call.
(page) <a href='http://wordpress.org/extend/plugins/get-custom-field-values/'>Get Custom Field Values</a>-Version: 3.0.1 Use widgets or template tags to easily retrieve and control the display of any custom field values/meta data for posts or pages.
(page) <a href='http://wordpress.org/extend/plugins/side-content/'>Side Content</a>-Side Content enables you to create widgets which have different content on different pages.
(page) <a href='http://wordpress.org/extend/plugins/pagerank/'>PageRank</a>-Displays Google PageRank in the sidebar of your blog via widget interface or anywhere else via function call.
(page) <a href='http://wordpress.org/extend/plugins/flash-hangman-game/'>Flash Hangman Game</a>-A cool flash hangman game for your blog. Just create a new post or page and enter the tag [HANGMAN] .
(page) <a href='http://wordpress.org/extend/plugins/twittergrid/'>TwitterGrid</a>-Displays the Twitter-Images of all your friends as a mosaic in the sidebar of your blog. The plugin is widget ready and comes with many configuration
(page) <a href='http://wordpress.org/extend/plugins/recentcomments/'>RecentComments</a>-This plugin allows you to show the latest comments, pingbacks or trackbacks in the sidebar of your blog or anywhere else. The plugin comes with widget
(page) <a href='http://wordpress.org/extend/plugins/wp-page-numbers/'>WP Page Numbers</a>-A simple paging navigation plugin for users and search engines. Instead of next and previous page it shows numbers and arrows. Settings available.
(page) <a href='http://wordpress.org/extend/plugins/search-regex/'>Search Regex</a>-Search Regex adds a powerful set of search and replace functions to WordPress that go beyond the standard searching capabilities, with full regex supp
(page) <a href='http://wordpress.org/extend/plugins/wp-meteo3d-widget/'>WP_Meteo3D Widget</a>-With WP_Meteo3D Widget you can display weather near real time conditions for over 200 cities in a 3D earth environment.
(page) <a href='http://wordpress.org/extend/plugins/you-can-javascript/'>You Can Javascript</a>-Disables KSES HTML/XHTML filter so trusted users can use Javascript within any body content. Works for WordPress and WordPress MU.
(page) <a href='http://wordpress.org/extend/plugins/gravatargrid/'>GravatarGrid</a>-Displays the Gravatars of all your commenters as a nice mosaic in the sidebar of your blog. The plugin is widget ready and comes with many configurati
(page) <a href='http://wordpress.org/extend/plugins/ple-navigation/'>PostLists-Extension Navigation</a>-With this extension for the WordPress plugin PostLists it is possible to add next-/prev- navigation links to a PostLists list. AJAX-Support.
(page) <a href='http://wordpress.org/extend/plugins/gliffy-plugin-for-wordpress/'>Gliffy for WordPress</a>-The Gliffy plugin allows you to create diagrams and insert them into your posts or pages. Draw all kinds of diagrams: flowcharts, UI mockups, UML, etc
(page) <a href='http://wordpress.org/extend/plugins/wp-update-message/'>WP Update Message</a>-Add a short note about the latest changes in the current post or page.
(page) <a href='http://wordpress.org/extend/plugins/wp-digg-this/'>WP Digg This</a>-Provides an easy way to selectively add Digg button to your posts. Use 'digg' = '1' custom field in the post to promote it.
(page) <a href='http://wordpress.org/extend/plugins/dtabs/'>dTabs</a>-Adds a new template tag to output user controlled dynamic tabs and drop down menus for posts, pages, categories, archives, and bookmarks.
(page) <a href='http://wordpress.org/extend/plugins/search123/'>Search123</a>-Search123 is a Wordpress plugin for managing Search123 ads on your blog. The appearance of the ads (color, font and font size) can be customised.
(page) <a href='http://wordpress.org/extend/plugins/page-style/'>Page Style</a>-Allow pages/categories to have different styles by adding a CSS Class (the Page Name or Category/Tag Slug) to the BODY
(page) <a href='http://wordpress.org/extend/plugins/wppageflip/'>WP PageFlip Lite</a>-Manage all your Page Flips ! Add your pages, reorganize them and start browsing your catalogs. Based on Dynamic Page Flip V2. A PRO version with enhan
(page) <a href='http://wordpress.org/extend/plugins/bulk-delete/'>Bulk Delete</a>-Bulk delete posts from selected categories or tags
(page) <a href='http://wordpress.org/extend/plugins/statbadge/'>Statbadge</a>-Statbadge displays selected informations like post count, number of comments, pagerank, alexa ranking and many more in the sidebar of your blog.
(page) <a href='http://wordpress.org/extend/plugins/rankingbadge/'>RankingBadge</a>-RankingBadge displays ranking information from major sources such as Google (PageRank), Alexa (Alexa traffic Rank) and Technorati in the sidebar of yo
(page) <a href='http://wordpress.org/extend/plugins/aphorismus/'>Aphorismus</a>-The plug-in allows to deduce the random text block (aphorism) on pages, posts or sidebar. Plugin have the widget.
(page) <a href='http://wordpress.org/extend/plugins/custom-page-extensions/'>Custom Page Extensions</a>-Allows you to add a custom extension to your page URLs. This only affects pages created under the Pages menu and not your posts, category or tag URLs.
(page) <a href='http://wordpress.org/extend/plugins/ajax-page-loader-15/'>AJAX Page Loader 1.5</a>-AJAX Page Loader will load posts, pages, etc. without reloading entire page.
(page) <a href='http://wordpress.org/extend/plugins/user-access-manager/'>User Access Manager</a>-With the 'User Access Manager'-plugin you can manage the access to your posts, pages and files.
(page) <a href='http://wordpress.org/extend/plugins/wp-ds-faq/'>WP DS FAQ</a>-WP DS FAQ plugin is just a simple FAQ pages management tool for your web site.
(page) <a href='http://wordpress.org/extend/plugins/wp-no-format/'>WP-No-Format</a>-This plugin lets you prevent Wordpress from modifying the HTML written code.
(page) <a href='http://wordpress.org/extend/plugins/adsense-deluxe-revived/'>Adsense Deluxe Revived</a>-Display your google adsense ads or Yahoo Publisher Network code in to your posts or page on the fly.
(page) <a href='http://wordpress.org/extend/plugins/popupper-v10/'>Popupper</a>-Popupper is a plugin that enables a blogger to add popups of images and text into their posts.
(page) <a href='http://wordpress.org/extend/plugins/flash-fader-revived/'>Flash Fader Revived</a>-This plugin allows you to put a flash slideshow on your post, page and sidebar. Simply adjust some settings and upload image, sildeshow will appear ju
(page) <a href='http://wordpress.org/extend/plugins/flickr-picture-backup/'>flickr picture backup</a>-Backup flickr's picture which in page/post External links to flickr's picture.you can change the external links of flickr's picture to internal links.
(page) <a href='http://wordpress.org/extend/plugins/advanced-fancybox/'>Advanced Fancybox</a>-Fancybox (lightbox) fully copatible for wordpress.
(page) <a href='http://wordpress.org/extend/plugins/gigya-wildfire-for-wordpress/'>Gigya Wildfire for WordPress</a>-This plugin integrate the Gigya Wildfire bookmarking service into your blog posts quickly and easily.
(page) <a href='http://wordpress.org/extend/plugins/redirector/'>Redirector</a>-Redirect a page to an URL
(page) <a href='http://wordpress.org/extend/plugins/replace/'>re.place</a>-re.place adds content filter wich searches in posts for specified patterns (regular expressions) and replaces matches found with specified strings.
(page) <a href='http://wordpress.org/extend/plugins/wp-easyarchives/'>WP-EasyArchives</a>-Display your archive tree that's search engine friendly on custom page.
(page) <a href='http://wordpress.org/extend/plugins/fp-first-sentence-highlighter/'>FunkyPress First Sentence Highlighter</a>-Adds a new Template Tag that highlights the first sentence in a string with a specified CSS style. Works well with get_the_content().
(page) <a href='http://wordpress.org/extend/plugins/social-media-page/'>Social Media Page</a>-The Social Media Page Wordpress plugin will add a list of links to your social media profiles on a page or post of your choice.
(page) <a href='http://wordpress.org/extend/plugins/adsense-immediately/'>AdSense Immediately!</a>-AdSense Immediately! is a simple plugin to ad adsense ads into the body of your content. It can add one, two or three adsense block to your article bo
(page) <a href='http://wordpress.org/extend/plugins/styled-pagination/'>Styled Pagination</a>-Add simple pagination to your site with images and display Text (PAGE 1 OF 21)
(page) <a href='http://wordpress.org/extend/plugins/pagelist/'>pageList</a>-Adds paging navigation your WordPress blog.
(page) <a href='http://wordpress.org/extend/plugins/page-links-to/'>Page Links To</a>-Lets you make a WordPress page or post link to a URL of your choosing, instead of its WordPress post or page.
(page) <a href='http://wordpress.org/extend/plugins/random-image/'>Random Image</a>-This plugin displays random images in the sidebar, posts, or any other location in WordPress
(page) <a href='http://wordpress.org/extend/plugins/resume-extended/'>Resume Extended</a>-Create and maintain your resume from within wordpress.
(page) <a href='http://wordpress.org/extend/plugins/feed-layout/'>Feed Layout</a>-Feed Layout lets to modify the feed contents adding headers, footers, copyright notices.
(page) <a href='http://wordpress.org/extend/plugins/pagebar/'>pagebar</a>-Pagebar adds a nice page bar to your blog posts, multipaged posts and paged comments.
(page) <a href='http://wordpress.org/extend/plugins/wp-doubanshow/'>WP-DoubanShow</a>-Show your douban's collections and recommendations in a page.
(page) <a href='http://wordpress.org/extend/plugins/bsuite/'>bSuite</a>-A suite of tools used to help surface interesting and popular stories as well as improve WordPress' CMS capabilities as an application platform.
(page) <a href='http://wordpress.org/extend/plugins/wp-gmaps2/'>WP_GMaps2</a>-This plugin allows an easy integration of Google Maps on your pages or posts.
(page) <a href='http://wordpress.org/extend/plugins/socialize-this/'>Socialize This</a>-Adds social icons to your blog posts. It also can update your twitter status when you publish a post.
(page) <a href='http://wordpress.org/extend/plugins/outbound-links/'>Outbound Links</a>-Forces all outbund link to open on a new window. Track outbound link clicks with Google Analytics.
(page) <a href='http://wordpress.org/extend/plugins/oas-short-urls/'>OAS Short URLs</a>-OAS Short URLs is an internal link shortening service which uses the unique ID associated with each post/page as the reference.
(page) <a href='http://wordpress.org/extend/plugins/role-scoper/'>Role Scoper</a>-CMS-like permissions for reading and editing. Content-specific restrictions and roles supplement/override WordPress roles. User groups optional.
(page) <a href='http://wordpress.org/extend/plugins/tweelow/'>Tweelow Plugin</a>-Simple plugin that displays count of your twitter followers
(page) <a href='http://wordpress.org/extend/plugins/post-layout/'>Post Layout</a>-Total control of your posts layout: adds code (Google AdSense, ...) before, after and in the middle of a post or anywhere with a block short tag.
(page) <a href='http://wordpress.org/extend/plugins/header-footer/'>Header-Footer</a>-Header and Footer plugin let you to add html code to the header and to the footer.
(page) <a href='http://wordpress.org/extend/plugins/affiliate-image-tracker/'>Affiliate Image Tracker</a>-With this plugin you had the power to easily place your banners in any position  you want to on your blog, you could also track your Affiliate banners
(page) <a href='http://wordpress.org/extend/plugins/next-page/'>Next Page</a>-This plugin provides shortcodes and template tags for next/previous navigation in pages.
(page) <a href='http://wordpress.org/extend/plugins/amazon-widgets-shortcodes/'>Amazon Widgets Shortcodes</a>-Keep your time and save your money with these Amazon widgets shortcodes. Standard compliants, easy to use and so on !
(page) <a href='http://wordpress.org/extend/plugins/cleanup-wordpress/'>Wordpress Cleanup</a>-Clean your wordpresss blog database from unused data like spam comments, revisions for post and pages
(page) <a href='http://wordpress.org/extend/plugins/wordpress-gallery-page-flip/'>Wordpress Gallery Page Flip</a>-Wordpress Gallery plugin helps you to create Image Gallery with Page Flip effects on your blog.
(page) <a href='http://wordpress.org/extend/plugins/nstatistics/'>nStatistics</a>-First statistics plugin.
(page) <a href='http://wordpress.org/extend/plugins/connections/'>Connections</a>-Connections is a simple to use addressbook or business directory that is highly customizable.
(page) <a href='http://wordpress.org/extend/plugins/wp-partner/'>WP-Partner</a>-The purpose of this plugin is to add the ability to output a list of link categories and a complete list of links with notes and descriptions.
(page) <a href='http://wordpress.org/extend/plugins/wp-simpleviewer/'>WP-SimpleViewer</a>-Add SimpleViewer Flash image galleries to your posts and pages. Easy to use and several options to make it fit your needs.
(page) <a href='http://wordpress.org/extend/plugins/headspace2/'>HeadSpace2 SEO</a>-Controls almost every aspect of your site's meta-data, including advanced tagging, Analytics, and dozens of plugins.  The best WordPress SEO solution!
(page) <a href='http://wordpress.org/extend/plugins/wp-paginate/'>WP-Paginate</a>-WP-Paginate is a simple and flexible pagination plugin which provides users with better navigation on your WordPress site.
(page) <a href='http://wordpress.org/extend/plugins/quick-pagepost-redirect-plugin/'>Quick Page/Post Redirect</a>-Redirect Pages/Posts to another page/post or external URL. Adds edit box to admin edit so user can specify the redirect Location and type.
(page) <a href='http://wordpress.org/extend/plugins/reusables/'>WordPress Reusables</a>-Manage content more efficiently through the use of content pieces or reusables.
(page) <a href='http://wordpress.org/extend/plugins/post-snippets/'>Post Snippets</a>-Store snippets of HTML code or reoccurring text that you often use in your posts. Custom variables can be used.
(page) <a href='http://wordpress.org/extend/plugins/search-unleashed/'>Search Unleashed</a>-Advanced WordPress search with wildcards, highlighting, log, and ability to search all post data. Now with Lucene!
(page) <a href='http://wordpress.org/extend/plugins/display-widgets/'>Display Widgets</a>-Simply hide widgets on specified pages. Adds checkboxes to each widget to either show or hide it on every site page.
(page) <a href='http://wordpress.org/extend/plugins/moly-olvasas/'>Moly olvasas widget</a>-With Moly olvasas widget you can add your moly.hu reading list to your wordpress blog.
(page) <a href='http://wordpress.org/extend/plugins/include-it/'>Include It</a>-Include It is a plugin that permits the inclusion, in a post or in a page, of any type of file (even a php script that will be executed).
(page) <a href='http://wordpress.org/extend/plugins/list-of-participants/'>List of participants</a>-List of participants, Teilnehmerliste.
(page) <a href='http://wordpress.org/extend/plugins/wp-flashtime-widget/'>WP-FlashTime Widget</a>-With WP_FlashTime Widget you can add a flash clock to your wordpress.This plugin include 25 different flash clocks.
(page) <a href='http://wordpress.org/extend/plugins/flash-clock-widget/'>Flash Clock Widget</a>-With Flash Clock Widget you can add a flash clock to your wordpress.  This plugin include 24 amazing different flash clocks.
(page) <a href='http://wordpress.org/extend/plugins/znavcarousel/'>zNavCarousel</a>-Adds animate the paging navigation on your WordPress blog.
(page) <a href='http://wordpress.org/extend/plugins/socialize/'>Socialize</a>-Provides an easy way to selectively add actionable social bookmarks to your posts content or below the post in an 'alert box'.
(page) <a href='http://wordpress.org/extend/plugins/amazon-reloaded-for-wordpress/'>Amazon Reloaded for WordPress</a>-This plugin allows a post author to quickly and easily insert text and image links to Amazon product pages into posts.
(page) <a href='http://wordpress.org/extend/plugins/generalstats/'>GeneralStats</a>-Counts the number of users, categories, posts, comments, pages, links, tags, link-categories, words in posts, words in comments and words in pages.
(page) <a href='http://wordpress.org/extend/plugins/page-management-dropdown/'>Page Management Dropdown</a>-Adds a link to edit each individual page to the new Pages admin menu.
(page) <a href='http://wordpress.org/extend/plugins/recently-updated-pages/'>Recently Updated Pages</a>-Purpose of this plugin is to display the list of pages (and optionally posts) on Wordpress blog those have been recently updated.
(page) <a href='http://wordpress.org/extend/plugins/in-post-template/'>In-post Template</a>-In-Post Template plugin add additional content to posts and pages, inside the_content() data result.
(page) <a href='http://wordpress.org/extend/plugins/sm00sh/'>sm00sh URL shrink</a>-A plugin that converts all URLs in a post or comment into shorten URLs using the [sm00sh service](http://smsh.me).Notice that activating it does not
(page) <a href='http://wordpress.org/extend/plugins/sourcedfrom/'>SourcedFrom</a>-Be able to publish posts from feeds and authorized WordPress sites.
(page) <a href='http://wordpress.org/extend/plugins/image-organizer/'>Image Organizer</a>-With this plugin you have the power to organize and manage images and directory in your uploads folder.
(page) <a href='http://wordpress.org/extend/plugins/wp-copyguard-protect-your-wordpress-posts/'>WP-CopyGuard [Protect your wordpress posts]</a>-Protect your wordpress blog gold content from getting stolen. A simple plug-in developed by Shekhar (iamshekhar.co.cc) to stop copy cats.
(page) <a href='http://wordpress.org/extend/plugins/wp-title-2/'>WP Title 2</a>-This plugin allows you to add and edit a Heading for your Posts and Pages, different from the Title (which is used in the navigation links). Very usef
(page) <a href='http://wordpress.org/extend/plugins/remove-page-from-search-results/'>remove page from search results</a>-remove pages from search results.
(page) <a href='http://wordpress.org/extend/plugins/lj-custom-menu-links/'>LJ Custom Menu Links</a>-LJ Custom Menu Links is a plugin that allows you to put extra links in the menus of most Wordpress Themes.
(page) <a href='http://wordpress.org/extend/plugins/hackadelic-editarea/'>Hackadelic EditArea</a>-Provide rich, syntax-aware code editing experience effortlessly.
(page) <a href='http://wordpress.org/extend/plugins/hackadelic-codification/'>Hackadelic Codification</a>-Gives you tools to enrich posts and pages with specific JavaScript and CSS code. Useful to quickly put together fancy, Web-2.0-style dynamic HTML.
(page) <a href='http://wordpress.org/extend/plugins/all-posts-page-link/'>wp-all-posts-page-link</a>-Outputs all posts page link. This plugin is to show all posts page link not all pages link for a special post which has long text.
(page) <a href='http://wordpress.org/extend/plugins/mm-duplicate/'>MM Duplicate</a>-MM Duplicate plugin allows you to duplicate your posts and pages. When duplicating a post it also copies all the categories and tags of that post.
(page) <a href='http://wordpress.org/extend/plugins/misiek-page-category/'>Misiek Page Category</a>-Plugin allows you to create categories for pages.
(page) <a href='http://wordpress.org/extend/plugins/possibly-related-classroom-projects/'>Possibly Related Classroom Projects</a>-'Possibly Related Classroom Projects' enables you to share relevant classroom projects from DonorsChoose.org based on the content of your posts.
(page) <a href='http://wordpress.org/extend/plugins/instant-weekly-roundup/'>Instant Weekly Roundup</a>-Instant Weekly Roundup creates weekly or monthly or custom roundup of all your posts written in that time span in a desired format so that there is no
(page) <a href='http://wordpress.org/extend/plugins/wp-render-blogroll-links/'>WP Render Blogroll Links</a>-Create a links page with a simple shortcode / tag. No additional templates needed.
(page) <a href='http://wordpress.org/extend/plugins/capa/'>CaPa Protect</a>-Protects Categories, Pages and Posts for specific users &amp; anonymous visitor
(page) <a href='http://wordpress.org/extend/plugins/mystat/'>mySTAT</a>-myStat is a flexible and versatile system intended for accumulation and analysis of the site attendance statistics.
(page) <a href='http://wordpress.org/extend/plugins/smart-slug/'>Smart Slug</a>-Smartify your post, page, tag and category slugs by removing too short or insignificant stopwords automatically.
(page) <a href='http://wordpress.org/extend/plugins/category-page-icons/'>Category and Page Icons</a>-Easy add icons to sidebar of categories and pages. All features are flexible and ajax based.
(page) <a href='http://wordpress.org/extend/plugins/wp-pagescroll/'>WP-PageScroll</a>-Infinite scroll for your site with “paginator” and an easy way to go to the top/botttom.
(page) <a href='http://wordpress.org/extend/plugins/nofollow-reciprocity/'>Nofollow Reciprocity</a>-Improves your blog PageRank and search engines rankings (search engine optimization).
(page) <a href='http://wordpress.org/extend/plugins/article-templates/'>Article Templates</a>-Article Templates plugin lets you create templates that can be used when writing a new post or page.
(page) <a href='http://wordpress.org/extend/plugins/xili-dictionary/'>xili-dictionary</a>-xili-dictionary is a dictionary storable in taxonomy and terms to create and translate .po files or .mo files and more...
(page) <a href='http://wordpress.org/extend/plugins/clkercom-clip-art/'>Clker.com clip art</a>-Search and add Clker.com clip art images to your posts.
(page) <a href='http://wordpress.org/extend/plugins/page-peel-bujanqworks/'>Page Peel BujanQWorkS</a>-page peel bujanqworks you make in your advertising and promotion is very easy to use.
(page) <a href='http://wordpress.org/extend/plugins/subscription-options/'>Subscription Options</a>-Adds subscription option icons for your RSS Feed; your FeedBurner Email Service; your Twitter Stream and even your Facebook page. Totally user-defined
(page) <a href='http://wordpress.org/extend/plugins/wordpress-css-drop-down-menu/'>Wordpress CSS Drop-down Menu</a>-Creates a DYNAMIC MULTI-level navigation menu of pages with dropdown menus for child pages. Uses ONLY cross-browser friendly CSS.
(page) <a href='http://wordpress.org/extend/plugins/xili-language/'>xili-language</a>-xili-language provides for a multilingual website an automatic selection of language (.mo) in theme according to the language of current post(s).
(page) <a href='http://wordpress.org/extend/plugins/pretty-comments/'>Pretty Comments</a>-Replaces the regular wordpress comment textarea with a simple wysiwyg editor, it uses the jWYSIWYG jQuery (<a href='http://code.google.com/p/jwysiwyg/' rel='nofollow'>http://code.google.com/p/jwysiwyg/</a>)
(page) <a href='http://wordpress.org/extend/plugins/support-great-writers/'>Support Great Writers</a>-Quickly add two products in a side-bar widget by using just adding the appropriate Amazon ASIN (ISBN-10) in the widget configuration screen.
(page) <a href='http://wordpress.org/extend/plugins/wp-web-scrapper/'>WP Web Scraper</a>-An easy to implement web scraper for WordPress. Display realtime data from any websites directly into your posts, pages or sidebar.
(page) <a href='http://wordpress.org/extend/plugins/tokentracker/'>TokenTracker</a>-Automatically inserts a TokenTracker token into your posts and pages on publishing.
(page) <a href='http://wordpress.org/extend/plugins/page-manage-widget/'>Page Manage Widget</a>-This plugin provides full featured page management widget with multiple instance and configurable options.
(page) <a href='http://wordpress.org/extend/plugins/archive-manage-widget/'>Archive Manage Widget</a>-This plugin provides full featured archive management widget with multiple instance and configurable options.
(page) <a href='http://wordpress.org/extend/plugins/hackadelic-sliding-notes/'>Hackadelic Sliding Notes</a>-Ajax sliders for content fragments. Fancy replacement for foot- and other notes.
(page) <a href='http://wordpress.org/extend/plugins/smooth-slider/'>Smooth Slider</a>-Smooth Slider adds a smooth content and image slideshow with customizable background and slide intervals to any location of your blog
(page) <a href='http://wordpress.org/extend/plugins/c7-title-scroller/'>C7 Title Scroller</a>-Scroll page titles of your blog in the browser.
(page) <a href='http://wordpress.org/extend/plugins/link-to-post/'>Link to Post</a>-This plugin allows you to easily create a link to an existing article or page in another article or page
(page) <a href='http://wordpress.org/extend/plugins/bbredirector/'>bbRedirector</a>-bbRedirector makes it easy to redirect a page to another location using absolute urls.
(page) <a href='http://wordpress.org/extend/plugins/html-sitemap/'>HTML Page Sitemap</a>-Adds an HTML (Not XML) sitemap of your blog pages (not posts) by entering the shortcode [html-sitemap], perfect for those who use WordPress as a CMS.
(page) <a href='http://wordpress.org/extend/plugins/hackadelic-table-of-content-boxes/'>Hackadelic SEO Table Of Contents</a>-Easy to use, freely positionable, fancy AJAX-style table of contents for WordPress posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/my-page-order/'>My Page Order</a>-My Page Order allows you to set the order of pages through a drag and drop interface.
(page) <a href='http://wordpress.org/extend/plugins/lock-pages/'>Lock Pages</a>-Lock Pages prevents specified pages (or all pages) from having their slug or parent edited, or from being deleted, by non-administrators.
(page) <a href='http://wordpress.org/extend/plugins/empathy/'>Empathy</a>-You're emotional. Empathy understands. Make your emotions an integral part of your site with the Empathy mood and emotion plugin.
(page) <a href='http://wordpress.org/extend/plugins/clocky/'>Clocky - Flash Clock Widget</a>-Clocky - THe Clock Time Widget provides you a way  to add a flash clock widget to your sidebars.  This plugin includes twenty-four assorted clocks. Al
(page) <a href='http://wordpress.org/extend/plugins/dynamic-headers/'>Dynamic Headers</a>-Dynamic Headers does just what you think it would based on the name - it allows you to create highly dynamic header space on your WordPress site.
(page) <a href='http://wordpress.org/extend/plugins/random-posts-widget-include/'>Random Pages Widget</a>-Displays random posts and pages in sidebar. This increases the number of indexed pages and gives users an interesting way to browse your site.
(page) <a href='http://wordpress.org/extend/plugins/csv-2-post/'>CSV 2 POST</a>-Created by Ryan Bayne from WebTechGlobal, import csv data, publish to WordPress as posts, auto custom fields, auto category creation and sorting.
(page) <a href='http://wordpress.org/extend/plugins/reveal-ids-for-wp-admin-25/'>Reveal IDs for WP Admin</a>-What this plugin does is to reveal most removed IDs on admin pages, as it was in versions prior to 2.5.
(page) <a href='http://wordpress.org/extend/plugins/show-future-posts-on-single-post/'>Show Future Posts on Single Post</a>-Lets you show Future or Schedule Post on Single Posts. It also enables comments for future posts.
(page) <a href='http://wordpress.org/extend/plugins/my-snippets/'>My Snippets</a>-Allows you to add custom widget content on a post-by-post (or page) basis from the post editor screen.
(page) <a href='http://wordpress.org/extend/plugins/page-tree/'>WordPress Page Tree</a>-Creates a expand/collapse tree for showing all your pages on your site or in your administration 'pages' panel.
(page) <a href='http://wordpress.org/extend/plugins/font-burner-control-panel/'>Font Burner Control Panel</a>-The Font Burner Plugin allows you to easily add Font Burner Fonts to your Wordpress theme. (IF UPGRADING, BE SURE TO RECORD YOUR FONT BURNER SETTINGS
(page) <a href='http://wordpress.org/extend/plugins/wp-typography/'>wp-Typography</a>-Improve your web typography with: hyphenation, space control, intelligent character replacement, and CSS hooks.
(page) <a href='http://wordpress.org/extend/plugins/amazon-product-in-a-post-plugin/'>Amazon Product In a Post Plugin</a>-Quickly add formatted Amazon Products to post/page by using just the Amazon ASIN (ISBN-10). Great for monetizing your posts.
(page) <a href='http://wordpress.org/extend/plugins/live-countdown-timer/'>Live Countdown Timer</a>-Widget/Plugin that will enable you to show a beautifull live countdown timer for an event.
(page) <a href='http://wordpress.org/extend/plugins/affiliate-link1/'>Affiliate Link</a>-Create short links suitable for any website using your own domain name!
(page) <a href='http://wordpress.org/extend/plugins/xili-tidy-tags/'>xili-tidy-tags</a>-xili-tidy-tags is a tool for grouping tags by semantic groups or by language and for creating tidy tag clouds.
(page) <a href='http://wordpress.org/extend/plugins/cacoo-for-wordpress/'>Cacoo for WordPress</a>-The Cacoo plugin for WordPress allows you to create diagrams and insert them into your posts.
(page) <a href='http://wordpress.org/extend/plugins/wordpress-menu-order/'>WordPress Menu Order</a>-A plugin that will simplify the process of maintaining a WordPress powered site’s navigation structure.
(page) <a href='http://wordpress.org/extend/plugins/advanced-permalinks/'>Advanced Permalinks</a>-Allows multiple permalink structures and category-specific permalinks without needing redirects.
(page) <a href='http://wordpress.org/extend/plugins/amazon-affiliate-link-localizer/'>Amazon Affiliate Link Localizer</a>-This plugin changes any Amazon links on your site to use your affiliate ID. It also changes the link to point to the user's local Amazon store.
(page) <a href='http://wordpress.org/extend/plugins/gd-star-rating/'>GD Star Rating</a>-GD Star Rating plugin allows you to set up advanced rating and review system for posts, pages and comments in your blog using single, multi and thumbs
(page) <a href='http://wordpress.org/extend/plugins/link-library/'>Link Library</a>-The purpose of this plugin is to add the ability to output a list of link categories and a complete list of links with notes and descriptions.
(page) <a href='http://wordpress.org/extend/plugins/subheading/'>SubHeading</a>-Adds the ability to easily add and display a sub title/heading on both posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/pagemeta/'>Page Meta</a>-Adds the ability to override the page meta title and add in meta descriptions and keywords for pages.
(page) <a href='http://wordpress.org/extend/plugins/no-more-frames/'>No More Frames</a>-Many web sites try to load your content into their own frame, to help sell ads on their sites. This simple plugin ensure your site is protect from thi
(page) <a href='http://wordpress.org/extend/plugins/gd-press-tools/'>GD Press Tools</a>-GD Press Tools is a collection of various administration, seo, maintenance, backup and security related tools that can help with everyday blog tasks a
(page) <a href='http://wordpress.org/extend/plugins/wibstats-statistics-for-wordpress-mu/'>WibStats</a>-Wibstats is a Wordpress plugin that gives each blog in a Wordpress MU installation their own visitor statistics.
(page) <a href='http://wordpress.org/extend/plugins/really-static/'>Really Static</a>-Generates static HTML-files from your Blog. That makes your Blog incredible fast! Better than any other cache.
(page) <a href='http://wordpress.org/extend/plugins/diagonal-advertising-banner-plugin/'>Diagonal Advertising Banner Plugin</a>-The Diagonal Advertising Banner Plugin allows users to create a diagonal banner at the top right corner of a website with a message and optional link.
(page) <a href='http://wordpress.org/extend/plugins/wp-glideshow/'>WP Glideshow</a>-WP Glideshow - A revolutionary Javascript Slideshow for Wordpress. Highly customizable and wonderful styling oppurtunities. A must have for every Word
(page) <a href='http://wordpress.org/extend/plugins/spectacula-page-widget/'>Spectacu.la Page Widget</a>-Widget that lets you output the content of a page in a any place that'll accept a widget and allows you to hide said page from wp_list_pages.
(page) <a href='http://wordpress.org/extend/plugins/attachments/'>Attachments</a>-Attachments allows you to append any number of items from your WordPress Media Library to Posts and Pages
(page) <a href='http://wordpress.org/extend/plugins/flash-album-gallery/'>GRAND Flash Album Gallery</a>-GRAND Flash Album Gallery is a full integrated (flash skin based, slideshow) Image Gallery plugin with a powerfull admin back end.
(page) <a href='http://wordpress.org/extend/plugins/bb-usage-stats/'>bb: Usage Stats</a>-Track post, page, category and homepage views. Build usage statistics, display usage graphs, top pages, posts, categories.
(page) <a href='http://wordpress.org/extend/plugins/dmsguestbook/'>DMSGuestbook</a>-DMSGuestbook is an easy configurable guestbook with a lot of features.
(page) <a href='http://wordpress.org/extend/plugins/wp-chameleon/'>WP Chameleon</a>-WP Chameleon randomizes the content of widgets, pages, posts or rss feeds that contain a simple markup. It has various uses from rewriting articles to
(page) <a href='http://wordpress.org/extend/plugins/chameleon-css/'>Chameleon CSS</a>-Just another CSS Chooser.
(page) <a href='http://wordpress.org/extend/plugins/seo-ultimate/'>SEO Ultimate</a>-This all-in-one SEO plugin gives you control over titles, noindex, meta data, slugs, canonical tags, 'more' links, 404 error tracking, and more.
(page) <a href='http://wordpress.org/extend/plugins/subscribe-sidebar/'>Subscribe Sidebar plugin by Blubrry</a>-Add a list of 'Subscribe' links to your sidebar. Options include your blog and podcast feed, Twitter page, iTunes, Facebook Fan Page and more.
(page) <a href='http://wordpress.org/extend/plugins/pretty-link/'>Pretty Link</a>-Shrink, track and share any URL on the Internet from your WordPress website. Create short links suitable for Twitter using your own domain name!
(page) <a href='http://wordpress.org/extend/plugins/eventify/'>Eventify - Simple Events</a>-Eventify makes it extremely simple for you to store and display events either as posts or popups or as a list on a page, easily configuarbale and easy
(page) <a href='http://wordpress.org/extend/plugins/adsense-integrator/'>AdSense Integrator</a>-Manage ads on your blog in a super easy way. Graphical user-friendly interface, many options now with translations! see the screenshot!	
(page) <a href='http://wordpress.org/extend/plugins/lexidef/'>LexiDef</a>-Quickly set links to Lexiology.com Dictionary definitions of words/phrases containing meaning, audio, phonetics, usages and other informations.
(page) <a href='http://wordpress.org/extend/plugins/email-post-changes/'>Email Post Changes</a>-Emails you Whenever a change to a post or page is made.
(page) <a href='http://wordpress.org/extend/plugins/bbpress-latest-discussion/'>Bbpress Latest Discussion</a>-This plugin will generates Latest Discussion list from your bbpress forum into your wordpress page.
(page) <a href='http://wordpress.org/extend/plugins/category-page-extender/'>Category Page Extender</a>-Inserts posts into pages corresponding to category.  Add on plugin for Category Page by pixline.net. Requieres an active installation of Category Page
(page) <a href='http://wordpress.org/extend/plugins/revisionary/'>Revisionary</a>-Enables moderated editing of published posts and pages.  These Pending Revisions, if approved by an Editor, can be published immediately or scheduled
(page) <a href='http://wordpress.org/extend/plugins/wp-post-styling/'>WP Post Styling</a>-Allows you to define custom styles for any specific post or page on your WordPress site. This is particularly useful for journal-style publications wh
(page) <a href='http://wordpress.org/extend/plugins/ecall/'>Ecall</a>-The plugin make it easy   to invoke  articles of your blog .  Just insert an simple javascript code in the  web page  if other sites want to invoke yo
(page) <a href='http://wordpress.org/extend/plugins/page-flip-image-gallery/'>Page Flip Image Gallery</a>-FlippingBook Wordpress Gallery plugin helps you to create Image Gallery with Page Flip effects on your blog.
(page) <a href='http://wordpress.org/extend/plugins/instant-web-highlighter/'>Instant Highlighter: virally MicroShare/MicroBookmark your posting across ALL Social Networks</a>-Simple/powerful plugin that enables readers to make highlights on your webpage &amp; EASILY SHARE them anywhere (Facebook, Twitter...100+ such sites!)
(page) <a href='http://wordpress.org/extend/plugins/target-page-navigation/'>Target Page Navigation</a>-This plugin adds a new optoin (only available on the Add/Edit page sections) that enables the author to assign the page to one of 4 navigation types(S
(page) <a href='http://wordpress.org/extend/plugins/free-tell-a-friend/'>Tell A Friend: Share/Bookmark/Email/Social Bookmarking Button</a>-Adds a tell a friend, Share/Bookmark/Email/Social Bookmarking button.
(page) <a href='http://wordpress.org/extend/plugins/yet-another-related-posts-plugin/'>Yet Another Related Posts Plugin</a>-Returns a list of related entries based on a unique algorithm for display on your blog and RSS feeds. A templating feature allows customization of the
(page) <a href='http://wordpress.org/extend/plugins/trash-manager/'>Trash Manager</a>-This plugin allows you to delete Posts, Pages and Comments without moving them to Trash first. Additionally it restores all Are you sure? questions.
(page) <a href='http://wordpress.org/extend/plugins/mingle/'>Mingle</a>-The simplest way to turn your standard WordPress website with a standard WordPress theme into a Social Network.
(page) <a href='http://wordpress.org/extend/plugins/make-me-social-automatically-submit-posts-to-delicious-twitter-tumblr-diigo/'>Make Me Social</a>-The 'Make Me Social' wordpress plugin send each new post you make to the most famous social services.
(page) <a href='http://wordpress.org/extend/plugins/extended-page-lists/'>Extended Page List</a>-Add custom configured page lists to your posts, pages and sidebar.
(page) <a href='http://wordpress.org/extend/plugins/featured-page-widget/'>Featured Page Widget</a>-Allows you to feature pages on your sidebar using an excerpt of the page and a text or image link to the page.
(page) <a href='http://wordpress.org/extend/plugins/multiple-content-blocks/'>Multiple content blocks</a>-Lets you use more than one content 'block' on a template. You only have to insert one tag inside the template, so it's easy to use.
(page) <a href='http://wordpress.org/extend/plugins/add-to-any/'>Add to Any: Share/Bookmark/Email Button</a>-Help readers share, bookmark, and email your posts and pages using any service, such as Facebook, Twitter, Digg, Delicious and over 100 more.
(page) <a href='http://wordpress.org/extend/plugins/autopublish/'>Automatically publish highlights of any website, directly to your Blog</a>-Highlight as you surf =&gt; Directly posts highlights to your website. Look/feel customizable. Very, very COO
(page) <a href='http://wordpress.org/extend/plugins/avh-amazon/'>AVH Amazon</a>-The AVH Amazon plugin gives you the ability to show items from your Amazon wishlist by using widgets or shortcode in posts and pages.
(page) <a href='http://wordpress.org/extend/plugins/nextpage-paragraph-tag-fix/'>Next-Page-Tag Bug Fix</a>-Fixes the invalid opening and closing paragraph tags in multipiple-page posts.
(page) <a href='http://wordpress.org/extend/plugins/excerpt-editor/'>Excerpt Editor</a>-Quick edit or create excerpts for both Posts and Pages, auto-generate and append excerpts or replace the content with excerpts.";

	$lyrics = explode("\n", $lyrics);

	return wptexturize( $lyrics[ mt_rand(0, count($lyrics) - 1) ] );
}

function project_goldjaguar() {
	$chosen = project_goldjaguar_from_zeleniy();
	echo "<p id='goldjaguar'>$chosen</p>";
}

add_action('admin_footer', 'project_goldjaguar');

function goldjaguar_css() {
	$x = ( 'rtl' == get_bloginfo( 'text_direction' ) ) ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#goldjaguar {
		position: absolute;
		top: 4.5em;
		margin: 0;
		padding: 0;
		$x: 215px;
		font-size: 11px;
	}
	</style>
	";
}

add_action('admin_head', 'goldjaguar_css');

?>
