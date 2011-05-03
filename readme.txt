twentyten +1

-------
Intro
=======
This is a child theme to enable owner of wordpress site with twentyten theme to create Facebook Page with ease. 


------
Install
=======

Checkout 
The tutorial ( screencast ) : 
- http://www.facebook.com/video/video.php?v=10150224214822578
- or http://vimeo.com/22432694

Step-by-step :

- Install like u're installing wp-theme. Though i doubt you need to check it but make sure u got the needed parent theme twentyten ( currently wp's default ). Then activate it. ( currently i'm using wp 3.1 , so i don't know how it'll behave on 3.0++ or before )

- After that u'll see there's new post type called "Facebook Pages" ( on the sidebar). Here you could create your pages content.

- Create your page contents by creating new page on "Facebook Pages" on your wordpress.

- If you haven't had Fb Page, & Fb App for it, create it. Check out this tutorial if u don't know what i mean : http://www.hyperarts.com/blog/adding-iframe-application-to-facebook-fan-page/

- Take note on your Fb App Credentials (app id, app secret, api key ). And fill it on the appropriate field on your page.


- good luck -

ps.

- sample fb page : http://www.facebook.com/pages/1/202918663053267




-------
How to
=======

Turn of the Wysiwyg editor
--------------------------------------
To have a better handle on the page content, turn off the visual/wysiwyg editor ( on user setting ). This will enable us to insert embed code, & other htmls. Since sometime the visual editor would strip it ( e.g the embed code of youtube vid )


Add fan gating ( reveal tab for fans )
---------------------------------------

On the wordpress editor add enclosing shortcode = [liked] , fill the content with what you want to be shown to user that had liked the page,
On the wordpress editor add enclosing shortcode = [unliked] , fill the content with what you want to be shown to user that hadn't liked the page ( or when viewed unlogged user ).

Note : because wp automatically add line-break to empty line, its a good thing to separate the fan gating shortcodes with space, not on separate line.

i.e :
[liked] Thanks for liking us, we love you!  [/liked] [unliked] Hey, we've  like you already. It sad you haven't like us. Please "Like" us back :) [/unliked]

sample result would be :
for user that haven't liked the page : "Hey, we've  like you already. It sad you haven't like us. Please "Like" us back :)"
for user that liked the page ( fans ) : "Thanks for liking us, we love you!"


Creating just like the +1 page
----------------------------------------
- Open the sample-content.html on the twentyten+1 folder
- Create/edit the facebook page on wp-admin, copy the code from sample-content.html to the main text-input area.
- publish and check how it looks on your fb page.


------------
Changelog 
============

20110503 : added skin selection, and textarea for css override capability

20110425 : rearrange metaboxes

20110415 : add yui3 support, set ver 0.9b, custom style for metabox

20110404 : adding shortcodes for fan gating






