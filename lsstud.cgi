#!/bin/sh

#
#  Sample Bourne Shell script to list a directory on the 
#  Stern Web Server
#
# Norman White, February 2013
#
#  Only works for Stern students
#  Only lists the contents of their websys subdirectory
#  Assumes the input is on the command line
#
# in the form
http://www.stern.nyu.edu/~nwhite/lsstud.cgi?fchar=a&userid=aab211
# or is passed from the web server as a "GET" action in a cgi program
#
# part 1 - Generate intro html to put in front of output
#  output the header line to tell browser what content to expect
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

# uncomment below for help in debugging
#set

# Tricky stuff, use sed to get rid of the & between fields
# so you have a line like:
# set fchar=a userid=aab211
# this sets local shell variables for each of the 
# form field values
# so they can be used to generate the directory path
# See http://www.stern.nyu.edu/~nwhite/websys/lsstud.html for an example form to 
# invoke this script
# note, this script MUST be named .cgi in order to be run
# on the Stern web server
# also, you need to do a chmod o+rx on it so it is executable

# The "eval" line creates a shell variable for each form field
# by issuing a 
#  field1=value1 field2=value2 etc

# The values of these variables can now be used later in the script
# by putting a $ in front of them
# "eval line echos the input line and pipes it to a sed program that changes
# & to blank, hence fchar=a&userid=aab211 becomes 
#  fchar=a userid=aab211

# Create environment variables for each form input variable
#  substitutes a " " for every "&" in QUERY_STRING and then tells the shell program
# to execute the line, thereby creating new variables for every form field (i.e. userid=aa211 fchar=a)

eval  ` ( echo $QUERY_STRING | sed -e "s/\&/ /g") `

# Note need the { } around userid because of the trailing :

echo Doing directory listing for user ${userid}:\<p\>


# assume student is a grad student

ls -m /homedir/grad/$fchar/$userid/public_html/websys/
#

echo "</pre>"
echo "</BODY></HTML>"
