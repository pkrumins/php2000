PHP2000, written in 2000, is a simple URL routing framework. It does not
require anything newer than PHP4 and uses require() calls to route requests to
the appropriate handlers.

This framework was written by Peteris Krumins (peter@catonmat.net) in 2000.
His blog is at http://www.catonmat.net  --  good coders code, great reuse.

------------------------------------------------------------------------------

It uses website.conf INI file to store the possible request pages in the
[pages] section.

To use it, rewrite all requests to index.php.

