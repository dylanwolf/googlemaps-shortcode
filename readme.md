Google Maps Shortcode Plugin
============================

This is a plugin that generates the Google Maps embed iframe into a Wordpress post or page. While it doesn't simplify
the process (Google Maps gives you a very simple piece of code to do this), it ensures that the embed won't be visible
while you're editing the content.

## Usage

[googlemap mid="GOOGLE\_MAP\_ID" width="640" height="480"]

*mid*: The ID of the map. This should correspond to the "mid" query string parameter in the iframe code that Google Maps
generates for embedding.

*width*: The width of the map. If not specified, uses 640 (the default in the iframe code Google Maps generates).

*height*: The height of the map. If not specified, uses 480 (the default in the iframe code Google Maps generates).

## How to embed a map:
In a map that you have saved in Google Maps:

1. Click "Share" and make the map public.

2. Click the ellipsis menu (...) to the right of the map's name.

3. Click "Embed on my site."

4. Copy the portion of the code just after "embed?mid=", ending just before the last quotation mark.

5. Paste the code into the mid attribute as described above.