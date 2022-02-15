<!--

Programmer: Mohammad R. Tayyebi <smile@tyyi.net>
Superviser: Kimia TaherAnvarian <k.taheranvarian@gmail.com>


Based on https://nineplanets.org/estimating-limiting-magnitude/
    Limiting magnitude is used to evaluate the quality of observing conditions. It tells the magnitude of the faintest star visible to the unaided eye. The limiting magnitude could also be observed by some instrument. It describes well the sky’s transparency: better transparency means that fainter stars are visible.
    Limiting magnitude is used eg. in meteor and deep sky observations. It can be used also to approximate light pollution.
    The simplest way to evaluate limiting magnitude is to find suitable stars with known magnitudes from star map and check which of them are visible. A more clever way is to count visible stars inside known star squares and triangles. This method was originally invented by meteor observers.
    The Method:
        1.  Wait for your eyes to dark adapt (at least 30 minutes).
        2.  Choose one of the estimating areas from the image map above (or the larger version here) or one of the links below; the resulting page has a larger sky chart and a limiting magnitude table.
        3.  Count the total number of stars you see in the area including the corners.
        4.  Look up that number in the table and read off your limiting magnitude.
    Notes:
        -   You may see more (or fewer) stars than are plotted on the charts.
        -   Different people may get different results.

-->
<?php
$stars = [						
    //  area_no,    stars_count,    LM
    [	1	,	2	,	3.2	],
    [	1	,	3	,	3.7	],
    [	1	,	4	,	3.9	],
    [	1	,	5	,	4.2	],
    [	1	,	6	,	4.9	],
    [	1	,	8	,	5	],
    [	1	,	9	,	5.2	],
    [	1	,	10	,	5.3	],
    [	1	,	11	,	6	],
    [	1	,	12	,	6.1	],
    [	1	,	15	,	6.3	],
    [	1	,	16	,	6.4	],
    [	1	,	17	,	6.5	],
    [	1	,	18	,	6.6	],
    [	1	,	20	,	6.7	],
    [	1	,	23	,	6.8	],
    [	1	,	28	,	6.9	],
    [	1	,	34	,	7	],
    [	1	,	41	,	7.1	],
    [	1	,	46	,	7.2	],
    [	1	,	55	,	7.3	],
    [	1	,	60	,	7.4	],
    [	1	,	73	,	7.5	],
    [	2	,	2	,	2.9	],
    [	2	,	3	,	3.1	],
    [	2	,	4	,	3.9	],
    [	2	,	6	,	5	],
    [	2	,	7	,	5.1	],
    [	2	,	8	,	5.4	],
    [	2	,	10	,	5.6	],
    [	2	,	11	,	5.7	],
    [	2	,	12	,	5.8	],
    [	2	,	13	,	6	],
    [	2	,	14	,	6.1	],
    [	2	,	15	,	6.2	],
    [	2	,	17	,	6.3	],
    [	2	,	20	,	6.4	],
    [	2	,	23	,	6.6	],
    [	2	,	26	,	6.7	],
    [	2	,	27	,	6.8	],
    [	2	,	29	,	6.9	],
    [	2	,	31	,	7	],
    [	2	,	35	,	7.1	],
    [	2	,	42	,	7.2	],
    [	2	,	44	,	7.3	],
    [	2	,	54	,	7.4	],
    [	2	,	59	,	7.5	],
    [	3	,	1	,	2.4	],
    [	3	,	2	,	3.3	],
    [	3	,	3	,	3.7	],
    [	3	,	4	,	3.9	],
    [	3	,	5	,	4.5	],
    [	3	,	6	,	4.6	],
    [	3	,	7	,	4.8	],
    [	3	,	8	,	5.2	],
    [	3	,	9	,	5.4	],
    [	3	,	11	,	5.7	],
    [	3	,	13	,	5.8	],
    [	3	,	14	,	6	],
    [	3	,	15	,	6.1	],
    [	3	,	16	,	6.2	],
    [	3	,	17	,	6.3	],
    [	3	,	18	,	6.4	],
    [	3	,	19	,	6.5	],
    [	3	,	20	,	6.6	],
    [	3	,	23	,	6.7	],
    [	3	,	25	,	6.8	],
    [	3	,	27	,	6.9	],
    [	3	,	29	,	7	],
    [	3	,	33	,	7.1	],
    [	3	,	37	,	7.2	],
    [	3	,	44	,	7.3	],
    [	3	,	49	,	7.4	],
    [	3	,	54	,	7.5	],
    [	4	,	1	,	1.2	],
    [	4	,	2	,	2.4	],
    [	4	,	3	,	3.2	],
    [	4	,	4	,	3.9	],
    [	4	,	5	,	4.3	],
    [	4	,	6	,	5	],
    [	4	,	7	,	5.1	],
    [	4	,	8	,	5.3	],
    [	4	,	9	,	5.6	],
    [	4	,	10	,	5.7	],
    [	4	,	11	,	5.9	],
    [	4	,	12	,	6.1	],
    [	4	,	13	,	6.2	],
    [	4	,	14	,	6.3	],
    [	4	,	15	,	6.4	],
    [	4	,	16	,	6.5	],
    [	4	,	18	,	6.6	],
    [	4	,	20	,	6.7	],
    [	4	,	22	,	6.9	],
    [	4	,	23	,	7	],
    [	4	,	25	,	7.2	],
    [	4	,	30	,	7.5	],
    [	5	,	1	,	2.8	],
    [	5	,	2	,	3	],
    [	5	,	3	,	3.4	],
    [	5	,	4	,	4.5	],
    [	5	,	5	,	5.1	],
    [	5	,	6	,	5.2	],
    [	5	,	7	,	5.4	],
    [	5	,	8	,	6	],
    [	5	,	10	,	6.2	],
    [	5	,	11	,	6.4	],
    [	5	,	12	,	6.5	],
    [	5	,	13	,	6.6	],
    [	5	,	19	,	6.9	],
    [	5	,	22	,	7	],
    [	5	,	24	,	7.1	],
    [	5	,	25	,	7.2	],
    [	5	,	26	,	7.3	],
    [	5	,	27	,	7.4	],
    [	6	,	1	,	2.1	],
    [	6	,	2	,	2.6	],
    [	6	,	3	,	2.9	],
    [	6	,	4	,	4.7	],
    [	6	,	5	,	5.2	],
    [	6	,	6	,	5.4	],
    [	6	,	7	,	5.7	],
    [	6	,	8	,	5.9	],
    [	6	,	9	,	6.2	],
    [	6	,	12	,	6.3	],
    [	6	,	14	,	6.4	],
    [	6	,	17	,	6.5	],
    [	6	,	20	,	6.6	],
    [	6	,	25	,	6.7	],
    [	6	,	29	,	6.8	],
    [	6	,	30	,	6.9	],
    [	6	,	33	,	7	],
    [	6	,	35	,	7.1	],
    [	6	,	40	,	7.2	],
    [	6	,	43	,	7.3	],
    [	6	,	46	,	7.4	],
    [	6	,	49	,	7.5	],
    [	7	,	1	,	2.6	],
    [	7	,	2	,	3.3	],
    [	7	,	3	,	4	],
    [	7	,	4	,	4.5	],
    [	7	,	5	,	4.6	],
    [	7	,	7	,	4.9	],
    [	7	,	8	,	5.2	],
    [	7	,	10	,	5.4	],
    [	7	,	12	,	5.5	],
    [	7	,	13	,	5.9	],
    [	7	,	14	,	6	],
    [	7	,	15	,	6.1	],
    [	7	,	17	,	6.2	],
    [	7	,	18	,	6.3	],
    [	7	,	20	,	6.4	],
    [	7	,	22	,	6.5	],
    [	7	,	23	,	6.8	],
    [	7	,	26	,	6.9	],
    [	7	,	33	,	7	],
    [	7	,	41	,	7.1	],
    [	7	,	48	,	7.2	],
    [	7	,	49	,	7.3	],
    [	7	,	57	,	7.4	],
    [	7	,	65	,	7.5	],
    [	8	,	1	,	1.1	],
    [	8	,	2	,	1.8	],
    [	8	,	3	,	3	],
    [	8	,	4	,	4.7	],
    [	8	,	5	,	4.8	],
    [	8	,	7	,	5.1	],
    [	8	,	8	,	5.3	],
    [	8	,	9	,	5.5	],
    [	8	,	10	,	5.9	],
    [	8	,	11	,	6	],
    [	8	,	12	,	6.1	],
    [	8	,	15	,	6.2	],
    [	8	,	16	,	6.3	],
    [	8	,	17	,	6.4	],
    [	8	,	20	,	6.5	],
    [	8	,	21	,	6.6	],
    [	8	,	23	,	6.7	],
    [	8	,	26	,	6.8	],
    [	8	,	28	,	6.9	],
    [	8	,	29	,	7	],
    [	8	,	31	,	7.4	],
    [	8	,	32	,	7.5	],
    [	9	,	1	,	1.3	],
    [	9	,	2	,	2.2	],
    [	9	,	4	,	2.6	],
    [	9	,	5	,	3.4	],
    [	9	,	6	,	3.8	],
    [	9	,	7	,	4.4	],
    [	9	,	8	,	5	],
    [	9	,	11	,	5.6	],
    [	9	,	13	,	5.7	],
    [	9	,	15	,	6	],
    [	9	,	18	,	6.1	],
    [	9	,	20	,	6.3	],
    [	9	,	21	,	6.4	],
    [	9	,	24	,	6.6	],
    [	9	,	25	,	6.7	],
    [	9	,	29	,	6.9	],
    [	9	,	32	,	7	],
    [	9	,	34	,	7.1	],
    [	9	,	38	,	7.2	],
    [	9	,	40	,	7.3	],
    [	9	,	44	,	7.4	],
    [	9	,	45	,	7.5	],
    [	10	,	1	,	1.2	],
    [	10	,	2	,	2.9	],
    [	10	,	3	,	3.4	],
    [	10	,	4	,	4.5	],
    [	10	,	5	,	6	],
    [	10	,	7	,	6	],
    [	10	,	8	,	6	],
    [	10	,	11	,	6.1	],
    [	10	,	12	,	6.4	],
    [	10	,	15	,	6.5	],
    [	10	,	16	,	6.7	],
    [	10	,	17	,	6.8	],
    [	10	,	19	,	7	],
    [	10	,	22	,	7.1	],
    [	10	,	23	,	7.2	],
    [	10	,	25	,	7.3	],
    [	10	,	26	,	7.4	],
    [	10	,	31	,	7.5	],
    [	11	,	1	,	0.2	],
    [	11	,	2	,	2.3	],
    [	11	,	3	,	2.7	],
    [	11	,	4	,	3	],
    [	11	,	5	,	3.8	],
    [	11	,	6	,	4.5	],
    [	11	,	7	,	4.7	],
    [	11	,	9	,	4.9	],
    [	11	,	10	,	5	],
    [	11	,	11	,	5.3	],
    [	11	,	13	,	5.7	],
    [	11	,	14	,	5.8	],
    [	11	,	17	,	5.9	],
    [	11	,	19	,	6	],
    [	11	,	21	,	6.1	],
    [	11	,	23	,	6.2	],
    [	11	,	25	,	6.3	],
    [	11	,	27	,	6.4	],
    [	11	,	30	,	6.5	],
    [	11	,	32	,	6.6	],
    [	11	,	36	,	6.7	],
    [	11	,	39	,	6.8	],
    [	11	,	45	,	6.9	],
    [	11	,	52	,	7	],
    [	11	,	55	,	7.1	],
    [	11	,	60	,	7.2	],
    [	11	,	69	,	7.3	],
    [	11	,	73	,	7.4	],
    [	11	,	86	,	7.5	],
    [	12	,	2	,	2.7	],
    [	12	,	3	,	3	],
    [	12	,	4	,	3.6	],
    [	12	,	5	,	3.7	],
    [	12	,	6	,	5.2	],
    [	12	,	7	,	5.3	],
    [	12	,	9	,	5.4	],
    [	12	,	11	,	5.6	],
    [	12	,	13	,	5.8	],
    [	12	,	14	,	6.4	],
    [	12	,	17	,	6.5	],
    [	12	,	19	,	6.7	],
    [	12	,	20	,	6.8	],
    [	12	,	22	,	6.9	],
    [	12	,	23	,	7	],
    [	12	,	24	,	7.1	],
    [	12	,	30	,	7.2	],
    [	13	,	1	,	3.9	],
    [	13	,	2	,	4	],
    [	13	,	4	,	4.3	],
    [	13	,	5	,	4.5	],
    [	13	,	6	,	5	],
    [	13	,	7	,	5.5	],
    [	13	,	8	,	5.7	],
    [	13	,	12	,	5.9	],
    [	13	,	13	,	6	],
    [	13	,	15	,	6.1	],
    [	13	,	16	,	6.2	],
    [	13	,	17	,	6.3	],
    [	13	,	18	,	6.5	],
    [	13	,	20	,	6.8	],
    [	13	,	23	,	6.9	],
    [	13	,	27	,	7	],
    [	13	,	32	,	7.1	],
    [	13	,	36	,	7.2	],
    [	13	,	42	,	7.3	],
    [	13	,	43	,	7.4	],
    [	13	,	52	,	7.5	],
    [	14	,	1	,	2.3	],
    [	14	,	2	,	2.6	],
    [	14	,	3	,	4	],
    [	14	,	4	,	4.8	],
    [	14	,	6	,	4.9	],
    [	14	,	7	,	5	],
    [	14	,	8	,	5.2	],
    [	14	,	11	,	5.5	],
    [	14	,	12	,	5.7	],
    [	14	,	13	,	5.9	],
    [	14	,	14	,	6	],
    [	14	,	15	,	6.1	],
    [	14	,	16	,	6.2	],
    [	14	,	18	,	6.3	],
    [	14	,	20	,	6.4	],
    [	14	,	24	,	6.5	],
    [	14	,	28	,	6.6	],
    [	14	,	32	,	6.7	],
    [	14	,	34	,	6.8	],
    [	14	,	36	,	6.9	],
    [	14	,	41	,	7	],
    [	14	,	46	,	7.1	],
    [	14	,	49	,	7.2	],
    [	14	,	54	,	7.3	],
    [	14	,	61	,	7.4	],
    [	15	,	1	,	3	],
    [	15	,	2	,	3.4	],
    [	15	,	3	,	3.9	],
    [	15	,	4	,	4.9	],
    [	15	,	5	,	5.1	],
    [	15	,	6	,	5.5	],
    [	15	,	8	,	5.8	],
    [	15	,	10	,	6	],
    [	15	,	12	,	6.1	],
    [	15	,	18	,	6.3	],
    [	15	,	21	,	6.4	],
    [	15	,	22	,	6.6	],
    [	15	,	26	,	6.7	],
    [	15	,	32	,	6.9	],
    [	15	,	33	,	7	],
    [	15	,	35	,	7.1	],
    [	15	,	38	,	7.2	],
    [	15	,	48	,	7.3	],
    [	15	,	54	,	7.4	],
    [	15	,	61	,	7.5	],
    [	16	,	1	,	1.7	],
    [	16	,	2	,	1.9	],
    [	16	,	3	,	2.9	],
    [	16	,	4	,	4.6	],
    [	16	,	5	,	5.1	],
    [	16	,	6	,	5.7	],
    [	16	,	7	,	5.9	],
    [	16	,	9	,	6	],
    [	16	,	11	,	6.2	],
    [	16	,	13	,	6.3	],
    [	16	,	14	,	6.4	],
    [	16	,	17	,	6.6	],
    [	16	,	19	,	6.8	],
    [	16	,	22	,	6.9	],
    [	16	,	24	,	7	],
    [	16	,	26	,	7.1	],
    [	16	,	27	,	7.2	],
    [	16	,	28	,	7.3	],
    [	16	,	33	,	7.4	],
    [	16	,	36	,	7.5	],
    [	17	,	1	,	0.2	],
    [	17	,	2	,	2.1	],
    [	17	,	3	,	2.7	],
    [	17	,	4	,	3.5	],
    [	17	,	5	,	3.9	],
    [	17	,	6	,	4.2	],
    [	17	,	8	,	4.6	],
    [	17	,	9	,	5.1	],
    [	17	,	10	,	5.5	],
    [	17	,	11	,	5.9	],
    [	17	,	12	,	6	],
    [	17	,	14	,	6.1	],
    [	17	,	16	,	6.2	],
    [	17	,	17	,	6.3	],
    [	17	,	20	,	6.4	],
    [	17	,	26	,	6.5	],
    [	17	,	30	,	6.6	],
    [	17	,	35	,	6.7	],
    [	17	,	37	,	6.8	],
    [	17	,	41	,	6.9	],
    [	17	,	44	,	7	],
    [	17	,	50	,	7.1	],
    [	17	,	55	,	7.2	],
    [	17	,	60	,	7.3	],
    [	17	,	68	,	7.4	],
    [	17	,	81	,	7.5	],
    [	18	,	1	,	2.3	],
    [	18	,	2	,	3.9	],
    [	18	,	3	,	4.2	],
    [	18	,	4	,	4.3	],
    [	18	,	6	,	5	],
    [	18	,	7	,	5.1	],
    [	18	,	9	,	5.2	],
    [	18	,	10	,	5.5	],
    [	18	,	11	,	5.7	],
    [	18	,	12	,	5.9	],
    [	18	,	13	,	6.1	],
    [	18	,	14	,	6.3	],
    [	18	,	17	,	6.4	],
    [	18	,	18	,	6.5	],
    [	18	,	24	,	6.6	],
    [	18	,	27	,	6.7	],
    [	18	,	31	,	6.9	],
    [	18	,	33	,	7	],
    [	18	,	37	,	7.2	],
    [	18	,	41	,	7.3	],
    [	18	,	46	,	7.4	],
    [	18	,	52	,	7.5	],
    [	19	,	1	,	2.2	],
    [	19	,	2	,	3.6	],
    [	19	,	3	,	3.9	],
    [	19	,	4	,	5.2	],
    [	19	,	5	,	5.4	],
    [	19	,	6	,	5.7	],
    [	19	,	8	,	6.1	],
    [	19	,	11	,	6.4	],
    [	19	,	12	,	6.6	],
    [	19	,	14	,	6.7	],
    [	19	,	15	,	6.8	],
    [	19	,	16	,	7	],
    [	19	,	17	,	7.1	],
    [	19	,	18	,	7.2	],
    [	19	,	21	,	7.3	],
    [	19	,	28	,	7.4	],
    [	19	,	32	,	7.5	],
    [	20	,	1	,	4.2	],
    [	20	,	2	,	4.4	],
    [	20	,	4	,	4.7	],
    [	20	,	5	,	5	],
    [	20	,	6	,	5.4	],
    [	20	,	7	,	5.7	],
    [	20	,	9	,	5.8	],
    [	20	,	10	,	5.9	],
    [	20	,	13	,	6	],
    [	20	,	15	,	6.1	],
    [	20	,	16	,	6.2	],
    [	20	,	18	,	6.3	],
    [	20	,	23	,	6.4	],
    [	20	,	28	,	6.6	],
    [	20	,	33	,	6.7	],
    [	20	,	37	,	6.8	],
    [	20	,	45	,	6.9	],
    [	20	,	50	,	7	],
    [	20	,	55	,	7.1	],
    [	20	,	60	,	7.2	],
    [	20	,	67	,	7.3	],
    [	20	,	74	,	7.4	],
    [	20	,	82	,	7.5	],
    [	21	,	4	,	4	],
    [	21	,	5	,	4.5	],
    [	21	,	6	,	4.7	],
    [	21	,	7	,	5.6	],
    [	21	,	8	,	5.7	],
    [	21	,	9	,	6	],
    [	21	,	10	,	6.4	],
    [	21	,	11	,	6.5	],
    [	21	,	14	,	6.8	],
    [	21	,	15	,	7	],
    [	21	,	18	,	7.4	],
    [	21	,	20	,	7.5	],
    [	22	,	5	,	4.3	],
    [	22	,	6	,	4.4	],
    [	22	,	7	,	4.5	],
    [	22	,	8	,	4.8	],
    [	22	,	9	,	5.5	],
    [	22	,	13	,	5.7	],
    [	22	,	15	,	6	],
    [	22	,	16	,	6.2	],
    [	22	,	17	,	6.3	],
    [	22	,	18	,	6.4	],
    [	22	,	19	,	6.5	],
    [	22	,	21	,	6.6	],
    [	22	,	22	,	6.7	],
    [	22	,	23	,	6.8	],
    [	22	,	24	,	6.9	],
    [	22	,	25	,	7.2	],
    [	22	,	27	,	7.3	],
    [	22	,	29	,	7.4	],
    [	23	,	6	,	5.2	],
    [	23	,	7	,	5.8	],
    [	23	,	8	,	6	],
    [	23	,	9	,	6.4	],
    [	23	,	10	,	6.5	],
    [	23	,	11	,	6.9	],
    [	23	,	13	,	7.3	],
    [	23	,	14	,	7.4	],
    [	23	,	17	,	7.5	],
    [	24	,	5	,	4.5	],
    [	24	,	7	,	5.2	],
    [	24	,	8	,	5.6	],
    [	24	,	9	,	5.7	],
    [	24	,	11	,	5.8	],
    [	24	,	12	,	6	],
    [	24	,	13	,	6.1	],
    [	24	,	14	,	6.2	],
    [	24	,	16	,	6.3	],
    [	24	,	17	,	6.6	],
    [	24	,	19	,	6.7	],
    [	24	,	20	,	6.8	],
    [	24	,	21	,	6.9	],
    [	24	,	24	,	7	],
    [	24	,	26	,	7.1	],
    [	24	,	27	,	7.3	],
    [	24	,	30	,	7.4	],
    [	24	,	31	,	7.5	],
    [	25	,	4	,	4	],
    [	25	,	5	,	5.2	],
    [	25	,	6	,	5.6	],
    [	25	,	7	,	6	],
    [	25	,	8	,	6.1	],
    [	25	,	9	,	6.2	],
    [	25	,	10	,	6.3	],
    [	25	,	11	,	6.6	],
    [	25	,	12	,	6.9	],
    [	25	,	14	,	7	],
    [	25	,	15	,	7.1	],
    [	26	,	7	,	4.1	],
    [	26	,	8	,	4.9	],
    [	26	,	12	,	5.1	],
    [	26	,	14	,	5.2	],
    [	26	,	15	,	5.3	],
    [	26	,	17	,	5.5	],
    [	26	,	18	,	5.7	],
    [	26	,	22	,	5.8	],
    [	26	,	24	,	5.9	],
    [	26	,	31	,	6.2	],
    [	26	,	32	,	6.3	],
    [	26	,	34	,	6.4	],
    [	26	,	37	,	6.5	],
    [	26	,	38	,	6.6	],
    [	26	,	40	,	6.7	],
    [	26	,	42	,	6.8	],
    [	26	,	43	,	6.9	],
    [	26	,	44	,	7	],
    [	26	,	46	,	7.1	],
    [	26	,	49	,	7.2	],
    [	26	,	50	,	7.4	],
    [	26	,	51	,	7.5	],
    [	27	,	5	,	4.6	],
    [	27	,	6	,	4.7	],
    [	27	,	7	,	5.8	],
    [	27	,	9	,	6.2	],
    [	27	,	11	,	6.4	],
    [	27	,	14	,	6.7	],
    [	27	,	15	,	6.8	],
    [	27	,	17	,	7	],
    [	27	,	18	,	7.1	],
    [	27	,	19	,	7.2	],
    [	27	,	22	,	7.4	],
    [	28	,	4	,	4	],
    [	28	,	5	,	5.4	],
    [	28	,	6	,	5.5	],
    [	28	,	7	,	5.8	],
    [	28	,	8	,	6.4	],
    [	28	,	10	,	6.5	],
    [	28	,	14	,	7	],
    [	28	,	15	,	7.2	],
    [	28	,	16	,	7.3	],
    [	28	,	17	,	7.4	],
    [	28	,	18	,	7.5	],
    [	29	,	4	,	4.1	],
    [	29	,	5	,	4.7	],
    [	29	,	6	,	4.8	],
    [	29	,	7	,	5	],
    [	29	,	8	,	5.6	],
    [	29	,	9	,	5.7	],
    [	29	,	10	,	6.4	],
    [	29	,	11	,	6.5	],
    [	29	,	13	,	6.6	],
    [	29	,	17	,	6.7	],
    [	29	,	20	,	6.9	],
    [	29	,	23	,	7	],
    [	29	,	24	,	7.1	],
    [	30	,	5	,	4	],
    [	30	,	6	,	4.2	],
    [	30	,	7	,	4.8	],
    [	30	,	8	,	4.9	],
    [	30	,	9	,	5.1	],
    [	30	,	10	,	5.2	],
    [	30	,	11	,	5.4	],
    [	30	,	12	,	5.6	],
    [	30	,	13	,	5.7	],
    [	30	,	14	,	5.8	],
    [	30	,	15	,	5.9	],
    [	30	,	16	,	6.2	],
    [	30	,	18	,	6.3	],
    [	30	,	19	,	6.4	],
    [	30	,	20	,	6.5	],
    [	30	,	22	,	6.6	],
    [	30	,	23	,	7	],
    [	30	,	28	,	7.1	],
    [	30	,	31	,	7.3	],
    [	30	,	32	,	7.5	],
    ]						;    
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تشخیص قدر آسمان</title>

    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: rgb(0,0,10);
        color: red;
    }
    input, select {
        color: inherit;
        background-color: inherit;
        border: .1em solid red;
        border-radius: .5em;
        display: block;
        padding: .5em;
        margin:0 auto 0 auto;
        margin-bottom: 1em;
        width: 30em;
    }
    form {
        margin: 1em auto 0 auto;
        width: 90%;
        padding: .5em;
        text-align: center;
    }
    form label {

    }

    #jb img, #result img#area {
        max-width: 100%;
        display: block;
        margin:0 auto 0 auto;
    }

    #result span#lm {
        font-size: 5em;
        display: block;
        text-align: center;
        margin:0 auto 0 auto;
    }
    </style>

</head>
<body style="direction: rtl;">

    <header></header>

    <div id="jb">
        <img src="img/bigskyrjm.gif" alt="Sky Areas Map">
    </div>

    <form method="post" action="lm.php">

        <label for="constellation">صورت فلکی</label>
        <select name="constellation">
            <option value="1">1- Draco (Chi-Zeta-Delta-Xi Dra)</option>
            <option value="2">2- Perseus (Beta-Delta-Zeta Per)</option>
            <option value="3">3- Ursa Major (23-Theta-Beta UMa)</option>
            <option value="4">4- Gemini (Alpha-Epsilon-Beta Gem)</option>
            <option value="5">5- Aquila (Zeta-Gamma-Delta Aql)</option>
            <option value="6">6- Pegasus-Andromeda (Alpha And--Gamma-Alpha Peg)</option>
            <option value="7">7- Cepheus (Alpha-Beta-Delta Cep)</option>
            <option value="8">8- Taurus (Alpha-Beta-Zeta Tau)</option>
            <option value="9">9- Leo (Alpha-Beta-Gamma-Delta Leo)</option>
            <option value="10">10- Virgo (Alpha-Zeta-Gamma Vir)</option>
            <option value="11">11- Corona Borealis-Bootes (Alpha CrB--Gamma-Alpha Boo)</option>
            <option value="12">12- Serpens-Libra-Ophiuchus (Alpha Ser--Beta Lib--Delta Oph)</option>
            <option value="13">13- Lyra-Hercules (Beta-Zeta Lyr--Theta-Nu Her)</option>
            <option value="14">14- Cygnus (Epsilon-Eta-Gamma Cyg)</option>
            <option value="15">15- Draco-Hercules (Beta Dra--Tau-Pi Her)</option>
            <option value="16">16- Canes Venatici-Ursa Major (Alpha CVn--Epsilon-Eta UMa)</option>
            <option value="17">17- Auriga (Epsilon-Theta-Delta Aur)</option>
            <option value="18">18- Andromeda (Mu-Gamma-Phi And)</option>
            <option value="19">19- Draco-Ursa Minor (Kappa-Alpha Dra--Beta UMi)</option>
            <option value="20">20- Camelopardalis (42-Beta-Gamma Cam)</option>
            <option value="21">21- Pisces Austrinus-Aquarius (Alpha PsA--98-Delta Aqr)</option>
            <option value="22">22- Lepus-Orion-Eridanus (Beta Lep--Beta Ori--53 Eri)</option>
            <option value="23">23- Corvus (Delta-Gamma-Epsilon-Beta Crv)</option>
            <option value="24">24- Libra (Beta-Gamma-Sigma-Alpha Lib)</option>
            <option value="25">25- Scorpius-Lupus (Alpha-Epsilon Sco--Chi Lup)</option>
            <option value="26">26- Triangulum Astrinus-Ara-Centaurus (Gamma-Alpha TrA--Eta Ara--Alpha Cen)</option>
            <option value="27">27- Centaurus-Crux (Beta Cen-Alpha-Gamma Cru)</option>
            <option value="28">28- Carina (Beta-Epsilon-Iota Car)</option>
            <option value="29">29- Hydrus (Gamma-Alpha-Beta Hyd)</option>
            <option value="30">30- Tucana-Pavo (Alpha Tuc--Alpha-Epsilon Pav)</option>
        </select>

        <label for="stars_count">تعداد ستارگان درون ناحیه و روی خطوط</label>
        <input type="number" name="stars_count" min="1" max="86" />

        <input type="submit" value="محاسبه‌ی قدر آسمان" />
    </form>

    <div id="result">
    
    <?php
    if (isset($_POST['stars_count'])):
        $count = (int) $_POST['stars_count'];
        $area_no = (int) $_POST['constellation'];
        foreach ($stars as $star)
        {
            $star_area_no   = $star[0];
            $stars_count     = $star[1];
            $star_lm        = $star[2];

            if ($area_no != $star_area_no)
                continue;

            else if ($count >= $stars_count)
            {
                echo '<span id="lm">' . $star_lm . '<span>';
                echo '<img id="area" src="img/' . $area_no . '.gif" />';
                break;
            }

            else
            {
                echo 'Err.';
            }

        }
    endif;
    ?>

    </div>
</body>
</html>