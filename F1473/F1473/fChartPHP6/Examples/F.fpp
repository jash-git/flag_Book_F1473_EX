17       	 <--SHAPES
19       	 <--LINES
id1
2       	 <--TYPE
120       	 <--LEFT
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
92       	 <--TYPE
253       	 <--LEFT
261       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
PARAM
1

id3
3       	 <--TYPE
422       	 <--LEFT
281       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id5
2       	 <--TYPE
571       	 <--LEFT
162       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id6
0       	 <--TYPE
464       	 <--LEFT
266       	 <--TOP
100       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
1

id7
93       	 <--TYPE
268       	 <--LEFT
332       	 <--TOP
148       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
f
a
t
id8
0       	 <--TYPE
101       	 <--LEFT
265       	 <--TOP
92       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
a
PARAM

id9
0       	 <--TYPE
97       	 <--LEFT
331       	 <--TOP
100       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
a
1
a
id10
0       	 <--TYPE
463       	 <--LEFT
402       	 <--TOP
100       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
t

id11
0       	 <--TYPE
280       	 <--LEFT
401       	 <--TOP
124       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
MULTIPLY
t
PARAM
t
id12
3       	 <--TYPE
601       	 <--LEFT
418       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id14
92       	 <--TYPE
252       	 <--LEFT
157       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
PARAM
0

id13
3       	 <--TYPE
422       	 <--LEFT
177       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id15
92       	 <--TYPE
252       	 <--LEFT
51       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS
PARAM
0

id16
3       	 <--TYPE
601       	 <--LEFT
280       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id17
0       	 <--TYPE
425       	 <--LEFT
60       	 <--TOP
196       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
RETURN
"­t¾ã¼Æ!"

id18
3       	 <--TYPE
518       	 <--LEFT
172       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



  
---- LINES ---- from,to ----
id2,id3
reserved 1
YES
id3,id6
reserved 1

id8,id9
reserved 1

id9,id7
reserved 1

id11,id10
reserved 1

id7,id11
reserved 1

id10,id12
reserved 1

id14,id13
reserved 1
YES
id14,id2
reserved 1
NO
id13,id3
reserved 1

id1,id15
reserved 1

id6,id16
reserved 1

id12,id16
reserved 1

id16,id5
reserved 1

id15,id17
reserved 1
YES
id15,id14
reserved 1
NO
id17,id18
reserved 1

id18,id5
reserved 1

id2,id8
reserved 1
NO
