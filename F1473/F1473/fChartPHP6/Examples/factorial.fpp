15       	 <--SHAPES
15       	 <--LINES
id1
2       	 <--TYPE
168       	 <--LEFT
58       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
START
n,i


id2
93       	 <--TYPE
166       	 <--LEFT
345       	 <--TOP
148       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
f
n
b
id3
91       	 <--TYPE
88       	 <--LEFT
167       	 <--TOP
80       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
255       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT

s

id4
2       	 <--TYPE
543       	 <--LEFT
288       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id5
91       	 <--TYPE
301       	 <--LEFT
167       	 <--TOP
244       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
16711680       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
請輸入一個數字:
n

id6
92       	 <--TYPE
363       	 <--LEFT
278       	 <--TOP
120       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
i
0

id10
93       	 <--TYPE
190       	 <--LEFT
283       	 <--TOP
100       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
Fix
n
n
id8
91       	 <--TYPE
328       	 <--LEFT
103       	 <--TOP
190       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
輸入 'exit' 來結束執行


id9
0       	 <--TYPE
345       	 <--LEFT
228       	 <--TOP
156       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
COMP
n
"exit"
i
id13
0       	 <--TYPE
138       	 <--LEFT
403       	 <--TOP
204       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
"階層 "
n
s
id14
0       	 <--TYPE
376       	 <--LEFT
403       	 <--TOP
140       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
s
"! 的值是: "
s
id15
0       	 <--TYPE
540       	 <--LEFT
403       	 <--TOP
92       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
s
b
s
id16
3       	 <--TYPE
581       	 <--LEFT
454       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id17
3       	 <--TYPE
123       	 <--LEFT
454       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id7
3       	 <--TYPE
418       	 <--LEFT
67       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



  
---- LINES ---- from,to ----
id8,id5
reserved 1

id6,id10
reserved 1
NO
id10,id2
reserved 1

id5,id9
reserved 1

id9,id6
reserved 1

id2,id13
reserved 1

id13,id14
reserved 1

id14,id15
reserved 1

id15,id16
reserved 1

id6,id4
reserved 1
YES
id16,id17
reserved 1

id17,id3
reserved 1

id3,id5
reserved 1

id1,id7
reserved 1

id7,id8
reserved 1

