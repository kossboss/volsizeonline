NOTE: latest code is actually at URL listed below, not in the Github Repo

volsizeonline
=============

Volsize online XRAID NETGEAR Calc

How to run
===========

Running copy is on ram.kossboss.com/xraid
If you wanna run it your self just run html file in src called index.html (which used to be called xraid.html)

What this does
===============

This calculates the XRAID and FLEXRAID volumes of Netgear READYNAS
XRAID and FLEXRAID can either be setup as RAID1, RAID5 or RAID6 (in the newer NASes even RAID10 or RAID0)

URL: ram.kossboss.com/xraid
CURRENT CODE HERE: 1.8
CURRENT CODE IN URL: much newer
TO SEE SOURCE CODE: Right click in your browser and hit View Source code. Im hiding nothing.

This calculator doesnt take into account:
1. expansion, and it wont, i dont want to put the time variable into it (or initial setup and new setup)
so consider the results are as if you just factory defaulted
2. it doesnt take into account vdevs (such as ones you can get with ReadyDATA)
3. Only 12 drives

What can this be used for other then XRAID or FLEXRAID?
===============================================================
This can calculate RAID5 and RAID6 space for you
Traditional RAID5 and RAID6 use all drives of the same size (or they pick the smallest one of the bunch to be the "base drive").

Ex1:
So if you have a system of ten 6 TB then just put in 6000 ten times and hit ENTER, you will see the RAID5 and RAID6 values (ignore the filesystem values, as those take into account overhead from XRAID and EXT filesystem and also the conversion from BASE10 to BASE2 volume sizes)

Ex2:
So if you have a system of the following:
1000 gb 2000 gb 3000 gb and 4000 gb
You can put those values in to see how big a system with XRAID or FLEXRAID will be in a RAID5 or RAID6 setup.
HOWEVER if you want to see how TRADITIONAL RAID 5 or RAID6 do just put in
1000 gb 1000 gb 1000 gb and 1000 gb
You will see the losses with TRADITIONAL RAID 5 or RAID6

So whats the difference between TRADITIONAL RAID (raid5/6) and XRAID/FLEXRAID (raid5/6):
=========================================================================================

Traditional raid doesnt use extra space wisely. So thats where XRAID and FLEXRAID come in.

UPDATE NOTES
=============

At the bottom of the html file
