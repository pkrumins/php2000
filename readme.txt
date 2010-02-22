PHP2000, written in 2000, is a simple URL routing framework (if you may call a
20 line program so). It does not require anything newer than PHP4 and uses
require() calls to route requests to the appropriate handlers. The handlers
are simply PHP files.

This framework was written by Peteris Krumins (peter@catonmat.net) in 2000.
His blog is at http://www.catonmat.net  --  good coders code, great reuse.

------------------------------------------------------------------------------

It uses website.conf INI file to store the possible request pages in the
[pages] section.

For example, if the [pages] section looks like this:

    [pages]
    default    = page-index.php
    error      = page-error.php
    about      = page-about.php
    users      = page-users.php

Then requesting http://yoursite.com/about/ will require('page-about.php'),
similarly, requesting http://yoursite.com/users/ will
require('page-users.php').

The 'default' handler refers to a request to http://yoursite.com/.
The 'error' handler gets require()d when no url matches.

To use it, rewrite all the requests to index.php.

------------------------------------------------------------------------------

Sincerely,
Peteris Krumins
http://www.catonmat.net

