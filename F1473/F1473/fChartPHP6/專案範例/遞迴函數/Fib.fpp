9       	 <--SHAPES
9       	 <--LINES
id1
2       	 <--TYPE
286       	 <--LEFT
59       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
START
p1,p2,t1,t2


id2
2       	 <--TYPE
285       	 <--LEFT
430       	 <--TOP
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
262       	 <--LEFT
126       	 <--TOP
117       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS_EQUAL
PARAM
2

id5
0       	 <--TYPE
274       	 <--LEFT
262       	 <--TOP
95       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
1

id6
93       	 <--TYPE
452       	 <--LEFT
283       	 <--TOP
91       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
Fib
p1|
t1
id7
0       	 <--TYPE
438       	 <--LEFT
134       	 <--TOP
115       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
PARAM
2
p1
id8
0       	 <--TYPE
439       	 <--LEFT
214       	 <--TOP
115       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
PARAM
1
p2
id9
93       	 <--TYPE
451       	 <--LEFT
353       	 <--TOP
91       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
Fib
p2|
t2
id10
0       	 <--TYPE
434       	 <--LEFT
430       	 <--TOP
126       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
t1
t2
RETURN
  
---- LINES ---- from,to ----
id4,id5
0
YES
id5,id2
0

id4,id7
0
NO
id9,id10
0

id10,id2
0

id7,id8
0

id8,id6
0

id6,id9
0

id1,id4
0

