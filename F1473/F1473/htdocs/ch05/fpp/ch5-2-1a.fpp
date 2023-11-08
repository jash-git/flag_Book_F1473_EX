5       	 <--SHAPES
5       	 <--LINES
id1
2       	 <--TYPE
286       	 <--LEFT
64       	 <--TOP
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
285       	 <--LEFT
313       	 <--TOP
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
261       	 <--LEFT
158       	 <--TOP
120       	 <--WIDTH
50       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_GREATER_EQUAL
grade
60

id5
91       	 <--TYPE
248       	 <--LEFT
255       	 <--TOP
146       	 <--WIDTH
40       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
OUTPUT
¦¨ÁZ¤Î®æ= 
grade

id8
0       	 <--TYPE
279       	 <--LEFT
110       	 <--TOP
83       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
grade
75

  
---- LINES ---- from,to ----
id5,id2
0

id1,id8
0

id8,id4
0

id4,id5
0
YES
id4,id2
-70
NO
