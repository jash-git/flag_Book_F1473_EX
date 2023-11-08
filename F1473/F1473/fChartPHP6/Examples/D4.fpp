18       	 <--SHAPES
18       	 <--LINES
id1
2       	 <--TYPE
134       	 <--LEFT
54       	 <--TOP
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
265       	 <--LEFT
461       	 <--TOP
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
278       	 <--LEFT
54       	 <--TOP
164       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
a
TextArea1.Text

id4
0       	 <--TYPE
435       	 <--LEFT
410       	 <--TOP
124       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
a
PARAM
a
id5
0       	 <--TYPE
219       	 <--LEFT
410       	 <--TOP
164       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
TextArea1.Text
a

id6
92       	 <--TYPE
292       	 <--LEFT
104       	 <--TOP
136       	 <--WIDTH
81       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
IF_EQUAL
FirstDot
1

id8
0       	 <--TYPE
502       	 <--LEFT
130       	 <--TOP
108       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
a
","
a
id7
0       	 <--TYPE
111       	 <--LEFT
168       	 <--TOP
148       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
FirstDot
PARAM

id11
0       	 <--TYPE
123       	 <--LEFT
220       	 <--TOP
124       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
PREV
PARAM

id12
0       	 <--TYPE
420       	 <--LEFT
359       	 <--TOP
156       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
Picture1.Line
t

id13
0       	 <--TYPE
514       	 <--LEFT
310       	 <--TOP
84       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
t
PREV

id14
0       	 <--TYPE
382       	 <--LEFT
309       	 <--TOP
108       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
t
","
t
id15
0       	 <--TYPE
211       	 <--LEFT
309       	 <--TOP
124       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
JOIN
t
PARAM
t
id16
0       	 <--TYPE
214       	 <--LEFT
358       	 <--TOP
116       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
PREV
PARAM

id9
3       	 <--TYPE
179       	 <--LEFT
138       	 <--TOP
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
87       	 <--LEFT
268       	 <--TOP
196       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
Button3.Visible
True

id10
3       	 <--TYPE
551       	 <--LEFT
279       	 <--TOP
10       	 <--WIDTH
10       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
INTERSECTION



id18
0       	 <--TYPE
315       	 <--LEFT
269       	 <--TOP
188       	 <--WIDTH
30       	 <--HEIGHT
16777215       	 <--BACKCOLOR
0       	 <--BORDERCOLOR
0       	 <--BORDERCOLOR
-reserved 1-
-reserved 2-
DEFINITION
txtURL.Visible
True

  
---- LINES ---- from,to ----
id1,id3
reserved 1

id4,id5
reserved 1

id5,id2
reserved 1

id3,id6
reserved 1

id6,id8
reserved 1
NO
id7,id11
reserved 1

id13,id14
reserved 1

id14,id15
reserved 1

id15,id16
reserved 1

id16,id12
reserved 1

id12,id4
reserved 1

id6,id9
reserved 1
YES
id9,id7
reserved 1

id11,id17
reserved 1

id8,id10
reserved 1

id10,id13
reserved 1

id17,id18
reserved 1

id18,id10
reserved 1

