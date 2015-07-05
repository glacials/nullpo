# nullpo

[nullpo.cc](http://www.nullpo.cc/) is an old forum some friends and I made in high school to talk about high school
things. Then we went off to college or other ventures so we sometimes used it to talk about those things too, but not a
ton.  Then we finished those things and sort of stopped using it for extremely boring reasons. I like to continue
hosting it so that we can look back and have a laugh or two.

The forum itself is private, but this is the source. It's a mostly vanilla phpBB3 board, but over the years I made a lot
of little tweaks here and there because they were nice to have but also because it was fun to learn more about
programming by doing that. Looking back now, the code is extremely embarrassing. By some miracle I had the foresight to
actually tag some of my changes with my then-name (`skoh-fley`) for easy rediscovery. So go on and have some fun looking
at my hacky changes.

## Name suffixes

One of the hacky changes was to add DeviantArt-style suffixes to the names of users who matched certain conditions.
These conditions and their corresponding suffixes were:

* `*`: uber; you've split the yearly cost of the server with other ubers this year. This status falls off when the next
  round of donation collections comes around.
* `-`: uber veteran; you've split the yearly cost of the server during at least one year before this one. This status
  never falls off.
* `` ` ``: moderator; you try to keep nullpo sane.
* `^`: founder; you were a member of nullpo before registration was set to invite-only (22 Nov 2007).

In the code, suffixes [attach themselves to a username wherever one would be displayed][suffixes]. An uber veteran with
the name `glacials` would appear to all users instead as `glacials^`.

[suffixes]: https://github.com/glacials/nullpo/blob/1ed355121f5843335d368b9a5f7b2796a8b80d9b/includes/functions_content.php#L1195

### My thoughts from today

I have no idea why I created a new database connection to do this.

I like that the code used existing user groups to manage status. The group IDs themselves are hardcoded in, and if I had
the knowledge necessary (or the will to obtain it) this would have been a lot cleaner as a database column on the groups
table that can hold a string to use as a suffix for its members.

I think back when we ran phpBB2, this code didn't even use groups a little bit, instead just hardcoding usernames right
into this file. So at least this is a tiny bit better than that.

As far as the output goes, in the end it looks a bit cluttered as a large number of people had more than one suffix.
They don't really mean anything unless they're rare, and they're not rare.

## Anonymous forum

One of our forums marked all incoming posts as written by a hidden "Anonymous" user with no IP. At one point this
functionality was given to us in a phpBB2 mod, but when we upgraded to phpBB3 no similar mod existed. So this is just
[five lines of hardcoded overrides][nichan].

[nichan]: https://github.com/glacials/nullpo/blob/1ed355121f5843335d368b9a5f7b2796a8b80d9b/includes/functions_posting.php#L1632

### My thoughts from today

This was pretty alright except for the hardcoded forum ID. A proper plugin would probably add a bool column to the
forums table. Also, `$user` as a whole should probably be replaced, not just specific fields inside it, to prevent the
exposing of other types of personally identifiable information which may be added in the future (or which I may have
missed to begin with).

## Thread-specific page lengths

At least one thread in nullpo had a special need for an extremely large per-page post count. It was a make-your-own-story
thread, an idea one of our members had. This member would draw an image of a person in some scenery, post it with a
small caption, and other members could determine what action the person should take in a fashion extremely similar to
tabletop RPGs or text adventures. To be able to easily see more than 0-1 panes of history at a time among all the
replies, [page length for this thread specifically was increased to 50 posts][thread page length].

I'm not sure why the code is now commented out, but that's how I found it.

[thread page length]: https://github.com/glacials/nullpo/blob/1ed355121f5843335d368b9a5f7b2796a8b80d9b/viewtopic.php#L561

### My thoughts from today

eh. You can probably guess exactly what problems I had with it.

## Style modifications

These are harder to explain, but over the years I ended up making a lot of minor changes to our phpBB template,
AcidTech. Turns out I didn't tag any of them.

AcidTech was a good template with a nice color scheme, but ultimately had a lot going on visually and was a bit too
heavy on the exciting imagery and attempts to convey depth. Here it is without modifications:

![AcidTech phpBB theme](http://i.imgur.com/ftqHyqf.png)

I liked it at first, but when I felt we'd grown out of it, I took some liberties. What we ended up with was a slightly
flatter, simpler, and more gingham-flavored version that, for whatever it means coming from a person with possibly no
design taste, I'm still happy with to this day.

![nullpo's modifications to AcidTech](http://i.imgur.com/9tNwCKQ.png)
