9       	 <--SHAPES
10       	 <--LINES
id1
2       	 <--TYPE
288       	 <--LEFT
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
286       	 <--LEFT
375       	 <--TOP
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
242       	 <--LEFT
131       	 <--TOP
163       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
PARAM
PARAM1

id4
0       	 <--TYPE
255       	 <--LEFT
244       	 <--TOP
134       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
PARAM

id5
92       	 <--TYPE
448       	 <--LEFT
131       	 <--TOP
155       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER
PARAM
PARAM1

id6
0       	 <--TYPE
442       	 <--LEFT
228       	 <--TOP
169       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
PARAM
PARAM1
tmp
id7
93       	 <--TYPE
428       	 <--LEFT
297       	 <--TOP
196       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
gcd
tmp|PARAM1
RETURN
id8
0       	 <--TYPE
652       	 <--LEFT
140       	 <--TOP
169       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
PARAM1
PARAM
tmp
id9
93       	 <--TYPE
642       	 <--LEFT
214       	 <--TOP
189       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
gcd
PARAM|tmp
RETURN
  
---- LINES ---- from,to ----
id1,id3
0

id3,id4
0
YES
id4,id2
0

id3,id5
0
NO
id5,id6
0
YES
id6,id7
0

id5,id8
0
NO
id8,id9
0

id7,id2
0

id9,id2
0

