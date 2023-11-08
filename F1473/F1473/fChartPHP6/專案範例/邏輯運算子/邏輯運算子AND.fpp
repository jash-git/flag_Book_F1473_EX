7       	 <--SHAPES
7       	 <--LINES
id1
2       	 <--TYPE
298       	 <--LEFT
61       	 <--TOP
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
298       	 <--LEFT
419       	 <--TOP
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
287       	 <--LEFT
121       	 <--TOP
90       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
test
100

id4
0       	 <--TYPE
286       	 <--LEFT
178       	 <--TOP
90       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
count
55

id5
92       	 <--TYPE
228       	 <--LEFT
240       	 <--TOP
208       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_AND
test|IF_GREATER|150
count|IF_NOTEQUAL|50

id6
91       	 <--TYPE
287       	 <--LEFT
345       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
成立


id7
91       	 <--TYPE
489       	 <--LEFT
246       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
不成立


  
---- LINES ---- from,to ----
id1,id3
0

id3,id4
0

id4,id5
0

id5,id6
0
YES
id5,id7
0
NO
id6,id2
0

id7,id2
0

