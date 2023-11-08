13       	 <--SHAPES
13       	 <--LINES
id1
2       	 <--TYPE
187       	 <--LEFT
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
304       	 <--LEFT
433       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
STOP



id5
93       	 <--TYPE
478       	 <--LEFT
261       	 <--TOP
92       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
pow

m
id6
91       	 <--TYPE
265       	 <--LEFT
371       	 <--TOP
148       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
計算結果是: 
m

id3
91       	 <--TYPE
100       	 <--LEFT
107       	 <--TOP
244       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
請輸數數字的底數
x

id4
91       	 <--TYPE
384       	 <--LEFT
107       	 <--TOP
210       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INPUT
請輸入指數
n

id7
92       	 <--TYPE
278       	 <--LEFT
256       	 <--TOP
112       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER_EQUAL
n
0

id8
0       	 <--TYPE
108       	 <--LEFT
265       	 <--TOP
100       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
MULTIPLY
n
-1
n
id9
93       	 <--TYPE
112       	 <--LEFT
319       	 <--TOP
92       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
FUNCTION
pow

m
id10
0       	 <--TYPE
112       	 <--LEFT
377       	 <--TOP
92       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DIVIDE
1
m
m
id11
3       	 <--TYPE
519       	 <--LEFT
386       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id12
93       	 <--TYPE
439       	 <--LEFT
179       	 <--TOP
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
id13
3       	 <--TYPE
329       	 <--LEFT
194       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



  
---- LINES ---- from,to ----
id6,id2
reserved 1

id1,id3
reserved 1

id3,id4
reserved 1

id7,id5
reserved 1
YES
id7,id8
reserved 1
NO
id8,id9
reserved 1

id9,id10
reserved 1

id10,id6
reserved 1

id5,id11
reserved 1

id11,id6
reserved 1

id4,id12
reserved 1

id12,id13
reserved 1

id13,id7
reserved 1

