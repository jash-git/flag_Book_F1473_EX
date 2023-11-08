8       	 <--SHAPES
8       	 <--LINES
id1
2       	 <--TYPE
270       	 <--LEFT
56       	 <--TOP
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
398       	 <--LEFT
350       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id3
91       	 <--TYPE
256       	 <--LEFT
187       	 <--TOP
96       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
255       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
¤j®a¦n!
a

id4
92       	 <--TYPE
265       	 <--LEFT
276       	 <--TOP
81       	 <--WIDTH
81       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
a
5

id5
3       	 <--TYPE
429       	 <--LEFT
311       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
255       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id6
0       	 <--TYPE
112       	 <--LEFT
297       	 <--TOP
92       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
a
1
a
id7
3       	 <--TYPE
153       	 <--LEFT
203       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
255       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id8
0       	 <--TYPE
270       	 <--LEFT
115       	 <--TOP
70       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
a
1

  
---- LINES ---- from,to ----
id4,id5
reserved 1
YES
id5,id2
reserved 1

id4,id6
reserved 1
NO
id6,id7
reserved 1

id7,id3
reserved 1

id3,id4
reserved 1

id8,id3
reserved 1

id1,id8
reserved 1

