from PIL import Image, ImageDraw, ImageFilter
from math import *

step=50

I=Image.new('RGBA',(1000,1000),(0,0,0,255))
d=ImageDraw.Draw(I)

def draw_circle(d,i,j, fill=(255,255,255,255)):
    r=max(5, sin(i*pi/1000)*sin(j*pi/1000)*15)
    d.ellipse((i-r,j-r,i+r,j+r),fill=fill)

for j in range(0,1000+step,step/2):
    for i in range(0,1000+step,step/2):
        draw_circle(d,i+step,j+step)

I=I.rotate(25)
I = I.filter(ImageFilter.SMOOTH)
I.show()
