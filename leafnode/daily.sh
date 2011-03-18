#!/bin/sh
#tworzymy pliki potrzebne do robienia ChangeLoga i NEWS'ów
cd ~/work

svn co http://toxygen.net/svn/ekg2/trunk/ ekg2

# rcs2log nie dziala.

touch ~/ChangeLog

cp -R ~/ChangeLog ~/ekg2/tmp/
rm ~/ChangeLog
cp ~/work/ekg2/NEWS ~/ekg2/tmp/
cp ~/work/ekg2/NEWS.en ~/ekg2/tmp/

rm daily.sh.output daily.sh.output.err
touch daily.sh.output daily.sh.output.err

# DOXYGEN

cd ~/work/ekg2/ekg

# Stworz polskiego doxygena

~/doxygen-generate.sh > daily.sh.output 2> daily.sh.output.err
rm -rf ~/ekg2/doxygen/ >> daily.sh.output 2>> daily.sh.output.err
mv ~/work/ekg2/ekg/doxygen-pl ~/ekg2/doxygen  >> daily.sh.output 2>> daily.sh.output.err
chmod -R 705 ~/ekg2/doxygen >> daily.sh.output 2>> daily.sh.output.err

# Stworz angielskiego doxygena

~/doxygen-generate-en.sh > daily.sh.output 2> daily.sh.output.err
rm -rf ~/ekg2/en/doxygen/ >> daily.sh.output 2>> daily.sh.output.err
mv ~/work/ekg2/ekg/doxygen-en ~/ekg2/en/doxygen  >> daily.sh.output 2>> daily.sh.output.err
chmod -R 705 ~/ekg2/en/doxygen >> daily.sh.output 2>> daily.sh.output.err

# EKG2BOOK

# export XML_CATALOG_FILES=~/xml

# Stworz polskiego ekg2booka

# cd ~/work/ekg2/docs/ekg2book
# make >> daily.sh.output 2>> daily.sh.output.err
# rm -rf ~/ekg2/ekg2book >> daily.sh.output 2>> daily.sh.output.err
# mv ~/work/ekg2/docs/ekg2book/book/ ~/ekg2/ekg2book >> daily.sh.output 2>> daily.sh.output.err
# chmod -R 705 ~/ekg2/ekg2book >> daily.sh.output 2>> daily.sh.output.err

# Stworz angielskiego ekg2booka

# cd ~/work/ekg2/docs/ekg2book-en
# make >> daily.sh.output 2>> daily.sh.output.err
# rm -rf ~/ekg2/en/ekg2book >> daily.sh.output 2>> daily.sh.output.err
# mv ~/work/ekg2/docs/ekg2book-en/book/ ~/ekg2/en/ekg2book >> daily.sh.output 2>> daily.sh.output.err
# chmod -R 705 ~/ekg2/en/ekg2book >> daily.sh.output 2>> daily.sh.output.err
 
#ustawiamy prawa
chmod 604 ~/ekg2/tmp/ChangeLog ~/ekg2/tmp/NEWS ~/ekg2/tmp/NEWS.en >> daily.sh.output 2>> daily.sh.output.err

# SNAPSHOTS

# tworzymy snapshoty 
cd ~
./ekgsnap.sh  >> daily.sh.output 2>> daily.sh.output.err
