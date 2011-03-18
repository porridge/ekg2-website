<? include("__include.php"); ekg_header(); ?>

    <h1> EKG2 - Summer of Code 2008 ideas </h1> 

<p>
	EKG2 is multiplatform, multiprotocol IM for *nix systems, developed since 2003<br />
	EKG2 is written fully in C, so we're looking for people who have
good knowledge of C, preferably dreaming in vivid C.
<br />
There is lot of things that could be done, here are some of our ideas:
</p>

<ol>
	<li> perl, python, ruby - finish up, and polish scripts API,
		ruby has been added lately, so there is much to do. (<em>mentors: darkjames, leafnode</em>)</li>
	<li> jabber plugin (<em>mentors: darkjames, peres</em>)
		<ul>
			<li> make it as much XEP-0213 compatible as possible (XMPP Intermediate Client) (as you can guess, most of things has been started), </li>
			<li> handling resources (if student get to work on jabber plugin, this is a must!), </li>
			<li> finish up MUC, </li>
			<li> implement file-transfer (there is already basis for this), </li>
			<li> implement zlib/lzw compression, </li>
			<li> implement XEPs which are possible to implement. </li>
		</ul>
	</li>
	<li> feed plugin (<em>mentor: darkjames</em>)
		<ul>
			<li> handling of different RSSes, </li>
			<li> nntp - add posting, </li>
			<li> nntp - add threaded-like display, </li>
			<li> make whole plugin more usable, and more userfriendly. </li>
		</ul>
	</li>
	<li> gtk2 plugin - finish it up, so it could be as usable as ncurses plugin (<em>mentors: whole ekg2 team</em>)</li>
	<li> dbus plugin - there is only basis made and some ideas given, there is lack of interfaces implementation,
		this should be quite easy to do, but may require changes in core of ekg2, changes in core, should be
		discussed with rest of the team, so person responsible for this plugin, probably would have to contact
		developers a lot (<em>mentor: GiM</em>) </li>
	<li> irc plugin (<em>mentors: GiM, darkjames</em>)
		<ul> 
			<li> currently, there is recode for session-only (ekg2 is based on something that we call sessions),
				we need channel/user-based recode, </li>
			<li> add friendlist, sh.tlist, (autoop and so, on), </li>
			<li> better handling of chanserv/nickserv and other serivces. </li>
		</ul>
	</li>
	<li> <strong>CHALLENGING, and new plugins:</strong>
		<ul>
			<li> emulation of plugins from other clients, e.g. Miranda's (wine's API could be used to handle Windows API), </li>
			<li> /upgrade command which would allow reloading ekg2 and plugins, without disconnecting sessions (this IS possible, but can be quite challanging to do), </li>
			<li> ekg2 -c host:port -F frontend_name - which would allow to connect to remotely running ekg2 with a given frontend (gtk2, ncurses, readline), </li>
			<li> plugin using e.g ODBC API, to log to different databases, to drop the need for writing different plugins, there are already sqlite and oracle plugins, </li>
			<li> MSN, ICQ and other protocols plugins </li>
		</ul>
	</li>

</ol>

<? ekg_footer(); ?>
