Content lists
=============

What playlists are for music, content lists are for articles - customisable sets of content organised and ordered in a way that suits your output channel the best. For example, when you access some Publisher website homepage as visitor, chances are that the teasers for articles you see are curated by website editors using *content lists*. The order of articles can be easily updated as news arrives, new articles added and some other removed etc.

Manual content lists
--------------------

With *manual content lists*, articles need to be dragg'n'dropped into the list by an editor and positioned manually. Lists can be (and should be) limited in length, so when a new article is added, say, to top of it, the last one drops out.

Automatic content lists
-----------------------

If a list doesn't need to be fully customisable, or when it can be programmed with certain rules to collect appropirate articles, then *automatic content list* step in. 

For example, say some block on the webiste shows the most recent articles from section Sport, where metadata location is set to 'Europe' and author is not John Smith; in such cases, lists can be automated by using simple rules. 

Built-in criteria:

- ``route`` - an array of route ids, e.g. [1,5]

- ``author`` - an array of authors, e.g. ["Test Persona","Doe"]

- ``publishedBefore`` - date string, articles published before this date will be added to the list,
e.g. date: "2017-01-20". (date format must be YYYY-MM-DD)

- ``publishedAfter`` - date string, articles published after that date will be added to the list, format is the same as in the ``publishedBefore`` case.

- ``publishedAt`` - date string, when defined articles matching this publish date will be added to the list when published, format is the same as in case of ``publishedBefore`` and ``publishedAfter``

- ``metadata`` - metadata field is a json string, e.g. ``{"metadata":{"language":"en"}}``. It matches an article's metadata, and you can use all metadata fields that are defined for the article, i.e.: language, located etc.

Criteria can be mixed and matched to add articles to the list (on publish) depending on your needs.

Content buckets
---------------
