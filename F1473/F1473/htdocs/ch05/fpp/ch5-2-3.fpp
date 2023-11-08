10       	 <--SHAPES
12       	 <--LINES
id1
2       	 <--TYPE
286       	 <--LEFT
89       	 <--TOP
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
283       	 <--LEFT
483       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id4
92       	 <--TYPE
259       	 <--LEFT
186       	 <--TOP
124       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER_EQUAL
grade
80

id5
91       	 <--TYPE
269       	 <--LEFT
408       	 <--TOP
100       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
ヒ单!


id7
92       	 <--TYPE
396       	 <--LEFT
246       	 <--TOP
124       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER_EQUAL
grade
70

id11
91       	 <--TYPE
408       	 <--LEFT
409       	 <--TOP
97       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
单!


id12
91       	 <--TYPE
539       	 <--LEFT
410       	 <--TOP
97       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
单!


id10
92       	 <--TYPE
532       	 <--LEFT
315       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER_EQUAL
grade
60

id16
91       	 <--TYPE
659       	 <--LEFT
413       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
单!


id3
0       	 <--TYPE
280       	 <--LEFT
137       	 <--TOP
82       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
grade
65

  
---- LINES ---- from,to ----
id5,id2
0

id4,id5
0
YES
id10,id12
0
YES
id1,id3
0

id3,id4
0

id4,id7
0
NO
id7,id10
0
NO
id10,id16
0
NO
id7,id11
0
YES
id11,id2
0

id12,id2
0

id16,id2
0

