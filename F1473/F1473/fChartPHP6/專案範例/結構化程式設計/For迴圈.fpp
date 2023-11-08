8       	 <--SHAPES
8       	 <--LINES
id1
2       	 <--TYPE
199       	 <--LEFT
84       	 <--TOP
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
198       	 <--LEFT
413       	 <--TOP
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
190       	 <--LEFT
192       	 <--TOP
86       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
counter
1

id5
92       	 <--TYPE
154       	 <--LEFT
254       	 <--TOP
159       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS_EQUAL
counter
maxNum

id7
0       	 <--TYPE
384       	 <--LEFT
263       	 <--TOP
165       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
sum
counter
sum
id11
0       	 <--TYPE
574       	 <--LEFT
263       	 <--TOP
145       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
counter
1
counter
id13
91       	 <--TYPE
163       	 <--LEFT
351       	 <--TOP
142       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
累加總和=
sum

id9
91       	 <--TYPE
140       	 <--LEFT
133       	 <--TOP
186       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
請輸入最大值
maxNum

  
---- LINES ---- from,to ----
id5,id7
0
YES
id13,id2
0

id1,id9
0

id9,id3
0

id7,id11
0

id5,id13
1
NO
id3,id5
0

id11,id5
27

