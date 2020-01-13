# 1. Write a Perl program to check that a string contains only a certain set of characters 
# (in this case a-z, A-Z and 0-9).

#!/usr/bin/perl
use strict;
use warnings;

print "enter string (only a-z, A-Z and 0-9):->> ";
my $str = <>;
if($str =~ /^[0-9,a-z,A-Z]+$/){
    print "$str\n";
    print "Valid\n";
} else {
    print "$str\n";
	print "Not Valid \n ";
}






