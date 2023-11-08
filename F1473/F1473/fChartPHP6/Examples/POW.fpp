8       	 <--SHAPES
8       	 <--LINES
id1
2       	 <--TYPE
284       	 <--LEFT
61       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
START
x,n,m


id2
2       	 <--TYPE
458       	 <--LEFT
342       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id3
92       	 <--TYPE
263       	 <--LEFT
125       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
n
0

id4
0       	 <--TYPE
443       	 <--LEFT
133       	 <--TOP
100       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
1

id5
0       	 <--TYPE
100       	 <--LEFT
134       	 <--TOP
92       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
n
1
n
id6
93       	 <--TYPE
96       	 <--LEFT
201       	 <--TOP
100       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
pow

m
id7
0       	 <--TYPE
100       	 <--LEFT
275       	 <--TOP
92       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
MULTIPLY
x
m
x
id8
0       	 <--TYPE
96       	 <--LEFT
342       	 <--TOP
100       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
x

  
---- LINES ---- from,to ----
id1,id3
reserved 1

id3,id4
reserved 1
YES
id4,id2
reserved 1

id3,id5
reserved 1
NO
id5,id6
reserved 1

id6,id7
reserved 1

id7,id8
reserved 1

id8,id2
reserved 1

