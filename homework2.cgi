#!/bin/sh

#
#  Sample Bourne Shell script to list a directory on the 
#  Stern Web Server
#
# Chen Zhu, February 26th 2014
#
#  Only works for Stern students
#  Only lists the contents of their websys subdirectory
#  Assumes the input is on the command line
#

echo "Content-type: text/html"
# output a blank line after the Content-type line
echo
echo "<HTML><HEAD>"
echo "<TITLE> Directory Listing</TITLE>"
echo "</HEAD> <BODY>"
echo "<pre>"

# remove next few lines for working script
echo The arguments to the script are: $*
# Environment Variable QUERY_STRING contains form fields
echo QUERY_STRING contains $QUERY_STRING

# eval used to eliminate the & between each variables
eval `( echo $QUERY_STRING | sed -e "s/\&/ /g")`

# get first character using cut command
fchar=`echo $userid|cut -c1-1`
echo The first char of the userid is: $fchar

# Note need the { } around userid because of the trailing :
echo Doing directory listing for user ${userid}:\<p\>


# assume student is a grad student,list the content by
# time modified
echo "<p><a href="http://www.stern.nyu.edu/~$userid/websys/">"
ls -t /homedir/grad/$fchar/$userid/public_html/websys/
echo "</a></p>"

echo "</pre>"
echo "</BODY></HTML>"
