7       	 <--SHAPES
6       	 <--LINES
id1
2       	 <--TYPE
180       	 <--LEFT
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
431       	 <--LEFT
361       	 <--TOP
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
264       	 <--LEFT
96       	 <--TOP
143       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
輸入攝氏溫度
C

id5
0       	 <--TYPE
264       	 <--LEFT
249       	 <--TOP
139       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
tmp
32.0
F
id6
91       	 <--TYPE
258       	 <--LEFT
297       	 <--TOP
150       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
華氏溫度:
F

id7
0       	 <--TYPE
276       	 <--LEFT
153       	 <--TOP
116       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
MULTIPLY
C
9.0
tmp
id12
0       	 <--TYPE
276       	 <--LEFT
201       	 <--TOP
116       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DIVIDE
tmp
5.0
tmp
  
---- LINES ---- from,to ----
id5,id6
0

id6,id2
0

id1,id3
0

id12,id5
0

id3,id7
0

id7,id12
0

