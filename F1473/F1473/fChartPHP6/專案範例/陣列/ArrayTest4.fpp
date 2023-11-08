9       	 <--SHAPES
8       	 <--LINES
id1
2       	 <--TYPE
282       	 <--LEFT
58       	 <--TOP
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
385       	 <--TOP
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
279       	 <--LEFT
113       	 <--TOP
79       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
a[0]
212

id4
0       	 <--TYPE
279       	 <--LEFT
164       	 <--TOP
80       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
a[1]
a[x]

id5
0       	 <--TYPE
235       	 <--LEFT
217       	 <--TOP
168       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
c
(5.0 / 9.0 ) * (a[y]- 32)

id6
91       	 <--TYPE
266       	 <--LEFT
326       	 <--TOP
108       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
攝氏{0}度
c

id7
91       	 <--TYPE
233       	 <--LEFT
268       	 <--TOP
171       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
華氏{0}度轉換成{-}
a[x]

id8
0       	 <--TYPE
392       	 <--LEFT
57       	 <--TOP
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

id9
0       	 <--TYPE
393       	 <--LEFT
114       	 <--TOP
70       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
y
1

  
---- LINES ---- from,to ----
id3,id4
reserved 1

id4,id5
reserved 1

id6,id2
reserved 1

id5,id7
reserved 1

id7,id6
reserved 1

id1,id8
reserved 1

id8,id9
reserved 1

id9,id3
reserved 1

