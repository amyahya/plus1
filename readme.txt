twentyten +1

-------
Intro
=======
This is a child theme to enable owner of wordpress site with twentyten theme to create Facebook Page with ease. 

This is still on development process, don't use it on your live site. If u're wordpress wizard, php ninjas, or other superhero i'm welcoming any suggestion :)

If u're feeling adventurous or curious here's the step :

- Install like u're installing wp-theme. Make sure u got the needed parent theme twentyten ( currently wp's default ). Then activate it. ( currently i'm using wp 3.1 , so i don't know how it'll behave on 3.0 or below )

- After that u'll see there's new post type called "Facebook Pages" ( on the sidebar). Here you could create your pages content.

- Create your page contents by creating new page on "Facebook Pages" on your wordpress.


- If you haven't had Fb Page, & Fb App for it, create it. Check out this tutorial if u don't know what i mean : http://www.hyperarts.com/blog/adding-iframe-application-to-facebook-fan-page/

- Take not on your Fb App Credentials (app id, app secret, api key ). And fill it on the appropriate field on your page.


- good luck -

ps.

- sample fb page : http://www.facebook.com/pages/1/202918663053267



-------
How to
=======

Add fan gating ( reveal tab for fans )

On the wordpress editor add enclosing shortcode = [liked] , fill the content with what you want to be shown to user that had liked the page,
On the wordpress editor add enclosing shortcode = [unliked] , fill the content with what you want to be shown to user that hadn't liked the page ( or when viewed unlogged user ).

Note : because wp automatically add line-break to empty line, its a good thing to separate the fan gating shortcodes with space, not on separate line.

i.e :
[liked] Thanks for liking us, we love you!  [/liked] [unliked] Hey, we've  like you already. It sad you haven't like us. Please "Like" us back :) [/unliked]

sample result would be :
for user that haven't liked the page : "Hey, we've  like you already. It sad you haven't like us. Please "Like" us back :)"
for user that liked the page ( fans ) : "Thanks for liking us, we love you!"



------------
Changelog 
============

20110404 : adding shortcodes for fan gating






