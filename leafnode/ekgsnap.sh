#!/bin/sh
echo started > started
umask 022

DEST="/home/deletek/ekg2/"
REPO=":pserver:anonymous@localhost:/home/cvs"
BRANCH=""

# XXX, nie dziala robienie branchy.

RELEASE=$(date +%Y%m%d)
VERSION="$RELEASE"
REVISION=""

# przygotuj podwórko
WORKDIR=$(mktemp -q /tmp/ekg2snap.XXXXXX)
if [ $? -ne 0 ]; then
	echo "mktemp failed"
	exit 1
fi
rm -f $WORKDIR
mkdir $WORKDIR
cd $WORKDIR

# wyci±gnij z cvsu dan± wersjê
svn co http://toxygen.net/svn/ekg2/trunk/ ekg2
find ekg2/ -name '.svn' -exec rm -rf {} \;

# skopiuj dokumentacjê
mkdir $DEST/docs 2> /dev/null
rm -f $DEST/docs/*
cp ekg2/docs/* $DEST/docs 2> /dev/null
cp ekg2/ChangeLog $DEST/tmp/ 2> /dev/null
cp ekg2/NEWS $DEST/tmp/ 2> /dev/null

# zamieñ adresy e-mailowe
perl -pi -e 's/\@([a-z0-9]*)\./*$1!/g' $DEST/docs/*

# wpisz odpowiednie wersje
perl -pi -e "s/^AM\_INIT\_AUTOMAKE\(ekg2, CVS\)/AM\_INIT\_AUTOMAKE\(ekg2, \"$RELEASE\"\)/" ekg2/configure.ac

# wygeneruj configure
(cd ekg2; ./autogen.sh --build=i386 --enable-remote --with-xosd-config=/usr/X11R6/bin/xosd-config; )
(cd ekg2; PATH=$PATH:/home/deletek/bin make dist-bzip2;)

# wyrzuæ niepotrzebne pliki i spakuj
mv ekg2 ekg2-$RELEASE
mv ekg2-$RELEASE/ekg2-$RELEASE.tar.bz2 $DEST/archive/ekg2-$RELEASE.tar.bz2
(cd $DEST/archive; md5sum ekg2-$RELEASE.tar.bz2 > ekg2-$RELEASE.tar.bz2.md5)
# posprz±tajmy
rm -rf $WORKDIR

# podlinkuj wszystko
cd $DEST
rm -f ekg2-*.tar.bz2{,.md5}

for i in $(ls archive/ekg2-200*tar.bz2 | tail -5); do
	ln -s $i
	ln -s $i.md5
done

for i in $(ls archive/ekg2*.tar.bz2 | grep -v ekg2-200); do
	ln -s $i
	ln -s $i.md5
done

rm -rf ekg2-current.tar.bz2{,.md5}
ln -s $(ls archive/ekg2-20**tar.bz2 | tail -1) ekg2-current.tar.bz2
ln -s $(ls archive/ekg2-20**tar.bz2.md5 | tail -1) ekg2-current.tar.bz2.md5

