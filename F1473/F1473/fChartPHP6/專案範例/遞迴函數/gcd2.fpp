6       	 <--SHAPES
6       	 <--LINES
id1
2       	 <--TYPE
284       	 <--LEFT
60       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
START



id2
2       	 <--TYPE
284       	 <--LEFT
375       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id5
92       	 <--TYPE
241       	 <--LEFT
192       	 <--TOP
155       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
c
0

id6
0       	 <--TYPE
234       	 <--LEFT
291       	 <--TOP
169       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
PARAM1
tmp
id8
0       	 <--TYPE
231       	 <--LEFT
130       	 <--TOP
175       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
MOD
PARAM
PARAM1
c
id9
93       	 <--TYPE
463       	 <--LEFT
198       	 <--TOP
192       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
gcd2
PARAM1|c
RETURN
  
---- LINES ---- from,to ----
id5,id6
0
YES
id1,id8
0

id8,id5
0

id6,id2
0

id5,id9
0
NO
id9,id2
0

