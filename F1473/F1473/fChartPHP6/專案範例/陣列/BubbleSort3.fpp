24       	 <--SHAPES
28       	 <--LINES
id1
2       	 <--TYPE
168       	 <--LEFT
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
283       	 <--LEFT
637       	 <--TOP
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
382       	 <--LEFT
56       	 <--TOP
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
92       	 <--TYPE
361       	 <--LEFT
106       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS
i
LEN

id6
93       	 <--TYPE
344       	 <--LEFT
196       	 <--TOP
151       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
Rnd
100|200
Data[i]
id7
0       	 <--TYPE
536       	 <--LEFT
201       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
i
1
i
id9
0       	 <--TYPE
295       	 <--LEFT
367       	 <--TOP
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

id10
92       	 <--TYPE
274       	 <--LEFT
426       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS
i
5

id12
0       	 <--TYPE
258       	 <--LEFT
531       	 <--TOP
140       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
sum
Data[i]
sum
id13
91       	 <--TYPE
474       	 <--LEFT
527       	 <--TOP
115       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
<{0}>{-}
Data[i]

id14
0       	 <--TYPE
627       	 <--LEFT
531       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
i
1
i
id16
91       	 <--TYPE
105       	 <--LEFT
572       	 <--TOP
90       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT



id17
91       	 <--TYPE
269       	 <--LEFT
573       	 <--TOP
98       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
Sum=
sum

id18
0       	 <--TYPE
182       	 <--LEFT
230       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
y
LEN

id19
92       	 <--TYPE
272       	 <--LEFT
276       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER
y
1

id20
0       	 <--TYPE
573       	 <--LEFT
286       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
x
0

id22
92       	 <--TYPE
758       	 <--LEFT
275       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS_EQUAL
x
y-2

id25
92       	 <--TYPE
958       	 <--LEFT
347       	 <--TOP
155       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_LESS
Data[x+1]
Data[x]

id26
0       	 <--TYPE
973       	 <--LEFT
440       	 <--TOP
122       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
temp
Data[x+1]

id27
0       	 <--TYPE
968       	 <--LEFT
491       	 <--TOP
135       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
Data[x+1]
Data[x]

id28
0       	 <--TYPE
977       	 <--LEFT
542       	 <--TOP
117       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
Data[x]
temp

id29
0       	 <--TYPE
776       	 <--LEFT
355       	 <--TOP
73       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
ADD
x
1
x
id35
0       	 <--TYPE
661       	 <--LEFT
229       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
SUBTRACT
y
1
y
id37
0       	 <--TYPE
283       	 <--LEFT
56       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
LEN
6

  
---- LINES ---- from,to ----
id5,id6
0
YES
id6,id7
0

id10,id12
0
YES
id12,id13
0

id13,id14
0

id10,id16
1
NO
id16,id17
0

id17,id2
0

id5,id18
1
NO
id19,id20
0
YES
id25,id26
0
YES
id26,id27
0

id27,id28
0

id25,id29
0
NO
id1,id37
0

id37,id3
0

id29,id22
0

id20,id22
0

id3,id5
0

id7,id5
0

id18,id19
1

id35,id19
1

id19,id9
0
NO
id22,id35
0
NO
id22,id25
0
YES
id28,id29
1

id9,id10
0

id14,id10
0

