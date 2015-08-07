Switch
================================================================================

Switch snippet that emulates the PHP switch method.

Installation:
--------------------------------------------------------------------------------
MODX Package Management

Parameters
--------------------------------------------------------------------------------
The Snippet uses the following parameters:

&get = input parameter

&c1, &c2, &c3 = switch cases

&do1, &do2, &do3 = output for matching case

The cases don't have to be numeric and you could use an unlimited list of cases.
A &cxxx case must have an appropriate &doxxx parameter.

&default (optional) = returned default value, if no matching case is found, if
the &doxxx parameter is missing or if the &get parameter is empty.

Examples
--------------------------------------------------------------------------------

[[!switch?
&get=`3`
&c1=`1` &do1=`one`
&c2=`2` &do2=`two`
&c3=`3` &do3=`three`
&c4=`4` &do4=`four`
&default=`default value`
]]

returns 'three'

[[!switch?
&get=`xxx`
&c1=`1` &do1=`one`
&c2=`2` &do2=`two`
&c3=`3` &do3=`three`
&c4=`4` &do4=`four`
&default=`default value`
]]

returns 'default value'