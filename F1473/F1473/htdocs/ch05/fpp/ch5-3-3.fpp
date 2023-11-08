10       	 <--SHAPES
10       	 <--LINES
id1
2       	 <--TYPE
284       	 <--LEFT
58       	 <--TOP
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
466       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id3
0       	 <--TYPE
284       	 <--LEFT
106       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
year
0

id4
0       	 <--TYPE
260       	 <--LEFT
151       	 <--TOP
119       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
amount
10000

id5
92       	 <--TYPE
251       	 <--LEFT
339       	 <--TOP
134       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS
amount
20000

id7
0       	 <--TYPE
237       	 <--LEFT
198       	 <--TOP
165       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
MULTIPLY
amount
0.12
interest
id8
0       	 <--TYPE
224       	 <--LEFT
246       	 <--TOP
191       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
amount
interest
amount
id11
0       	 <--TYPE
265       	 <--LEFT
295       	 <--TOP
109       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
year
1
year
id13
91       	 <--TYPE
248       	 <--LEFT
404       	 <--TOP
142       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
本利和=
amount

id9
91       	 <--TYPE
418       	 <--LEFT
404       	 <--TOP
103       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
年數=
year

  
---- LINES ---- from,to ----
id3,id4
0

id1,id3
0

id7,id8
0

id8,id11
0

id11,id5
0

id4,id7
0

id9,id13
0

id13,id2
0

id5,id9
0
NO
id5,id7
-80
YES
