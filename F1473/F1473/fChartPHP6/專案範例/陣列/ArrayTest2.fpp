16       	 <--SHAPES
15       	 <--LINES
id1
2       	 <--TYPE
169       	 <--LEFT
73       	 <--TOP
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
289       	 <--LEFT
453       	 <--TOP
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
141       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
i
0

id5
0       	 <--TYPE
122       	 <--LEFT
265       	 <--TOP
137       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
Size[1]
1+Size[i]

id6
91       	 <--TYPE
282       	 <--LEFT
260       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT

Size[1]

id7
0       	 <--TYPE
294       	 <--LEFT
329       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
j
1

id8
91       	 <--TYPE
413       	 <--LEFT
326       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT

Size[i][j]

id9
0       	 <--TYPE
569       	 <--LEFT
400       	 <--TOP
102       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
temp
Size[i]

id10
91       	 <--TYPE
392       	 <--LEFT
448       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT

temp

id11
91       	 <--TYPE
676       	 <--LEFT
214       	 <--TOP
212       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
Input Array variable: 
Size[0][1]

id12
91       	 <--TYPE
448       	 <--LEFT
213       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT

Size[0][1]

id13
91       	 <--TYPE
507       	 <--LEFT
70       	 <--TOP
208       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
Input Array Variable: 
Size[i][j]

id14
0       	 <--TYPE
281       	 <--LEFT
73       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
i
0

id15
91       	 <--TYPE
565       	 <--LEFT
142       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT

Size[i][j]

id16
0       	 <--TYPE
387       	 <--LEFT
74       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
j
0

id17
93       	 <--TYPE
126       	 <--LEFT
191       	 <--TOP
129       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
Rnd
100|
Size[0]
  
---- LINES ---- from,to ----
id5,id6
0

id6,id7
0

id7,id8
0

id8,id9
0

id9,id10
0

id10,id2
0

id11,id12
0

id12,id3
0

id1,id14
0

id13,id15
0

id15,id11
0

id14,id16
0

id16,id13
0

id3,id17
1

id17,id5
0

